<?php
use PHPMailer\PHPMailer\PHPMailer;

class Email_model extends Ci_model
{

//    generate random string for email reference
    public function generate_email_refrence()
    {
        $chars = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
            "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
            "w", "x", "y", "z");
        $textstr = "";
        for ($i = 0; $i < 6; $i++) {
            $textstr .= $chars[rand(0, count($chars) - 1)];
        }
        return $textstr;
    }

//    return an array containing email body data and to from fields
    public function get_email_data($email_reference)
    {
        $data  = array();
        $query = $this->db->get_where('email', array('email_reference' => $email_reference, 'is_active' => 'y'));
        if ($query->num_rows() > 0) {
            $email = $query->result_array();
        } else {
            $data['body']           = '';
            $data['subject']        = '';
            $data['from_name']      = '';
            $data['from_email']     = '';
            $data['to_email']       = '';
            $data['cc_email']       = '';
            $data['bcc_email']      = '';
            $data['reply_to_email'] = '';
            $data['email_type']     = '';
            $data['message']        = '';
            $data['is_active']      = 'n';
            return $data;
        }

        $data['body']            = $email[0]['body'];
        $data['subject']         = $email[0]['subject'];
        $data['from_name']       = $email[0]['from_name'];
        $data['from_email']      = $email[0]['from_email'];
        $data['to_email']        = trim($email[0]['to_email']);
        $data['cc_email']        = $email[0]['cc_email'];
        $data['bcc_email']       = $email[0]['bcc_email'];
        $data['reply_to_email']  = $email[0]['reply_to_email'];
        $data['email_type']      = $email[0]['email_type'];
        $data['is_active']       = $email[0]['is_active'];
        $data['email_reference'] = $email[0]['email_reference'];

        $domain     = site_url();
        $email_data = "<table width='100%' style=\"font-family:arial,helvetica,sans-serif;font-weight:normal;font-size:12px;color:#424141;\">";

        $email[0]['body'] = str_replace("#from_name#", $data['from_name'], $email[0]['body']);
        if ($data['email_type'] == 'notification') {
            $email[0]['body'] = str_replace("#domain#", $domain, $email[0]['body']);
        } else {
            $email[0]['body'] = str_replace("#domain#", $jury_domain, $email[0]['body']);
        }

        $email_data .= '<tr><td colspan="2" width="95%">' . $email[0]['body'] . '</td></tr>';
        $email_data .= "</table>";
        $email_data      = str_replace('src="/uploads', 'src="' . base_url() . 'uploads', $email_data);
        $data['message'] = $email_data;

        return $data;
    }

//    function to save notification logs
    public function save_email_log($email_data, $email_sent, $email_type, $email_reference = '')
    {

        $data['subject'] = $email_data['subject'];

        $from_name  = $email_data['from_name'];
        $from_email = $email_data['from_email'];

        $data['from_name'] = '"' . $from_name . '"' . ' <' . $from_email . '>';
        if (isset($email_data['cc_email'])) {
            $data['cc_email'] = $email_data['cc_email'];
        }
        if (isset($email_data['bcc_email'])) {
            $data['bcc_email'] = $email_data['bcc_email'];
        }
        $data['return_path'] = $email_data['reply_to_email'];
        $data['recipient']   = $email_data['to_email'];
//        $data['recipient'] = $email_obj->_recipients;
        $data['body']            = $email_data['message'];
        $data['date_created']    = date('Y-m-d H:i:s');
        $data['email_type']      = $email_type;
        $data['email_reference'] = $email_reference;

        if ($email_sent) {
            $data['is_sent'] = 'y';
        } else {
            $data['is_sent'] = 'n';
        }
        $this->db->insert('email_logs', $data);
        return true;
    }

//    send email
    public function send_email($email_data)
    {
        $this->config->load('email');
        $mail              = new PHPMailer();
        $mail->SMTPDebug   = 0;
        $mail->Debugoutput = 'html';
        $mail->CharSet     = 'UTF-8';

        // set smtp
        $mail->isSMTP();
        $mail->Host       = $this->config->item('smtp_host');
        $mail->Port       = $this->config->item('smtp_port');
        $mail->SMTPSecure = $this->config->item('smtp_crypto');
        $mail->SMTPAuth   = true;
        $mail->Username   = $this->config->item('smtp_user');
        $mail->Password   = $this->config->item('smtp_pass');
        $mail->WordWrap   = 50;
        $mail->isHTML(true);

        $mail->setFrom($email_data['from_email'], $email_data['from_name']);

        $emails_list = $this->extract_emails($email_data['to_email']);
        if (count($emails_list) > 0) {
            foreach ($emails_list as $emails) {
                if (isset($emails[1]) && $emails[1] != '') {
                    $mail->addAddress($emails[1], $emails[0]);
                } else {
                    $mail->addAddress($emails[0]);
                }
            }
        }
        if (!empty($email_data['cc_email'])) {
            $cc_emails = $this->extract_emails($email_data['cc_email']);
            if (count($cc_emails) > 0) {
                foreach ($cc_emails as $cc) {
                    if (isset($cc[1]) && $cc[1] != '') {
                        $mail->addCC($cc[1], $cc[0]);
                    } else {
                        $mail->addCC($cc[0]);
                    }
                }
            }
        }
        if (!empty($email_data['bcc_email'])) {
            $bcc_emails = $this->extract_emails($email_data['bcc_email']);
            if (count($bcc_emails) > 0) {
                foreach ($bcc_emails as $bcc) {
                    if (isset($bcc[1]) && $bcc[1] != '') {
                        $mail->addBCC($bcc[1], $bcc[0]);
                    } else {
                        $mail->addBCC($bcc[0]);
                    }
                }
            }
        }

        if (isset($email_data['attach']) && !empty($email_data['attach'])) {
            if (isset($email_data['rename_attachment']) && $email_data['rename_attachment'] == 1) {
                foreach ($email_data['attach'] as $attach_name => $attachemnts) {
                    $mail->addAttachment($attachemnts, $attach_name);
                }
            } else {
                foreach ($email_data['attach'] as $attachemnts) {
                    $mail->addAttachment($attachemnts);
                }
            }
        }

        if (!empty($email_data['reply_to_email'])) {
            if (isset($email_data['reply_to_name']) && !empty($email_data['reply_to_name'])) {
                $mail->addReplyTo($email_data['reply_to_email'], $email_data['reply_to_name']);
            } else {
                if (strstr($email_data['reply_to_email'], '<')) {
                    $rep_to_email = strstr($email_data['reply_to_email'], '<');
                    $rep_to_name  = substr($email_data['reply_to_email'], 0, strpos($email_data['reply_to_email'], '<'));
                    $clean_email  = preg_replace("#[<>]#", '', $rep_to_email);
                    $mail->addReplyTo($clean_email, $rep_to_name);
                } else {
                    $mail->addReplyTo($email_data['reply_to_email']);
                }
            }
        } else {
            $mail->addReplyTo($email_data['from_email'], $email_data['from_name']);
        }

        $mail->Subject = $email_data['subject'];
        $mail->AltBody = $mail->Body = $email_data['message'];

        if ($mail->send()) {
            $mail->ClearAttachments();
            $mail->ClearAllRecipients();
            $this->save_email_log($email_data, $email_sent = true, $email_data['email_type'], $email_data['email_reference']);
            return true;
        } else {
            $mail->ClearAttachments();
            $mail->ClearAllRecipients();
            log_message('error', $mail->ErrorInfo);
            $this->save_email_log($email_data, $email_sent = false, $email_data['email_type'], $email_data['email_reference']);
            return false;
        }
    }

    public function extract_emails($emails_list)
    {
        $emails         = [];
        $c              = 0;
        $explode_emails = explode(',', $emails_list);
        foreach ($explode_emails as $email) {
            $extract_email = explode('<', $email);
            foreach ($extract_email as $name_email) {
                $emails[$c][] = trim(rtrim($name_email, '>'));
            }
            $c++;
        }
        return $emails;
    }

}

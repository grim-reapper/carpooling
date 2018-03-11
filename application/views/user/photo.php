<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
  <div class="span9">
    <h1 class="title-lv1 border-bottom margin-bottom">
      Your personal information
   </h1>
   <div class= "content-box well">
               <legend>Your profile photo</legend>
               <?php if(!empty($photo)){ ?>
                   <?php if(!empty($this->session->userdata('provider'))){ ?>
                      <img src="<?php echo $photo ?>">
                   <?php }else{ ?>
                      <img src="<?php echo site_url('uploads/thumbnail/'.$photo) ?>">
                  <?php } ?>
               <?php } ?>
               <?php echo $error ?? '';?> 
               <?php if($this->session->flashdata('success')){ ?>
                  <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                     <?php } ?>
                      <?php if($this->session->flashdata('error')){ ?>
                  <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                     <?php } ?>
               <form method="post" action="<?php echo site_url() ?>dashboard/photo" enctype="multipart/form-data" id="uploadForm">
                  <div class="form-group">
                <input type="file" name="file" id="file" />
               </div>
                <input type="submit" name="submit" class="btn btn-default" value="Upload"/>
            </form>
            </div>
  </div>
</div>

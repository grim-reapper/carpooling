<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| HybridAuth settings
| -------------------------------------------------------------------------
| Your HybridAuth config can be specified below.
|
| See: https://github.com/hybridauth/hybridauth/blob/v2/hybridauth/config.php
*/
$config['facebook_app_id']              = '1370677352960020';
$config['facebook_app_secret']          = '2249e6b01bbdb59e80d89a7077fb86fc';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'authcontroller/loginWithFacebook';
$config['facebook_logout_redirect_url'] = 'authcontroller/logout';
$config['facebook_permissions']         = array('email','user_birthday');
$config['facebook_graph_version']       = 'v2.6';
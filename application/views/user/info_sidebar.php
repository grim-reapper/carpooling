<?php $uri = $this->uri->segment(2); ?>
<div class= "sidebar">
   <div class="list-group">
      <a href="#" class="list-group-item heading">Profile</a>
      <a href="<?php echo site_url() ?>dashboard/personal-info" class="list-group-item <?php echo ($uri == 'personal-info') ? 'selected' : ''; ?>">Personal information</a>
      <a href="<?php echo site_url() ?>dashboard/photo" class="list-group-item <?php echo ($uri == 'photo') ? 'selected' : ''; ?>">Photo</a>
      <a href="<?php echo site_url() ?>dashboard/preferences" class="list-group-item <?php echo ($uri == 'preferences') ? 'selected' : ''; ?>">Preference</a>
      <a href="<?php echo site_url() ?>dashboard/verification" class="list-group-item <?php echo ($uri == 'verification') ? 'selected' : ''; ?>">Verification</a>
      <a href="<?php echo site_url() ?>dashboard/cars" class="list-group-item <?php echo ($uri == 'cars') ? 'selected' : ''; ?>">Car</a>
      <a href="<?php echo site_url() ?>dashboard/postal-address" class="list-group-item <?php echo ($uri == 'postal-address') ? 'selected' : ''; ?>">Postal address</a>
   </div>
   <div class="list-group">
      <a href="#" class="list-group-item heading">Ratings</a>
      <a href="#" class="list-group-item">Rating you've received</a>
      <a href="#" class="list-group-item">Ratings you've left</a>
   </div>
   <div class="list-group">
      <a href="#" class="list-group-item heading">Account</a>
      <a href="#" class="list-group-item">Notifications</a>
      <?php if(empty($this->session->userdata('provider'))){ ?>
         <a href="<?php echo site_url() ?>dashboard/profile/password" class="list-group-item">Reset password</a>
      <?php } ?>
      <a href="<?php echo site_url() ?>logout" class="list-group-item">Sign out</a>
      <a href="#" class="list-group-item">Close my account</a>
   </div>
</div>
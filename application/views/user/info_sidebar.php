<?php $uri = $this->uri->segment(2); ?>
<div class="span3">
   <ul class="nav nav-tabs nav-stacked profile-menu">
      <li class="profile-header-menu">Profile</li>
      <li class="<?php echo ($uri == 'personal-info') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/personal-info">Personal information</a>
      </li>
      <li class="<?php echo ($uri == 'photo') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/photo">Photo</a>
      </li>
      <li class="<?php echo ($uri == 'preferences') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/preferences">Preferences</a>
      </li>
      <li class="<?php echo ($uri == 'verification') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/verification">Verification</a>
      </li>
      <li class="<?php echo ($uri == 'cars') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/cars">Car</a>
      </li>
      <li class="<?php echo ($uri == 'postal-address') ? 'active' : ''; ?>">
         <a href="<?php echo site_url() ?>dashboard/postal-address">Postal address</a>
      </li>
   </ul>
   <ul class="nav nav-tabs nav-stacked profile-menu">
      <li class="profile-header-menu">Ratings</li>
      <li>
         <a href="/dashboard/ratings/received">Ratings you've received</a>
      </li>
      <li>
         <a href="/dashboard/ratings/given">Ratings you've left</a>
      </li>
   </ul>
   <ul class="nav nav-tabs nav-stacked account-menu no-margin-bottom">
      <li class="profile-header-menu">Account</li>
      <li>
         <a href="/dashboard/profile/notifications">Notifications</a>
      </li>
      <?php if(empty($this->session->userdata('provider'))){ ?>
      <li>
         <a href="<?php echo site_url() ?>dashboard/profile/password">Password</a>
      </li>
      <?php } ?>
      <li>
         <a href="<?php echo site_url() ?>logout">Sign out</a>
      </li>
      <li>
         <a href="/dashboard/profile/remove">Close my account</a>
      </li>
   </ul>
</div>
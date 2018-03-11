<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
<div class="span9">
   <h1 class="title-lv1 border-bottom margin-bottom">
      Your personal information
   </h1>
   <div class="alert alert-danger" id="form-errors" style="display:none;"></div>
   <div class="alert alert-success" id="form-success" style="display:none;"></div>
    <form class="profile-form form-container profile-general-form form-horizontal padding no-margin-bottom" action="<?php echo site_url() ?>personal-info" method="post" id="personal-info-form">
      <fieldset>
         <section class="civility-container">
            <div class="control-group">
               <div class=" control-label">
                  Gender
               </div>
               <div class="controls gender-type">
                 <?php echo ucfirst($personal_info['gender']);?>
               </div>
            </div>
            <div class="control-group">
               <div class=" control-label">
                  Email
               </div>
               <div class="controls gender-type">
                 <?php echo ucfirst($personal_info['email']);?>
               </div>
            </div>
            <div class="control-group ">
               <label for="profile_general_firstname" class=" control-label">First name</label>
               <div class="controls"><input type="text" name="first_name" class="required" value="<?php echo $personal_info['first_name']; ?>" /></div>
            </div>
            <div class="control-group ">
               <label for="profile_general_lastname" class=" control-label">Last name</label>
               <div class="controls"><input type="text" name="last_name" class="required" value="<?php echo $personal_info['last_name']; ?>"/></div>
            </div>
         </section>
         <section class="contact-container">
            <div class="control-group cellphone-row">
               <label for="profile_general_phone_rawInput" class="phone_raw_input control-label">Mobile phone</label>
               <div class="controls">
                  <div class="form-row mobile-phone u-clearfix">
                     <div class="column-01" style="width:20px;float:left;margin: 7px 5px 0 0;">+92</div><div class="column-02"><input type="text" id="profile_general_phone_rawInput" name="contact_number" class="required" class="phone_raw_input tip"  title="Add your phone number" data-trigger="focus" value="<?php echo $personal_info['contact_number']; ?>"/></div>
                  </div>
               </div>
            </div>
         </section>
         <section class="birthday-container">
            <div class="control-group ">
               <label for="profile_general_birthYear" class=" control-label">Birth year</label>
               <div class="controls">
                 <input type="text" name="dob" id="dob" class="required" placeholder="YYYY-mm-dd" value="<?php echo $personal_info['dob']; ?>">
               </div>
            </div>
         </section>
         <section class="biography-container">
            <div class="control-group">
               <label for="profile_general_biography" class=" control-label">Bio</label>
               <div class="controls">
                  <div class="alert alert-info no-icon u-clearfix">
                     <svg aria-hidden="true"class="c-icon u-left margin-half-right u-darkBlue-fill"style="width: 24px; height: 24px;">
                        <use xlink:href="#icon-info"></use>
                     </svg>
                     <p class="u-overflowHidden no-margin-top">Tell other members about yourself and why they should want to travel with you (min. 10 characters).</p>
                  </div>
                  <div id="checkCommentWarning" class="alert no-icon hide rules-warning no-margin-top u-clearfix">
                     <svg aria-hidden="true"class="c-icon u-left margin-half-right u-orange-fill"style="width: 24px; height: 24px;">
                        <use xlink:href="#icon-exclamation-circle"></use>
                     </svg>
                     <p class="u-overflowHidden">
                        Please don't add your phone number here.
                     </p>
                  </div>
                  <div class="comments-container">
                     <input type="hidden" id="checkCommentUrl" data-url="/content/check" data-filter-msg="checkCommentWarning">
                     <div class="apply-char-counter u-left u-inlineBlock" data-limit="500">
                       <textarea name="bio" id="profile_general_biography" class="required" 
                       placeholder="Example: I am a student at Delhi University, and I often visit friends in Jaipur. I love photography and rock music." maxlength="500"><?php echo $personal_info['about']; ?></textarea>
                     </div>
                     <div class="directives">
                        <p class="u-textBold">Please do not include:</p>
                        <ul>
                           <li>
                              <span>Phone number</span>
                           </li>
                           <li>
                              <span>Facebook account details</span>
                           </li>
                           <li>
                              <span>Details about specific rides</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="control-group">
            <div class="controls button-container">
               <button type="submit" class="btn-validation btn-large apply-btn-loader" id="btn-info-save">Save</button>
            </div>
         </div>
      </fieldset>
   </form>
</div>
</div>

<script src="<?php echo site_url();?>assets/js/jquery.validate.min.js"></script>
<script>
    $(function(){
    $('#btn-info-save').click(function() { 
        // validate and process form here  
        $('#personal-info-form').validate({
            
            submitHandler:function(form) {
                 var dataString = $(form).serialize();
                // The AJAX
                $.ajax({  
                  type: 'POST',
                  url: $(form).attr('action'),
                  data: dataString,
                  dataType: "json",
                  success:function(data) {
                    $('.loading').hide();
                    if(data.status == 'success'){
                        $('#form-errors').hide();
                        $('#form-success').show();
                        $('#form-success').html(data.message);
                    }else {
                        $('#form-errors').show();
                        $('#form-errors').html(data.message);
                    }
                  },
                  beforeSend: function(){
                    $('.loading').show();
                  },
                    error:function(){
                        alert('Whoops! This didn\'t work. Please contact us.')
                    }
                });
            }
        });
    });
});
</script>
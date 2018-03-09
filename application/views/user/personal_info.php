<div class="site-panel"style="margin-top:110px">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <?php $this->load->view('user/info_sidebar'); ?>
         </div>
         <div class="col-md-9 ">
            <div class= "content-box well">
               <legend>Your personal information</legend>
               <div class="alert alert-danger" id="form-errors" style="display:none;"></div>
               <div class="alert alert-success" id="form-success" style="display:none;"></div>
               <form class="form-horizontal" action="<?php echo site_url() ?>personal-info" method="post" id="personal-info-form">
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="first_name">First name:</label>
                     <div class="col-sm-12 col-md-6">
                       <input type="text" class="form-control required" id="first_name" placeholder="Enter your first name" name="first_name" value="<?php echo $personal_info['first_name']; ?>">
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="last_name">Last name:</label>
                     <div class="col-sm-12 col-md-6">          
                       <input type="text" class="form-control required" id="last_name" placeholder="Enter your last name" name="last_name" value="<?php echo $personal_info['last_name']; ?>">
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="gender">Gender:</label>
                     <div class="col-sm-12 col-md-6">          
                       <label class="radio-inline"><input type="radio" value="male" name="gender" <?php echo $personal_info['gender'] == 'male' ? 'checked="checked"' : '' ?>>Male</label>
                        <label class="radio-inline"><input type="radio" value="female" name="gender" <?php echo $personal_info['gender'] == 'female' ? 'checked="checked"' : '' ?>>Female</label>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="contact_number">Phone number:</label>
                     <div class="col-sm-12 col-md-6">          
<!--                         <div class="col-sm-6 col-md-5" style="padding:0;">
  <select name="country_code" id="country_code" class="form-control">
     <option value="92">Pakistan (+92)</option>
  </select>
</div> -->

                           <input type="text" name="contact_number" class="form-control col-sm-2" id="contact_number" placeholder="030X XXXXXX"value="<?php echo $personal_info['contact_number']; ?>">
                     </div>
                   </div>
                    <div class="form-group">
                     <label class="control-label col-sm-2" for="dob">Date of birth:</label>
                     <div class="col-sm-12 col-md-6">          
                        <input type="text" name="dob" id="dob" class="form-control required" placeholder="YYYY-mm-dd" value="<?php echo $personal_info['dob']; ?>">
                     </div>
                   </div>
                    <div class="form-group">
                     <label class="control-label col-sm-2" for="bio">Mini bio:</label>
                     <div class="col-sm-12 col-md-6">          
                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control required" placeholder="What are your interests?"><?php echo $personal_info['about']; ?></textarea>
                     </div>
                   </div>
                   <div class="form-group">        
                     <div class="col-sm-offset-2 col-sm-10">
                       <button type="submit" class="btn btn-default" id="btn-info-save">Save</button>
                     </div>
                   </div>
                 </form>
            </div>
         </div>
      </div>
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
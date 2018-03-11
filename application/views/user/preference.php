<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
  <div class="span9">
    <h1 class="title-lv1 border-bottom margin-bottom">
      Your preferences
   </h1>
   <div class="alert alert-danger" id="form-errors" style="display:none;"></div>
               <div class="alert alert-success" id="form-success" style="display:none;"></div>
               <form class="form-horizontal" action="<?php echo site_url() ?>preferences" method="post" id="my-form">
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="chattiness">Chattiness:</label>
                     <div class="col-sm-12 col-md-6">
                      <label class="radio-inline">
                        <input type="radio" name="chattiness" value="no" <?php echo ($preference['is_chitchat_allowed'] == 'no') ? 'checked="checked"' : '' ?>>No
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="chattiness" value="maybe" <?php echo ($preference['is_chitchat_allowed'] == 'maybe') ? 'checked="checked"' : '' ?>>Maybe
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="chattiness" value="yes" <?php echo ($preference['is_chitchat_allowed'] == 'yes') ? 'checked="checked"' : '' ?>>Yes
                      </label>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="smoking">Smoking:</label>
                     <div class="col-sm-12 col-md-6">          
                      <label class="radio-inline">
                        <input type="radio" name="smoking" <?php echo ($preference['is_smoking_allowed'] == 'no') ? 'checked="checked"' : '' ?> value="no">No
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="smoking" <?php echo ($preference['is_smoking_allowed'] == 'maybe') ? 'checked="checked"' : '' ?> value="maybe">Maybe
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="smoking" <?php echo ($preference['is_smoking_allowed'] == 'yes') ? 'checked="checked"' : '' ?> value="yes">Yes
                      </label>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="pets">Pets:</label>
                     <div class="col-sm-12 col-md-6">          
                      <label class="radio-inline">
                        <input type="radio" name="pets" <?php echo ($preference['is_pet_allowed'] == 'no') ? 'checked="checked"' : '' ?> value="no">No
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="pets" <?php echo ($preference['is_pet_allowed'] == 'maybe') ? 'checked="checked"' : '' ?> value="maybe">Maybe
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="pets" <?php echo ($preference['is_pet_allowed'] == 'yes') ? 'checked="checked"' : '' ?> value="yes">Yes
                      </label>
                     </div>
                   </div>
                    <div class="form-group">
                     <label class="control-label col-sm-2" for="music">Music:</label>
                     <div class="col-sm-12 col-md-6">          
                       <label class="radio-inline">
                           <input type="radio" name="music" <?php echo ($preference['is_music_allowed'] == 'no') ? 'checked="checked"' : '' ?> value="no">No
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="music" <?php echo ($preference['is_music_allowed'] == 'maybe') ? 'checked="checked"' : '' ?> value="maybe">Maybe
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="music" <?php echo ($preference['is_music_allowed'] == 'yes') ? 'checked="checked"' : '' ?> value="yes">Yes
                        </label>
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

<script src="<?php echo site_url();?>assets/js/jquery.validate.min.js"></script>
<script>
    $(function(){
    $('#btn-info-save').click(function() { 
        // validate and process form here  
        $('#my-form').validate({
            
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
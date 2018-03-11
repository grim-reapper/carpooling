<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
  <div class="span9">
    <h1 class="title-lv1 border-bottom margin-bottom">
      Your car details
   </h1>

   <div class="alert alert-danger" id="form-errors" style="display:none;"></div>
   <div class="alert alert-success" id="form-success" style="display:none;"></div>
   <form class="form-horizontal" action="<?php echo site_url() ?>dashboard/profile/password" method="post" id="my-form">
       <div class="form-group">
         <label class="control-label col-sm-3" for="curr_password">Current password:</label>
         <div class="col-sm-12 col-md-6">
           <input type="password" class="form-control required" id="curr_password" name="curr_password">
         </div>
       </div>
       <div class="form-group">
         <label class="control-label col-sm-3" for="new_password">New password:</label>
         <div class="col-sm-12 col-md-6">          
           <input type="password" class="form-control required" id="new_password" name="new_password">
         </div>
       </div> 
       <div class="form-group">
         <label class="control-label col-sm-3" for="conf_password">Confirm new password:</label>
         <div class="col-sm-12 col-md-6">          
           <input type="password" class="form-control required" id="conf_password"  name="conf_password">
         </div>
       </div>

       <div class="form-group">        
         <div class="col-sm-offset-3 col-sm-10">
           <button type="submit" class="btn btn-default" id="btn-submit">Save</button>
         </div>
       </div>
     </form>
 </div>
</div>

<script src="<?php echo site_url();?>assets/js/jquery.validate.min.js"></script>
<script>
    $(function(){
    $('#btn-submit').click(function() { 
        // validate and process form here  
        $('#my-form').validate({

            rules: {
                new_password:'required',
                conf_password:{
                    equalTo:'#new_password'
                }
            },
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
                        $(':input','#my-form')
                         .not(':button, :submit, :reset, :hidden')
                         .val('')
                         .removeAttr('checked')
                         .removeAttr('selected');
                        return false;
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
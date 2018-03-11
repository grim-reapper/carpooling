<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
  <div class="span9">
    <h1 class="title-lv1 border-bottom margin-bottom">
      Your car details
   </h1>
   <form action="<?php echo site_url() ?>dashbarodh/vehicle" method="post" class="js-vehicle-stepflow c-chunk" novalidate="true" autocomplete="off" data-start-step="0" style="max-width: 370px; margin-left: auto; margin-right: auto;">
      <fieldset class="js-vehicle-step" id="step_license_plate" data-view-name="add_vehicle_license_plates" data-has-result="false" aria-hidden="false" data-step-status="invalid" data-step-index="1">
         <?php if(count($cities) > 0) {?>
                 <label for="">Select city</label>
                  <select class="cities c-input-field is-focused js-validate-input js-country-code-input" name="city">
                 <?php foreach($cities as $city) {?>
                     <option value="<?php echo $city['id'] ?>"><?php echo $city['name'] ?></option>
                  <?php } ?>
               </select>
               <?php } ?>
               <div class="form-group">
                  <label for="">Number plate</label>
                  <input type="text" name="registration_number" class="c-input-field js-validate-input js-license-plate-input">
               </div> 
         <div class="o-flock">
        <button type="button" class="c-button c-button--primary c-button--wide js-step-continue" id="step-1" data-label="Continue" >Continue</button>
    </div>
      </fieldset>
      <fieldset class="js-vehicle-step js-make-model-step u-hide" id="step_vehicle_make" data-view-name="add_vehicle_make" aria-hidden="false" data-step-status="valid" data-search-active="false" data-search-has-results="false" data-step-index="2">
         <a href="#" class="js-step-prev" aria-hidden="false" id="back-1" data-id="step_license_plate">Back</a>
          <?php if(count($vehicle_make) > 0) {?>
                 <label for="">What make is your car?</label>
                  <select class="makes c-input-field is-focused js-validate-input js-country-code-input" name="make">
                 <?php foreach($vehicle_make as $make) {?>
                     <option value="<?php echo $make['make'] ?>"><?php echo $make['make'] ?></option>
                  <?php } ?>
               </select>
               <?php } ?>
               <div class="o-flock">
        <button type="button" class="c-button c-button--primary c-button--wide js-step-continue" data-label="Continue" id="step-2">Continue</button>
    </div>
      </fieldset>
      <fieldset class="js-vehicle-step js-make-model-step u-hide" id="step_vehicle_model" data-view-name="add_vehicle_model" aria-hidden="false" data-step-status="valid" data-search-active="false" data-search-has-results="false" data-step-index="3">
         <a href="#" class="js-step-prev" aria-hidden="false" id="back-2" data-id="step_vehicle_make">Back</a>
         <select name="model" id="model" class="model">
            
         </select>
         <div class="o-flock">
        <button type="button" class="c-button c-button--primary c-button--wide js-step-continue" data-label="Continue" id="step-3">Continue</button>
    </div>
      </fieldset>
<fieldset class="js-vehicle-step u-hide" id="step_vehicle_type" data-view-name="add_vehicle_type" aria-hidden="false" data-step-status="invalid" data-step-index="4">
   <a href="#" class="js-step-prev" aria-hidden="false" id="back-3" data-id="step_vehicle_model">Back</a>
   car type goes here
   <!-- option 2  -->
   <div class="o-flock">
        <button type="button" class="c-button c-button--primary c-button--wide js-step-continue" data-label="Continue" id="step-4">Continue</button>
    </div>
</fieldset>
<fieldset class="js-vehicle-step u-hide" id="step_vehicle_color" data-view-name="add_vehicle_color" aria-hidden="true" data-step-status="invalid" data-step-index="5">
   <a href="#" class="js-step-prev" aria-hidden="false" id="back-4" data-id="step_vehicle_type">Back</a>
   car color selection option goes here

   <div class="o-flock">
        <button type="submit" class="c-button c-button--primary c-button--wide js-step-continue" data-label="Continue" >Continue</button>
    </div>
</fieldset>

   </form>
</div>
</div>
<link rel="stylesheet" href="<?php echo site_url() ?>assets/css/select2.min.css">
<script src="<?php echo site_url() ?>assets/js/select2.min.js"></script>
<script>
   $(document).ready(function() {
    $('.cities ').select2();
    $('.makes ').select2();
    $('.makes').on('change',function(){
      $('.model option').remove();
      var make = $(this).next('span').find('.select2-selection__rendered').text();
         $.ajax({  
         type: 'POST',
         url: "<?php echo site_url() ?>userController/getMakeModels",
         data: { make: make },
         dataType: "json",
         success:function(data) {
            $.each(data,function(i,v){
               var data = {
                   id: v.model,
                   text: v.model
               };
               var newOption = new Option(data.text, data.id, false, false);
               $('.model').append(newOption);
            })
         }
       });
    });
   

$('#step-1').on('click',function(){
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').removeClass('u-hide');
});

$('#step-2').on('click',function(){
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').addClass('u-hide');
   $('#step_vehicle_model').removeClass('u-hide');
});

$('#step-3').on('click',function(){
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').addClass('u-hide');
   $('#step_vehicle_model').addClass('u-hide');
   $('#step_vehicle_type').removeClass('u-hide');
});

$('#step-4').on('click',function(){
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').addClass('u-hide');
   $('#step_vehicle_model').addClass('u-hide');
   $('#step_vehicle_type').addClass('u-hide');
   $('#step_vehicle_color').removeClass('u-hide');
});

// move back

$('#back-1').on('click',function(){
   var step1 = $(this).data('id');
   $('#step_vehicle_make').addClass('u-hide');
   $('#'+step1).removeClass('u-hide');
   
});

$('#back-2').on('click',function(){
   var step2 = $(this).data('id');
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_model').addClass('u-hide');
   $('#'+step2).removeClass('u-hide');
});

$('#back-3').on('click',function(){
   var step3 = $(this).data('id');
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').addClass('u-hide');
   $('#step_vehicle_type').addClass('u-hide');
   $('#'+step3).removeClass('u-hide');
});

$('#back-4').on('click',function(){
   var step4 = $(this).data('id');
   $('#step_license_plate').addClass('u-hide');
   $('#step_vehicle_make').addClass('u-hide');
   $('#step_vehicle_model').addClass('u-hide');
   $('#step_vehicle_color').addClass('u-hide');
   $('#'+step4).removeClass('u-hide');
});

});
</script>
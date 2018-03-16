<div class="row profile">
  <?php $this->load->view('user/info_sidebar'); ?>
  <div class="span9">
    <h1 class="title-lv1 border-bottom margin-bottom">
      Your car details
   </h1>
    <?php if($this->session->flashdata('success')){ ?>
   <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
      <?php } ?>
       <?php if($this->session->flashdata('error')){ ?>
   <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
      <?php } ?>
  <form id="vehicle-detail" action="<?php echo site_url() ?>dashboard/vehicle?step=1" method="post" class="js-vehicle-stepflow c-chunk" novalidate="true" autocomplete="off" style="max-width: 370px; margin-left: auto; margin-right: auto;">
      <fieldset class="js-vehicle-step tab" id="step_license_plate">
       
         <?php if(count($cities) > 0) {?>
                 <label for="">Select city</label>
                  <select class="c-input-field is-focused js-validate-input js-country-code-input required" name="city" onchange="this.classList.remove('invalid');this.nextElementSibling.style.display='none';">
                    <option value="">Select a city</option>
                 <?php foreach($cities as $city) {?>
                     <option value="<?php echo $city['id'] ?>"><?php echo $city['name'] ?></option>
                  <?php } ?>
               </select>
               <label class="error">Please select a city</label>
               <?php } ?>
               <div class="form-group">
                  <label for="">Number plate</label>
                  <input type="text" name="registration_number" oninput="this.classList.remove('invalid');this.nextElementSibling.style.display='none';" class="c-input-field required">
                  <label class="error">Please enter registration number</label>
               </div> 
      </fieldset>

      <fieldset class="js-vehicle-step tab js-make-model-step" id="step_vehicle_make">
         <a href="<?php echo site_url() ?>dashboard/?step=1" class="js-step-prev" aria-hidden="false" id="back-1" data-id="step_license_plate">Back</a>
          <?php if(count($vehicle_make) > 0) {?>
                 <label for="">What make is your car?</label>
                  <select class="makes c-input-field is-focused js-validate-input js-country-code-input" name="make">
                 <?php foreach($vehicle_make as $make) {?>
                     <option value="<?php echo $make['make'] ?>"><?php echo $make['make'] ?></option>
                  <?php } ?>
               </select>
               <?php } ?>
      </fieldset>
      <fieldset class="js-vehicle-step tab js-make-model-step" id="step_vehicle_model">
         <a href="<?php echo site_url() ?>dashboard/?step=2" class="js-step-prev" aria-hidden="false" id="back-2" data-id="step_vehicle_make">Back</a>
         <select name="model" id="model" class="model">
            
         </select>

      </fieldset>
<fieldset class="js-vehicle-step tab" id="step_vehicle_type">
   <a href="<?php echo site_url() ?>dashboard/?step=3" class="js-step-prev" aria-hidden="false" id="back-3" data-id="step_vehicle_model">Back</a>
  <div class="o-flux">
   <div class="o-flux-body js-ui-container" data-input-name="vehicle_type">
      <ul class="u-reset">
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_0_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_TOURISM">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-hatchback"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Hatchback</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_0_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="TOURISM" checked="checked">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_1_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_BERLINE">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-saloon"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Saloon</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_1_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="BERLINE">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_2_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_CABRIOLET">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-convertible"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Convertible</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_2_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="CABRIOLET">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_3_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_BREAK">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-estate"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Estate</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_3_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="BREAK">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_4_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_44">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-suv"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">SUV</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_4_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="SUV">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_5_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_VAN">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-mpv"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Station wagon</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_5_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="VAN">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_6_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_SMALL_UTILITY">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-minivan"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Minivan</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_6_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="SMALL_UTILITY">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_type_7_1520788201732">
               <div class="o-flux-media">
                  <svg aria-hidden="true" style="width: 30px; height: 30px; pointer-events: none;" class="u-midGray-fill" id="ic_car_type_UE_BIG_UTILITY">
                     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-vehicle-type-van"></use>
                  </svg>
               </div>
               <span class="c-item-label o-flux-body">Van</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_type_7_1520788201732" name="vehicle_type" required="required" class="js-validate-input js-type-input" value="BIG_UTILITY">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
      </ul>
   </div>
</div>
</fieldset>
<fieldset class="js-vehicle-step tab" id="step_vehicle_color">
   <a href="<?php echo site_url() ?>dashboard/?step=4" class="js-step-prev" aria-hidden="false" id="back-4" data-id="step_vehicle_type">Back</a>
   <div class="o-flux">
   <div class="o-flux-body js-ui-container" data-input-name="vehicle_color">
      <ul class="u-reset">
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_0_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #000000; background-color: #000000;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Black</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_0_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="000000">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_1_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #DDDDDD; background-color: #FFFFFF;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">White</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_1_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="FFFFFF" checked="checked">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_2_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #727272; background-color: #727272;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Dark grey</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_2_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="727272">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_3_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #DDDDDD; background-color: #DDDDDD;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Grey</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_3_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="DDDDDD">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_4_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #9B0004; background-color: #9B0004;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Burgundy</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_4_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="9B0004">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_5_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #DD0000; background-color: #DD0000;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Red</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_5_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="DD0000">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_6_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #0B2742; background-color: #0B2742;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Dark blue</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_6_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="0B2742">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_7_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #1A7CBD; background-color: #1A7CBD;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Blue</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_7_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="1A7CBD">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_8_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #185C3A; background-color: #185C3A;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Dark green</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_8_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="185C3A">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_9_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #0DB260; background-color: #0DB260;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Green</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_9_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="0DB260">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_10_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #4E301C; background-color: #4E301C;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Brown</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_10_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="4E301C">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_11_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #C5A690; background-color: #C5A690;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Beige</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_11_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="C5A690">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_12_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #FA6600; background-color: #FA6600;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Orange</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_12_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="FA6600">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_13_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #FED141; background-color: #FED141;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Yellow</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_13_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="FED141">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_14_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #570E70; background-color: #570E70;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Purple</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_14_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="570E70">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="vehicle_vehicle_color_15_1520788201734">
               <div class="o-flux-media">
                  <div style="width: 24px; height: 24px; border-radius: 15px; border: 2px solid #FFC3E3; background-color: #FFC3E3;" aria-hidden="true"></div>
               </div>
               <span class="c-item-label o-flux-body">Pink</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="vehicle_vehicle_color_15_1520788201734" name="vehicle_color" required="required" class="js-validate-input js-color-input" value="FFC3E3">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
      </ul>
   </div>
</div>
  
</fieldset>
<fieldset class="js-vehicle-step tab" id="step_registration_date" data-view-name="add_vehicle_year" aria-hidden="false" data-step-status="ready" data-step-index="6">

    <div class="c-subheader">
        <h2 class="c-subheader-label">What year was it registered?<span>Passengers like to know if your car is modern or something a bit more vintage.</span>
        </h2>
    </div>

    <div class="o-flux">
        <div class="o-flux-body">
            <div class="c-input">
               <select class="required" name="registration_year" id="registration_year" onchange="this.classList.remove('invalid');this.nextElementSibling.style.display='none';">
                  <option value="">Select year</option>
                  <?php for($i = 1950; $i <= date('Y'); $i++){ ?>
                     <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
               </select>
               <span style="display:none" class="c-input-error js-registration-date-error">Please enter a valid year.</span>
                
            </div>
            <ul>
              <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="air_conditioned">
               <span class="c-item-label o-flux-body">AC</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="air_conditioned" name="vehicle_status" required="required" class="js-validate-input js-color-input" value="y">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
         <li class="c-item js-ui-item">
            <label class="o-flux u-cursorPointer" for="air_conditioned2">
               <span class="c-item-label o-flux-body">Non AC</span>                <span class="o-flux-media">                    <span class="c-control">                        <input type="radio" id="air_conditioned2" name="vehicle_status" required="required" class="js-validate-input js-color-input" value="n">                        <span aria-hidden="true"></span>                    </span>                </span>            
            </label>
         </li>
            </ul>
        </div>
    </div>

</fieldset>
</form>
<div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
</div>
</div>
<link rel="stylesheet" href="<?php echo site_url() ?>assets/css/select2.min.css">
<script src="<?php echo site_url() ?>assets/js/select2.min.js"></script>
<script>
   $(document).ready(function() {
    $('.makes').on('change',function(){
      $('.model option').remove();
      var make = $(this).val()
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

    var make = $('.makes').val()
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
</script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  // fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("vehicle-detail").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByClassName("required");
  // A loop that checks every input field in the current tab:
  if(y.length){
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      y[i].nextElementSibling.style.display='block';
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += " finish";
  // }
}
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<style>
.invalid {
    border: solid 1px #F53F5B !important;
}
select.c-input-field{opacity: 1;}
label.error{display: none;}
  .tab {
  display: none;
}
</style>
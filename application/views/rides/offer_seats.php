<div class="publication-container">
   <h1>Offer a ride on your next long journey</h1>
   <section class="breadcrumb-container">
      <ol class="publication-breadcrumb margin-bottom u-reset u-clearfix">
         <li class="step1 current">
            <span>Schedule</span>
         </li>
      </ol>
   </section>
   <div class="row publication publication-step1">
      <div class="span7">
         <form name="new_publication_step1" method="post" action="<?php echo site_url() ?>offer-seats/1" class="publication-step1-form js-publicationForm--step1" accept-charset="utf-8" novalidate="novalidate" data-meeting-points-search="/geo/geocode" autocomplete="off">
            <fieldset class="main-block">
               <div class="header-main-block">
                  <h2>Pick-up &amp; drop-off </h2>
               </div>
               <section class="main-block-content">
                  <div class="from js-departurePlace js-gaa">
                     <label for="new_publication_step1_departurePlace_name" data-autocomplete="name" class=" control-label">Pick-up</label>
                     <div class="gaa-inputContainer">
                        <div class="js-legoInput">
                           <input type="hidden" name="origin" id="origin" value="">
                           <input type="text" id="departure_place" name="departure_place" required="required" autocomplete="off" placeholder="Example: Edgware Tube Station, London" class="from js-legoInput-input js-inputPlace-name"></div>
                        <div class="js-autocomplete gaa-suggestionsContainer">
                           <ul class="gaa-suggestions u-hide js-autocomplete-suggestions"></ul>
                           
                        </div>
                     </div>
                     <input type="hidden" id="new_publication_step1_departurePlace_coordinates_latitude" name="new_publication_step1[departurePlace][coordinates][latitude]" data-autocomplete="latitude" class="js-inputPlace-latitude"><input type="hidden" id="new_publication_step1_departurePlace_coordinates_longitude" name="new_publication_step1[departurePlace][coordinates][longitude]" data-autocomplete="longitude" class="js-inputPlace-longitude"><input type="hidden" id="new_publication_step1_departurePlace_countryCode" name="new_publication_step1[departurePlace][countryCode]" data-autocomplete="country_code" class="js-inputPlace-countryCode"><input type="hidden" id="new_publication_step1_departurePlace_meetingPointId" name="new_publication_step1[departurePlace][meetingPointId]" data-autocomplete="meeting_point_id" class="js-inputPlace-meetingPointId"><input type="hidden" id="new_publication_step1_departurePlace_isPrecise" name="new_publication_step1[departurePlace][isPrecise]" data-autocomplete="is_precise" class="js-inputPlace-isPrecise">
                     <p class="u-hide u-space-4 size14 js-departurePlace-geocodedInfo" aria-hidden="true">
                        <svg aria-hidden="true" class="u-blue c-icon c-icon--baselineAdjustment">
                           <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-information"></use>
                        </svg>
                        This is the most popular place to meet passengers.
                     </p>
                     <p class="publicationError alert alert-error no-icon u-clearfix js-placeError--frontendValidation" aria-live="polite" aria-hidden="true"></p>
                     <div class="u-hide MeetingPointsInfo js-meetingPointsInfo" aria-hidden="true" aria-live="polite">
                        <div class="MeetingPointsInfo-wrapper">
                           <p class="MeetingPointsInfo-text js-meetingPointsInfo-text">
                              <svg aria-hidden="true" class="u-green c-icon c-icon--baselineAdjustment size18 u-absoluteLeftMiddle MeetingPointsInfo-textIcon">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-marker"></use>
                              </svg>
                              Enter a specific place so we can recommend your ride to people nearby!
                           </p>
                           <div class="MeetingPointsInfo-loader js-meetingPointsInfo-loader">
                              <svg aria-hidden="true" class="size18 c-icon c-icon--baselineAdjustment">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-spinner"></use>
                              </svg>
                              Looking for convenient places...
                           </div>
                           <div class="js-meetingPointsInfo-points">
                              <p class="MeetingPointsInfo-pointsTitle">Convenient places</p>
                              <ul class="MeetingPointsInfo-pointsList js-meetingPointsInfo-pointsList"></ul>
                              <script type="text/template" class="js-meetingPointsInfo-pointsListElement"><li><a href=""><svg aria-hidden="true"class="u-midGray c-icon c-icon--baselineAdjustment size16"><use xlink:href="#icon-marker"></use></svg><span></span></a></li></script>
                              <p class="MeetingPointsInfo-pointsMapLink"><a href="" class="js-meetingPointsInfo-pointsMapLink">See more suggestions</a></p>
                           </div>
                        </div>
                     </div>
                     <div id="meeting-points-from"></div>
                     <p class="size14 margin-bottom hide" id="alert-from-precision-level"><i class="bbc-icon2-exclamation-mark size16 bold u-orange" aria-hidden="true"></i>
                        Enter a specific pick-up point that's convenient for passengers.
                     </p>
                  </div>
                  <div class="to js-arrivalPlace js-gaa">
                     <svg aria-hidden="true" class="c-icon location-circle u-darkGray-fill js-LocationCircle" style="width: 18px; height: 18px;">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circle"></use>
                     </svg>
                     <svg aria-hidden="true" class="js-LocationCircleLoading u-hide size18 location-circle c-icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-spinner"></use>
                     </svg>
                     <div class="PreciseAddressChip  u-hide js-preciseAddressChip js-chip" aria-hidden="true" aria-live="polite">
                        <span class="PreciseAddressChip-content js-chip-text"></span>
                        <button class="PreciseAddressChip-close js-chip-click" type="button">
                           <svg aria-hidden="true" class="c-icon">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cross"></use>
                           </svg>
                           <span class="u-visuallyHidden">Close&gt;</span>
                        </button>
                     </div>
                     <label for="arrival_place" data-autocomplete="name" class=" control-label">Drop-off</label>
                     <div class="gaa-inputContainer">
                        <input type="hidden" name="destination" id="destination" value="">
                        <div class="js-legoInput"><input type="text" id="arrival_place" name="arrival_place" required="required" data-autocomplete="name" autocomplete="off" placeholder="Example: Deansgate Train Station, Manchester" class="to js-legoInput-input js-inputPlace-name"></div>
                        <div class="js-autocomplete gaa-suggestionsContainer">
                           <ul class="gaa-suggestions u-hide js-autocomplete-suggestions"></ul>
                           <script type="text/template" class="js-autocomplete-suggestionTemplate"><li class="gaa-suggestion"><a href="#" class="js-autocomplete-suggestionLink"><svg aria-hidden="true"class="c-icon c-icon--baselineAdjustment gaa-suggestionIcon"><use xlink:href="#icon-marker"></use></svg><span class="js-autocomplete-suggestionLabel gaa-suggestionLabel"></span></a></li></script>
                        </div>
                     </div>
                     <input type="hidden" id="new_publication_step1_arrivalPlace_coordinates_latitude" name="new_publication_step1[arrivalPlace][coordinates][latitude]" data-autocomplete="latitude" class="js-inputPlace-latitude"><input type="hidden" id="new_publication_step1_arrivalPlace_coordinates_longitude" name="new_publication_step1[arrivalPlace][coordinates][longitude]" data-autocomplete="longitude" class="js-inputPlace-longitude"><input type="hidden" id="new_publication_step1_arrivalPlace_countryCode" name="new_publication_step1[arrivalPlace][countryCode]" data-autocomplete="country_code" class="js-inputPlace-countryCode"><input type="hidden" id="new_publication_step1_arrivalPlace_meetingPointId" name="new_publication_step1[arrivalPlace][meetingPointId]" data-autocomplete="meeting_point_id" class="js-inputPlace-meetingPointId"><input type="hidden" id="new_publication_step1_arrivalPlace_isPrecise" name="new_publication_step1[arrivalPlace][isPrecise]" data-autocomplete="is_precise" class="js-inputPlace-isPrecise">
                     <p class="u-hide u-space-4 size14 js-arrivalPlace-geocodedInfo" aria-hidden="true">
                        <svg aria-hidden="true" class="u-blue c-icon c-icon--baselineAdjustment">
                           <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-information"></use>
                        </svg>
                        This is the most popular place to drop passengers off.
                     </p>
                     <p class="publicationError alert alert-error no-icon u-clearfix js-placeError--frontendValidation" aria-live="polite" aria-hidden="true"></p>
                     <div class="u-hide MeetingPointsInfo js-meetingPointsInfo" aria-hidden="true" aria-live="polite">
                        <div class="MeetingPointsInfo-wrapper">
                           <p class="MeetingPointsInfo-text js-meetingPointsInfo-text">
                              <svg aria-hidden="true" class="u-red c-icon c-icon--baselineAdjustment size18 u-absoluteLeftMiddle MeetingPointsInfo-textIcon">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-marker"></use>
                              </svg>
                              Enter a specific place so we can recommend your ride to people nearby!
                           </p>
                           <div class="MeetingPointsInfo-loader js-meetingPointsInfo-loader">
                              <svg aria-hidden="true" class="size18 c-icon c-icon--baselineAdjustment">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-spinner"></use>
                              </svg>
                              Looking for convenient places...
                           </div>
                           <div class="js-meetingPointsInfo-points">
                              <p class="MeetingPointsInfo-pointsTitle">Convenient places</p>
                              <ul class="MeetingPointsInfo-pointsList js-meetingPointsInfo-pointsList"></ul>
                              <script type="text/template" class="js-meetingPointsInfo-pointsListElement"><li><a href=""><svg aria-hidden="true"class="u-midGray c-icon c-icon--baselineAdjustment size16"><use xlink:href="#icon-marker"></use></svg><span></span></a></li></script>
                              <p class="MeetingPointsInfo-pointsMapLink"><a href="" class="js-meetingPointsInfo-pointsMapLink">See more suggestions</a></p>
                           </div>
                        </div>
                     </div>
                     <div id="meeting-points-to"></div>
                     <p class="size14 margin-bottom hide" id="alert-to-precision-level"><i class="bbc-icon2-exclamation-mark size16 bold u-orange" aria-hidden="true"></i>
                        Enter a specific drop-off point that's convenient for passengers.
                     </p>
                  </div>
                  <section class="stages-container u-clearfix">
                     <h3 class="u-inlineBlock margin-half-bottom size18 u-alignMiddle">Stopovers</h3>
                    
                     <div id="alert_stopover_order" class="alert no-icon hide clearfix u-hide">
                        <i class="bbc-icon2-exclamation-mark u-orange size26 pull-left no-margin-left margin-half-right" aria-hidden="true"></i>
                        <p class="u-overflowHidden">
                           The cities you listed appear to be in the wrong order. Do you want us to automatically reorder them?
                           <a id="sort_stopovers">Automatically reorder cities</a>
                        </p>
                     </div>
                     <label for="new_publication_step1_stopovers" class=" control-label">Now add your stopover points - offering to pick up and drop off passengers along the way is a sure way to fill your car.</label>
                     <div class="suggestions" data-url="/publication/suggestions">
                        <input type="text" name="stopovers" id="stopovers">
                        <input type="hidden" name="stops" value="" id="stops">
                        <p style="display:none;">Cities recommended by drivers:</p>
                        <ul class="u-reset suggestions-list"></ul>
                     </div>
                     <div id="stopoversBenefit" class="modal featured hide" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">
                              <span class="u-visuallyHidden">
                              Close
                              </span>
                           </button>
                           <h3>70%</h3>
                           <p>70% of drivers get more passengers by adding at least one stopover!</p>
                        </div>
                        <div class="modal-body">
                           <h4>What's a stopover?</h4>
                           <p>A city where you can pick up or drop off passengers along the way.</p>
                           <h4>What makes a good stopover?</h4>
                           <p>A large city where there'll be more passengers needing rides.</p>
                           <p>An accessible place for passengers, e.g. a railway station or bus stop.</p>
                        </div>
                     </div>
                  </section>
               </section>
            </fieldset>
            <button type="submit" class="Button Button--primary Button--big u-right apply-btn-loader js-realSubmit"><img class="img-loader hide" src="/images/ajax-loader-blue.gif" alt="" aria-hidden="true">Continue</button>
            <button type="button" class="Button Button--primary Button--big Button--disabled u-right u-hide js-fakeSubmit" aria-hidden="true">Continue</button>
         </form>
      </div>
      <!-- *col gauche* -->
      <div class="span5 publication-map publication-sidebar">
         <div class="sidebar-info map-frame wrapper">
            <h2>My ride summary</h2>
            <div id="map" class="geo-map" data-avoid-highway="0" style="width: 342px; height: 385px; position: relative; overflow: hidden;">
            </div>
         </div>
         <div class="insurance wrapper alert alert-info no-icon clearfix">
            <i class="bbc-icon2-info u-darkBlue size26 pull-left no-margin-left" aria-hidden="true"></i>
            <h2 class="margin-half-bottom u-darkBlue">Insurance, Trust &amp; Safety</h2>
            <ul class="u-gray">
               <li class="line20">Dedicated member support</li>
               <li class="line20">Share your ride with verified and rated members</li>
               <li class="line20">
                  <a href="#insuranceModal" data-toggle="modal">Additional insurance cover</a>
                  by AXA, free of charge
               </li>
            </ul>
            <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/insurance/axa-logo-h60.png" height="30" class="display-block no-margin-bottom margin-half-top pull-right" alt="AXA, redefining standards">
         </div>
         <div id="insuranceModal" class="modal modal--insurance hide" tabindex="-1" role="dialog" aria-labelledby="insuranceModalLabel" aria-hidden="true">
            <div class="modal-header">
               <a class="close" data-dismiss="modal" aria-hidden="true">×</a>
               <h3 id="insuranceModalLabel">Your ride is insured</h3>
            </div>
            <div class="modal-body">
               <div class="u-clearfix padding-bottom">
                  <i class="bbc-icon2-shield first u-left u-green size60" aria-hidden="true"></i>
                  <h3 class="size16 bold line-normal padding-half-top">On top of your own car insurance, you benefit from additional insurance cover by AXA, free of charge.</h3>
               </div>
               <h4 class="no-margin-bottom margin-half-top u-green">Breakdown cover &amp; onward travel</h4>
               <p class="u-marginNone padding-bottom padding-half-top size13">In case of a breakdown during a ride offered through our online booking system, you benefit from roadside assistance and towing to the nearest garage. If the vehicle cannot be repaired within a reasonable delay, the driver and passengers will be transported to their destination.</p>
               <h4 class="no-margin-bottom margin-half-top u-green">Legal protection</h4>
               <p class="u-marginNone padding-bottom padding-half-top size13">Legal assistance by hotline and legal fees up to £100,000 will be offered to BlaBlaCar drivers for incidents occurring during your ride offered through our online booking system.</p>
               <h4 class="no-margin-bottom margin-half-top u-green">Personal accident cover</h4>
               <p class="u-marginNone padding-bottom padding-half-top size13">All car insurance policies cover passengers. As for drivers, the personal accident cover increases their level of protection in case of an accident leading to death or permanent total disability, regardless of their existing cover, by providing an extra £50,000 for them or their beneficiaries.</p>
               <img src="https://d1ovtcjitiy70m.cloudfront.net/vi-1/images/insurance/axa-logo-h96.png" height="48" class="display-block margin-center margin-bottom margin-top" alt="AXA, redefining standards">
            </div>
         </div>
      </div>
      <div class="MeetingPointsMapModal Modal js-meetingPointsMap-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="Modal-section">
            <h3 class="Modal-title js-meetingPointsMap-header"></h3>
         </div>
         <div class="Modal-section MeetingPointsMapModal-body">
            <div class="MeetingPointsMapModal-sidebar">
               <div class="MeetingPointsMapSidebar js-mapModalSidebar">
                  <div class="MeetingPointsMapSidebar-header">
                     Remember, passengers will still message you if they have somewhere else in mind.
                  </div>
                  <div class="js-mapModalSidebar-main">
                     <ul class="MeetingPointsMapSidebar-points u-reset js-meetingPoints">
                        <script type="text/template" class="js-meetingPoint-template">
                           <li class="MeetingPointsMapSidebar-point js-meetingPoint-item">
                               <strong class="MeetingPointsMapSidebar-pointName js-meetingPoint-name"></strong>
                               <span class="MeetingPointsMapSidebar-pointCity js-meetingPoint-city"></span>
                           </li>
                        </script>
                     </ul>
                     <div class="MeetingPointsMapSidebar-confirm">
                        <button class="MeetingPointsMapButton Button Button--primary Button--full js-meetingPointsMap-confirm">
                        Confirm
                        </button>
                     </div>
                  </div>
                  <div class="MeetingPointsMapSidebar-loader u-hide js-mapModalSidebar-loader">
                     <div class="MeetingPointsMapSidebar-loaderContent">
                        <span class="u-blue c-simple-loader" aria-hidden="true"><i></i></span>
                     </div>
                  </div>
                  <div class="MeetingPointsMapSidebar-error u-hide js-mapModalSidebar-error">
                     <strong>No popular places here</strong>
                  </div>
               </div>
            </div>
            <div class="MeetingPointsMapModal-mapContainer">
               <div class="MeetingPointsMap js-meetingPointsMap">
                  <div class="MeetingPointsMap-controls">
                     <div class="MeetingPointsMap-buttonContainer u-alignCenter u-hide js-meetingPointsMap-search">
                        <button class="MeetingPointsMapButton Button Button--primary js-meetingPointsMap-searchButton">
                        <span class="MeetingPointsMapButton-text">
                        Search in this area
                        </span>
                        <span class="MeetingPointsMapButton-loader c-simple-loader" aria-hidden="true"><i></i></span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <button type="button" class="Modal-close" data-dismiss="modal">
         <i class="bbc-icon2-cross" aria-hidden="true"></i>
         <span class="u-visuallyHidden">Close</span>
         </button>
      </div>
   </div>
</div>
<script>
   var checkboxArray;
   var dep = '';
   var des = '';
   var waypts = [];
   function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsDisplay.setMap(map);
        $('#departure_place').on('typeahead:selected typeahead:autocompleted',function(){
         dep = $(this).val();
         if(des != ''){
            console.log('dfdf');
          calculateAndDisplayRoute(directionsService, directionsDisplay);
         }
        });
        $('#arrival_place').on('typeahead:selected typeahead:autocompleted',function(){
         des = $(this).val();
         if(dep != ''){
          calculateAndDisplayRoute(directionsService, directionsDisplay);
         }
        });
        // $('#departure_place').on('typeahead:selected typeahead:autocompleted', function() {
        //  if(des != ''){
        //   calculateAndDisplayRoute(directionsService, directionsDisplay);
        //  }
        // });
        $('#stopovers').on('typeahead:autocompleted',function(){
         console.log($(this).val());
            if($(this).val() != ''){
            waypts.push({location: $(this).val(),stopover:true});
            calculateAndDisplayRoute(directionsService, directionsDisplay);
            console.log(waypts);
            waypts = [];
         }
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        
        directionsService.route({
          origin: dep,
          destination: des,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

</script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.css">
<script src="<?php echo site_url() ?>assets/js/typehead.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHyofujLdoM-UXHLkN4DO8QHCOgrVqapQ&libraries=places&callback=initMap" async defer></script>
<script>
   $('#departure_place').on('typeahead:selected typeahead:autocompleted',function(e,data){
      $('#origin').val(data.id);
   });
   $('#departure_place').typeahead({
  hint: true,
  highlight: true,
  minLength: 3
},
{
  limit: 12,
  async: true,
  display:'name',
  source: function (query, processSync,processAsync) {
    return $.ajax({
      url: "<?php echo site_url() ?>UserController/getCities", 
      type: 'POST',
      data: {query: query},
      dataType: 'json',
      success: function (data) {
         return processAsync(data);
      }
    });
  }
});
  $('#arrival_place').on('typeahead:selected typeahead:autocompleted',function(e,data){
      $('#destination').val(data.id);
   });
   $('#arrival_place').typeahead({
  hint: true,
  highlight: true,
  minLength: 3
},
{
  limit: 12,
  async: true,
  display:'name',
  source: function (query, processSync,processAsync) {
    return $.ajax({
      url: "<?php echo site_url() ?>UserController/getCities", 
      type: 'POST',
      data: {query: query},
      dataType: 'json',
      success: function (data) {
         return processAsync(data);
      }
    });
  }
});
     $('#stopovers').on('typeahead:selected typeahead:autocompleted',function(e,data){
      $('#stops').val(data.id);
   });
   $('#stopovers').typeahead({
  hint: true,
  highlight: true,
  minLength: 3
},
{
  limit: 12,
  async: true,
  display:'name',
  source: function (query, processSync,processAsync) {
    return $.ajax({
      url: "<?php echo site_url() ?>UserController/getCities", 
      type: 'POST',
      data: {query: query},
      dataType: 'json',
      success: function (data) {
         return processAsync(data);
      }
    });
  }
});
</script>
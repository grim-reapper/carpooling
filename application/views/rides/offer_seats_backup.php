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
         <form name="new_publication_step1" method="post" action="/offer-seats/1" class="publication-step1-form js-publicationForm--step1" accept-charset="utf-8" novalidate="novalidate" data-meeting-points-search="/geo/geocode" autocomplete="off">
            <fieldset class="main-block">
               <div class="header-main-block">
                  <h2>Pick-up &amp; drop-off </h2>
               </div>
               <section class="main-block-content">
                  <div class="from js-departurePlace js-gaa">
                     <label for="new_publication_step1_departurePlace_name" data-autocomplete="name" class=" control-label">Pick-up</label>
                     <div class="gaa-inputContainer">
                        <div class="js-legoInput">
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
                     <a href="#stopoversBenefit" class="no-link u-alignMiddle" data-toggle="modal">
                        <svg aria-hidden="true" class="c-icon u-blue-fill" style="width: 16px; height: 16px;">
                           <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-question-circle"></use>
                        </svg>
                     </a>
                     <div id="alert_stopover_order" class="alert no-icon hide clearfix u-hide">
                        <i class="bbc-icon2-exclamation-mark u-orange size26 pull-left no-margin-left margin-half-right" aria-hidden="true"></i>
                        <p class="u-overflowHidden">
                           The cities you listed appear to be in the wrong order. Do you want us to automatically reorder them?
                           <a id="sort_stopovers">Automatically reorder cities</a>
                        </p>
                     </div>
                     <label for="new_publication_step1_stopovers" class=" control-label">Now add your stopover points - offering to pick up and drop off passengers along the way is a sure way to fill your car.</label>
                     <ol class="u-reset stages-list ui-sortable ui-sortable-disabled" data-prototype="
                        <svg aria-hidden=&quot;true&quot;class=&quot;c-icon location-circle u-darkGray-fill&quot;style=&quot;width: 18px; height: 18px;&quot;><use xlink:href=&quot;#icon-circle&quot;></use></svg>
                        <div class=&quot;gaa-inputContainer&quot;><div class=&quot;js-legoInput&quot;><input type=&quot;text&quot; id=&quot;new_publication_step1_stopovers___name___name&quot; name=&quot;new_publication_step1[stopovers][__name__][name]&quot; required=&quot;required&quot; data-autocomplete=&quot;name&quot; autocomplete=&quot;off&quot; placeholder=&quot;Add a city on your route&quot; class=&quot;tip stage js-stopover js-legoInput-input js-inputPlace-name&quot; data-trigger=&quot;focus&quot; data-placement=&quot;right&quot; /></div><div class=&quot;js-autocomplete gaa-suggestionsContainer&quot;><ul class=&quot;gaa-suggestions u-hide js-autocomplete-suggestions&quot;></ul><script type=&quot;text/template&quot; class=&quot;js-autocomplete-suggestionTemplate&quot;><li class=&quot;gaa-suggestion&quot;><a href=&quot;#&quot; class=&quot;js-autocomplete-suggestionLink&quot;><svg aria-hidden=&quot;true&quot;class=&quot;c-icon c-icon--baselineAdjustment gaa-suggestionIcon&quot;><use xlink:href=&quot;#icon-marker&quot;></use></svg><span class=&quot;js-autocomplete-suggestionLabel gaa-suggestionLabel&quot;></span></a></li></script></div></div><input type=&quot;hidden&quot; id=&quot;new_publication_step1_stopovers___name___coordinates_latitude&quot; name=&quot;new_publication_step1[stopovers][__name__][coordinates][latitude]&quot; data-autocomplete=&quot;latitude&quot; class=&quot;js-inputPlace-latitude&quot; /><input type=&quot;hidden&quot; id=&quot;new_publication_step1_stopovers___name___coordinates_longitude&quot; name=&quot;new_publication_step1[stopovers][__name__][coordinates][longitude]&quot; data-autocomplete=&quot;longitude&quot; class=&quot;js-inputPlace-longitude&quot; /><input type=&quot;hidden&quot; id=&quot;new_publication_step1_stopovers___name___countryCode&quot; name=&quot;new_publication_step1[stopovers][__name__][countryCode]&quot; data-autocomplete=&quot;country_code&quot; class=&quot;js-inputPlace-countryCode&quot; /><input type=&quot;hidden&quot; id=&quot;new_publication_step1_stopovers___name___meetingPointId&quot; name=&quot;new_publication_step1[stopovers][__name__][meetingPointId]&quot; data-autocomplete=&quot;meeting_point_id&quot; class=&quot;js-inputPlace-meetingPointId&quot; /><input type=&quot;hidden&quot; id=&quot;new_publication_step1_stopovers___name___isPrecise&quot; name=&quot;new_publication_step1[stopovers][__name__][isPrecise]&quot; data-autocomplete=&quot;is_precise&quot; class=&quot;js-inputPlace-isPrecise&quot; /><a class=&quot;close tip&quot; href=&quot;#&quot; title=&quot;Remove this stopover&quot;>&amp;times;</a>
                        <span class=&quot;move tip hide&quot; title=&quot;Move this stopover point&quot;>Move this stopover point</span>">
                        <li class="js-gaa">
                           <svg aria-hidden="true" class="c-icon location-circle u-darkGray-fill" style="width: 18px; height: 18px;">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circle"></use>
                           </svg>
                           <div class="gaa-inputContainer">
                              <div class="js-legoInput"><input type="text" id="stopovers" name="stopovers" required="required" autocomplete="off" placeholder="Add a city on your route" class="tip stage js-stopover js-legoInput-input js-inputPlace-name" data-trigger="focus" data-placement="top" data-hasqtip="3" oldtitle="Add cities where you could pick up or drop people off to increase your chances of getting passengers." title=""></div>
                              <a class="close tip" data-delay="50" href="#" data-hasqtip="4" oldtitle="Remove this stopover" title="">×</a><span class="move tip hide ui-sortable-handle" data-hasqtip="5" oldtitle="Move this stopover point" title="">Move this stopover point</span>
                        </li>
                        <li class="add">
                           <a href="#" class="stage-add u-blue u-alignMiddle" role="button" aria-hidden="false">
                           Add more stopover cities
                           </a>
                        </li>
                     </ol>
                     <div class="suggestions" data-url="/publication/suggestions">
                        <p style="display:none;">Cities recommended by drivers:</p>
                        <ul class="u-reset suggestions-list"></ul>
                     </div>
                     <div id="stopoversBenefit" class="modal featured hide" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">
                              <svg aria-hidden="true" class="c-icon u-gray-fill" style="width: 18px; height: 18px;">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cross"></use>
                              </svg>
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
            <input type="hidden" id="new_publication_step1__token" name="new_publication_step1[_token]" value="dx438-6MXuCmR9Q0DjyNL3qBPA7ZzBjiGQHNNo_x88Y">
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
   var waypts = [];
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 31.4997493, lng: 74.2637464},
      zoom: 13
    });
    new AutocompleteDirectionsHandler(map);
 }
 function AutocompleteDirectionsHandler(map){
   me = this;
   this.map = map;
   this.originPlaceId = null; 
   this.destinationPlaceId = null;
   this.stopoversPlaceId = null;
   this.stopoversPlaceName = '';
   this.travelMode = 'DRIVING';
   // this.waypoints = [];
    var originInput = document.getElementById('departure_place');
    var destinationInput = document.getElementById('arrival_place');
    var stopovers = document.getElementById('stopovers');
    stopovers.addEventListener('change',function(){
      if(stopovers.value == ''){
         waypts = [];
         me.route();
      }
    });
    //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    this.directionsService = new google.maps.DirectionsService;
    this.directionsDisplay = new google.maps.DirectionsRenderer;
    this.directionsDisplay.setMap(map);

    var originAutocomplete = new google.maps.places.Autocomplete(
            originInput);
    var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput);
    var stopoversAutocomplete = new google.maps.places.Autocomplete(stopovers);

    this.setupPlaceChangedListner(originAutocomplete,'ORIG');
    this.setupPlaceChangedListner(destinationAutocomplete, 'DEST');
    this.setupPlaceChangedListner(stopoversAutocomplete,'STOP');
}
AutocompleteDirectionsHandler.prototype.setupPlaceChangedListner = function(autocomplete,mode){
      var me = this;
      autocomplete.bindTo('bounds', this.map);
      autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else if(mode == 'DEST') {
            me.destinationPlaceId = place.place_id;
          }else{
            
            me.stopoversPlaceId = place.place_id;
            me.stopoversPlaceName = place.formatted_address;
            waypts.push({location:place.formatted_address,stopover:true});
            
            // if(place.name != ''){
               // this.waypts.push(place.place_id);
               // this.waypts.push({location:'Lahore, Pakistan',stopover:true});   
            // }
          }
          me.route();
          waypts = [];
        });
}
AutocompleteDirectionsHandler.prototype.route = function(){
   if(!this.originPlaceId || !this.destinationPlaceId){
      return;
   }
   var me = this;
   this.directionsService.route({
      origin: {'placeId': this.originPlaceId},
      destination: {'placeId': this.destinationPlaceId},
      waypoints: waypts,//[{location:this.stopoversPlaceName,stopover:true}],
      optimizeWaypoints: true,
      travelMode: this.travelMode
   },function(response, status){
      if(status == 'OK'){
         me.directionsDisplay.setDirections(response);
         waypts = [];
      }else{
         window.alert('Directions request failed due to '+ status);
      }
   });
}

</script>
<div class="lbl-way-points">Way Points</div>
    
<div>
  <div class="way-points-option"><input type="checkbox" name="way_points[]" class="way_points" value="Lahore"> Lahore
<input type="checkbox" name="way_points[]" class="way_points" value="karachi"> Karachi
<input type="checkbox" name="way_points[]" class="way_points" value="islamabad"> isl
  </div>
<input type="button" id="go" value="Draw Path" class="btn-submit" />
</div>

<div id="map1" style="width:500px;height:300px;"></div>
<script>
  //  var map;
  //  var waypoints
  //  function initMap() {
  //        var mapLayer = document.getElementById("map1"); 
  //        var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
  //        var defaultOptions = { center: centerCoordinates, zoom: 4 }
  //        map = new google.maps.Map(mapLayer, defaultOptions);

  //       var directionsService = new google.maps.DirectionsService;
  //       var directionsDisplay = new google.maps.DirectionsRenderer;
  //       directionsDisplay.setMap(map);

  //       $("#go").on("click",function() {
  //            waypoints = Array();
  //              $('.way_points:checked').each(function() {
  //               waypoints.push({
  //                   location: $(this).val(),
  //                   stopover: true
  //               });
  //              });
  //           var locationCount = waypoints.length;
  //           if(locationCount > 0) {
  //               var start = waypoints[0].location;
  //               var end = waypoints[locationCount-1].location;
  //               drawPath(directionsService, directionsDisplay,start,end);
  //           }
  //       });
        
  //  }
  //     function drawPath(directionsService, directionsDisplay,start,end) {
  //       directionsService.route({
  //         origin: start,
  //         destination: end,
  //         waypoints: waypoints,
  //         optimizeWaypoints: true,
  //         travelMode: 'DRIVING'
  //       }, function(response, status) {
  //           if (status === 'OK') {
  //           directionsDisplay.setDirections(response);
  //           } else {
  //           window.alert('Problem in showing direction due to ' + status);
  //           }
  //       });
  // }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHyofujLdoM-UXHLkN4DO8QHCOgrVqapQ&libraries=places&callback=initMap" async defer></script>
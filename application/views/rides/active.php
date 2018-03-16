<div class="tab-content my-trips">
   <div class="tab-pane" id="bord"></div>
   <div class="tab-pane active" id="billets">
      <ul class="nav nav-pills">
         <li class="active">
            <a href="<?php echo site_url() ?>dashboard/trip-offers/active">Upcoming rides</a>
         </li>
         <li>
            <a href="<?php echo site_url() ?>dashboard/trip-offers/inactive">Ride history</a>
         </li>
         <li>
            <a href="<?php echo site_url() ?>dashboard/trip-offers/archive">Archived rides</a>
         </li>
      </ul>
      <p class="my-trips-no-result size14">
         You don't have any upcoming rides.<br> <br> You can offer a new ride by clicking on:<br>
         <a href="<?php echo site_url() ?>offer-seats" class="btn-edition">Offer a ride</a>
      </p>
      <div class="tab-pane active" id="current">
         <div class="my-trips-container u-clearfix">
            <ol class="u-reset">
            </ol>
            <div class="modal hide" id="bookingErrorOnboard">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Unable to edit or delete this ride</h3>
               </div>
               <div class="modal-body">
                  <p>This is a ride with online booking. You currently have to go to blablacar.pl to edit or delete it.</p>
               </div>
               <div class="modal-footer">
                  <a href="#" class="btn btn-primary" data-dismiss="modal">OK</a>
               </div>
            </div>
            <div class="modal hide" id="bookingErrorOnline">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Unable to edit or delete this ride</h3>
               </div>
               <div class="modal-body">
                  <p>This is a ride with online booking. You currently have to go to blablacar.fr to edit or delete it.</p>
               </div>
               <div class="modal-footer">
                  <a href="#" class="btn btn-primary" data-dismiss="modal">OK</a>
               </div>
            </div>
            <div id="add-seat" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Add a seat</h3>
               </div>
               <div class="modal-body size14">
                  Are you sure you want to add a seat?
               </div>
               <div class="modal-footer">
                  <a href="" data-dismiss="modal">Cancel</a>
                  <a href="#" data-dismiss="modal" class="btn-validation add-seat-passenger">Add seat</a>
               </div>
            </div>
            <div id="remove-seat" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Reduce seats available</h3>
               </div>
               <div class="modal-body size14">
                  Are you sure you want to reduce the number of available seats?
               </div>
               <div class="modal-footer">
                  <a href="" data-dismiss="modal">Cancel</a>
                  <a href="#" data-dismiss="modal" class="btn-validation remove-seat-passenger">Reduce</a>
               </div>
            </div>
            <div id="full-seat" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h3 id="myModalLabel">Marking your trip as full</h3>
               </div>
               <div class="modal-body size14">
                  Are you sure you want your ride to appear as Full on the site?
               </div>
               <div class="modal-footer">
                  <a class="btn-base one-seat-passenger" data-dismiss="modal">Leave one seat</a>
                  <a class="btn-validation full-seat-passenger" data-dismiss="modal">Mark as Full</a>
               </div>
            </div>
            <div id="passengersWarningModalDashboard" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="commentRulesLabel" aria-hidden="true">
               <div class="modal-header">
                  <h3 id="myModalLabel">A little bit of advice</h3>
               </div>
               <div class="modal-body">
                  <div>Make sure the amount you would get from 4 passengers is lower than the cost of your journey. Otherwise you might violate your insurance contract or local laws.</div>
                  <br>
                  <div>Are you sure you want to add a seat?</div>
                  s
               </div>
               <div class="modal-footer">
                  <a href="" data-dismiss="modal">Cancel</a>
                  <a href="#" data-dismiss="modal" class="btn-validation add-seat-passenger">Add seat</a>
               </div>
            </div>
         </div>
      </div>
      <div class="tab-pane" id="past"></div>
   </div>
   <div class="tab pane" id="messages"></div>
   <div class="tab-pane" id="profil"></div>
</div>
 <?php $eventslist = render($content['field_eventsblk']); ?>


 <div class="as-img">
   <div class="as-hero">
     <?php print render($content['field_pano_image']); ?>
     <div class="as-container">
       <div class="as-hero__copy">
         <h1>
           <?php print $title; ?>
         </h1>
       </div>
     </div>
   </div>
 </div>


 <div class="as-page__block">
   <div class="as-container as-page__introduction special">
     <?php print render($content['field_text_one']); ?>
   </div>
 </div>

 <div class="as-page__block">
   <div class="as-container">
     <h2>Department of Psychology News</h2>
     <a href="/news" class="viewAll as-button as-button--light">View News</a>
     <div class="slider-cards" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>
       <?php print views_embed_view('article_blocks', 'block_5'); ?>
     </div>
   </div>
 </div>

 <div class="as-page__block">
   <div class="as-container">
     <!-- event listing -->
     <div class="event-listing">
       <div class="eventList eventList--horizontal">
         <?php print $eventslist; ?>
       </div>
     </div>
   </div>
 </div>

 <div class="as-page__block">
   <div class="as-container">
     <?php print render($content['field_text_two']); ?>
   </div>
 </div>

 <!-- popular destinations -->
 <?php if (!empty($content['field_popular_links'])) : ?>
   <div class="as-page__block as-page__block--gray">
     <div class="content as-places">
       <div class="as-container">
         <h3 class="field-label">Pick a Destination</h3>
         <div class="as-container links links--inline links--gray centered">
           <?php print render($content['field_popular_links']); ?>
         </div>
       </div>
     </div>
   </div>

 <?php endif; ?>

 <!--  phototext 1  -->
 <div class="as-page__block">
   <div class="as-container pictureText--lr">
     <?php print render($content['field_phototext_1']); ?>
   </div>
 </div>

 <?php if (!empty($content['field_stats'])) : ?>
   <!-- stats -->
   <div class="as-page__block">
     <div class="as-container">
       <h3 class="centered">By the Numbers</h3>
       <div class="grid grid--three stats">
         <?php print render($content['field_stats']); ?>
       </div>
     </div>
   </div>
 <?php endif; ?>

 <?php if (!empty($content['field_phototext_2'])) : ?>
   <!--  phototext 2  -->
   <div class="as-page__block">
     <div class="as-container pictureText pictureText--lr">
       <?php print render($content['field_phototext_2']); ?>
     </div>
   </div>
 <?php endif; ?>
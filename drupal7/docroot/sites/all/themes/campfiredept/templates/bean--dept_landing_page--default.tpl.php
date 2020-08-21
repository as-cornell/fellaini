  <!-- hero -->
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

  <!-- top content block -->
  <?php if (!empty($content['field_description'])): ?>
  <div class="as-page__block">
    <div class="as-container as-page__content--wideSidebar">
      <div class="as-page__content as-page__introduction">
        <?php print render($content['field_description']); ?>
      </div>
      <div class="as-page__sidebar">
        <h3 class="centered">In this section</h3>
        <div class="as-container links links--gray links--stacked centered">
          <?php print render($content['field_popular_links']); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php // block reference / cinema,math, CIS local events Local Events ?>
  <?php if (!empty($content['field_block_reference'])): ?>
    <div class="as-page__block">
      <div class="as-container">
        <?php print render($content['field_block_reference']);?>
      </div>
    </div>
  <?php endif; ?>

  <?php //Cinema film series by name ?>
  <?php if (!empty(views_embed_view('film_series_name', 'block'))): ?>
   <div class="as-page__block">
    <div class="as-container">
      <?php print views_embed_view('film_series_name', 'block'); ?>
    </div>
    </div>
  <?php endif; ?>




   <?php if (!empty($content['field_included_pages'])): ?>


  <!-- associated modals/pages/stories -->
  <div class="as-page__block">
      <div class="as-container">
          <div class="cards grid grid--four">
              <?php print render($content['field_included_pages']); ?>
          </div>
      </div>
  </div>
  <div class="divider divider--horizontal--center"></div>
  <?php endif; ?>




  <!--  photo and text content blocks  -->
  <?php if (!empty($content['field_phototext_1'])): ?>
  <div class="as-page__block">
    <div class="as-container">
      <?php print render($content['field_phototext_1']); ?>
    </div>
    <?php if (!empty($content['field_phototext_2'])): ?>
    <div class="as-container pictureText">
      <?php print render($content['field_phototext_2']); ?>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <!--  quote  -->
  <?php if (!empty($content['field_related_factoid'])): ?>
  <div class="as-page__block">
    <div class="as-container pictureText pictureText--quote">
      <?php print render($content['field_related_factoid']); ?>
    </div>
  </div>
  <?php endif; ?>


  <?php // set up eventsList as field_eventsblk AKA Localist events?>
  <?php
      if (!empty($content['field_eventsblk'])){
        $eventslist = render($content['field_eventsblk']);
        }
  ?>

  <?php // output eventsList ?>
  <?php if (!empty($eventslist)): ?>
  <div class="as-page__block">
    <div class="as-container">
      <!-- event listing -->
      <div>
        <div class="eventList eventList--horizontal">
          <?php print $eventslist; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php
  //endif;
  endif; ?>




  <!-- News Stories -->
  <div class="as-page__block">
    <div id="research-news" class="as-container">
      <h1>News</h1>
      <a href="/news" class="viewAll as-button as-button--light">View News</a>
      <div class="cards grid grid--four">
      <?php print views_embed_view('article_blocks', '4_articles_flt'); ?>
      </div>
    </div>
  </div>



  <!-- stats -->
  <?php if (!empty($content['field_stats'])): ?>
    <div class="as-page__block">
      <div class="as-container">
        <h3 class="centered">By the Numbers</h3>
        <div class="grid grid--three stats">
          <?php print render($content['field_stats']);?>
        </div>
      </div>
    </div>
  <?php endif; ?>

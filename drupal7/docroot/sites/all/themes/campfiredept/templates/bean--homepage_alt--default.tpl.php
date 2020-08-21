
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php $eventslist = render($content['field_eventsblk']); ?>


  <!-- campfire -->



  <!-- news and Events -->
  <div class="as-page__block as-page__block--top">
    <div class="as-container">
      <div <?php if (strpos ($eventslist, 'Sorry') === false): ?>class="grid grid--two-one" <?php endif; ?> >
        <!-- news listing -->
        <div>
          <h2>Department of Chemistry News</h2>
          <a href="/news" class="viewAll as-button as-button--light">View News</a>

            <div class="cards cards--withFeature grid grid--three">
              <?php print render($content['field_article']); ?>
              <?php print views_embed_view('article_blocks', 'block_4_promoted'); ?>
            </div>

        </div>
        <!-- event listing -->
          <div class="event-listing">
          <h2>Events</h2>
          <div class="eventList">
            <?php print $eventslist; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- popular destinations -->
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

  <!--  phototext 1  -->
  <div class="as-page__block">
    <div class="as-container pictureText">
      <?php print render($content['field_phototext_1']); ?>
    </div>
  </div>

  <!--  quote  -->
  <?php if (!empty($content['field_related_factoid'])): ?>
  <div class="as-page__block">
    <div class="as-container pictureText pictureText--quote">
      <?php print render($content['field_related_factoid']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if (!empty($content['field_stats'])): ?>
  <!-- stats -->
    <div class="as-page__block">
      <div class="as-container">
        <h3 class="centered">By the Numbers</h3>
        <div class="grid grid--three stats">
          <?php print render($content['field_stats']);?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($content['field_phototext_2'])): ?>
  <!--  phototext 2  -->
  <div class="as-page__block">
    <div class="as-container pictureText pictureText--lr">
      <?php print render($content['field_phototext_2']); ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if (module_exists('twitter') OR (module_exists('drupagram'))): ?>
  <!--  social media  -->
  <div class="as-page__block">
      <div class="as-container as-social-bar<?php
        if (module_exists('drupagram')) {
            print " as-social-bar-twitter-instagram";
        } ?>">
        <!-- twitter -->
        <?php
        if (module_exists('twitter')): ?>
            <?php
              print views_embed_view('tweets', 'block');
            ?>
        <?php endif; ?>
        <!--  instagram  -->
        <?php
        if (module_exists('drupagram')): ?>
          <?php
            print views_embed_view('instagrams', 'block');
          ?>
        <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>


</div>




<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <!-- pano slider -- article -->

  <div class="slider slider--pano" id="carousel" aria-live="polite">
    <ul class="slides">
    <?php print render($content['field_article']); ?>
    </ul>
   <fieldset class="navigation" aria-label="carousel buttons" aria-controls="carousel">
      <button class="prev" aria-label="previous">Prev<span class="as-icon as-icon--arrow-down"></span></button>
      <button class="next" aria-label="next"><span class="as-icon as-icon--arrow-down"></span>Next</button>
   </fieldset>
  </div>


  <!-- news and Events -->
  <?php
    if (!empty(views_embed_view('calendar', 'block_2'))){
        $eventslist = views_embed_view('calendar', 'block_2');
        } else {
      if (!empty($content['field_eventsblk'])){
        $eventslist = $content['field_eventsblk'];
        }
      }
  ?>
  <div class="as-page__block">
    <?php if (!empty($eventslist)): ?>
      <div class="as-container container--columns container--columns--alpha">
        <!-- news listing -->
        <div class="article-listing">
          <h2>News</h2>
          <a href="https://as.cornell.edu/news/novel-coronavirus-covid-19-resources-and-updates" class="notice notice--alert">Novel Coronavirus (COVID-19) updates and resources</a>
          <div class="articleList articleList--main" id="main-news">
            <?php print views_embed_view('article_blocks', 'block_1'); ?>
          </div>
          <a href="/news" class="btn">View all news</a>
        </div>
          <!-- event listing -->
        <div class="event-listing">
          <div class="eventList">
            <?php print render($eventslist);?>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="as-container ">
        <!-- news listing -->
        <div class="article-listing">
          <h2>News</h2>
          <a href="https://as.cornell.edu/news/novel-coronavirus-covid-19-resources-and-updates" class="notice notice--alert">Novel Coronavirus (COVID-19) updates and resources</a>
          <div class="articleList articleList--main as-grid" id="main-news">
            <?php print views_embed_view('article_blocks', 'block_4'); ?>
          </div>
          <a href="/news" class="btn">View all news</a>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <!-- popular destinations -->
  <?php if (!empty($content['field_popular_links'])):?>
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
  <?php else: ?>
  <hr class="m-bottom--3">
<?php endif; ?>

  <!--  phototext 1  -->
  <div class="as-page__block">
    <div class="as-container">
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

  <!--  spotlight -->
  <?php if (!empty($content['field_spotlight'])): ?>
  <div class="as-page__block">

      <?php print render($content['field_spotlight']); ?>

  </div>
  <?php endif; ?>

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

  <?php if (!empty($content['field_phototext_2'])): ?>
      <!--  phototext 2  -->
      <div class="as-page__block">
        <div class="as-container">
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

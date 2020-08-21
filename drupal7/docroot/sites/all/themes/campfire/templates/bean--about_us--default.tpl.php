<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']);?>
    <div class="as-container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']);?>
      </div>
    </div>
  </div>
</div>

<div class="<?php print $classes;?> clearfix"<?php print $attributes;?>
 <!-- title -->
   <div class="as-page__block text-center">
    <div class="as-container as-page__content--wideSidebar">


      <!-- Description -->
      <div class="as-page__content">
        <?php print render($content['field_description']);?>
      </div>
      <div class="as-page__sidebar centered">
      <!-- stats -->
      <h3>By the Numbers</h3>
      <h2>A&amp;S at a Glance</h2>
        <?php if (!empty($content['field_stat'])): ?>
          <div class="as-stats as-stats--double">
          <?php print render($content['field_stat']);?>
          </div>
          <?php else: ?>
          <div class="as-stats as-stats--double">
            <?php print views_embed_view('factoid_blocks', '4_stat_block'); ?>
          </div>
        <?php endif;?>
      </div>
      <!-- secondary body -->

    </div>
  </div>

  <!-- popular destinations -->
  <div class="as-page__block as-page__block--gray">
    <div class="as-container links links--inline links--gray centered">
      <h3>Popular Destinations</h3>
      <?php print render($content['field_links']);?>
    </div>
  </div>

  <!-- dates -->
  <div class="as-page__block contain">
    <div class="as-container">
      <h3 class="centered">Arts & Sciences Events</h3>
      <div class="eventList eventList--horizontal">
        <?php print render($content['field_events']);?>
      </div>
      <p class="centered">
        <a href="https://events.cornell.edu/search/events?order=date&search=cascal

" class="button">View all A&S Events</a>
      </p>
    </div>


  <!-- Life at the College -->

<?php print render($content['field_tertiary_body']);?>

  <!-- feature slider -->
  <?php include_once "about-slider.php";?>


  <!-- three up video block -->
<?php print render($content['field_featured_video']);?>

  <!-- Student Life -->
  <div class="as-page__block contain">
    <div id="college-news" class="as-container as-cards__wrapper" aria-label="College News">
      <h1>Around the College</h1>
      <a href="/all-articles" class="viewAll as-button as-button--light">View all news</a>
      <div class="content as-cards">
        <?php print views_embed_view('factoid_blocks', 'article_block_8'); ?>
      </div>
    </div>
  </div>
</div>

<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">
        <?php print render($content['field_hero']); ?>
      </div>
    </div>
  </div>
</div>
<div class="as-page__block">
<?php include_once "major-search.php" ?>
</div>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>
 <!-- title -->
  <div class="as-container">
    <!--<h1>
    <?php print render($content['title_field']); ?>
    </h1>-->
  </div>
  <!-- description -->
  <div class="as-container">
      <div class='as-info-nav'>
    <div class="as-info-nav__copy">
      <h2>Academics at Arts &amp; Sciences</h2>
      <p>Exploration and an uncommon diversity are the hallmarks of our liberal arts approach. All areas of study offered at The College are characterized by an incredible openness, affording students the opportunity to design their own education. The breadth and depth of an Arts &amp; Sciences education will prepare you to engage with the world.</p>
    </div>

    <ul class='as-info-nav__links'>
      <li><a class="as-info-nav__link" href="/majors-minors-and-grad-fields">Majors and Minors</a></li>
      <li><a class="as-info-nav__link" href="/degree-requirements">Degree Requirements</a></li>

      <li><a class="as-info-nav__link" href="/courses">Courses</a></li>
    </ul>
  </div>
  </div>
  <!-- stats -->
  <div class="as-page__block">
    <div class="as-container">
      <?php if ($content['field_stat']): ?>
          <div class="as-stats">
          <?php print render($content['field_stat']); ?>
          </div>
          <?php else: ?>
          <div class="as-stats">
          <?php
          $block = block_load('views', 'factoid_blocks-stat_block');
          $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          print $output; ?>
          </div>
        <?php endif; ?>
    </div>
  </div>


  <!-- tiles -->
  <div class="as-container as-text">
    <h2 class="centered">
    <?php print render($content['title_field']); ?>
    </h2>
  </div>

  <!-- cards -->
  <div class="as-cards--gold">
    <div class="as-container as-cards__wrapper">
      <div class="as-cards as-cards--campfire">
        <?php if ($content['field_article']): ?>
          <?php print render($content['field_article']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>

</div>

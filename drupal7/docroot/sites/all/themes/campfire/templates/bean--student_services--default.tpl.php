
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

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>
 <!-- title -->
   <div class="as-page__block text-center">
    <div class="as-container centered">
      <h1 class="pageTitle">

      <?php print $title; ?>
      </h1>

      <!-- Description -->
      <div class="as-page__introduction">
        <?php print render($content['field_description']); ?>
      </div>
      <h3>Learn More</h3>
      <!-- secondary body -->
      <ul class="listGroup links--inline">
        <li><a href="/academic-advising" class="listGroup__btn listGroup__btn--blue">Academic Advising</a>Find out how to plan your college career and learn about other support services and special opportunities.</li>
        <li><a href="/careers" class="listGroup__btn listGroup__btn--blue">Career Development</a>Start early to plan for your next steps after Cornell.</li>
        <li><a href="/student-life" class="listGroup__btn listGroup__btn--blue">Student Life</a>The guide to everything that happens outside the classroom.</li>
        <li><a href="https://www.gannett.cornell.edu/services/" class="listGroup__btn listGroup__btn--blue">Health and Well-being</a>Gannett Health Services is here to handle all of your physical and mental health needs. </li>
      </ul>
    </div>
  </div>




  <!-- popular destinations -->
  <div class="as-page__block as-page__block--gray">
    <div class="as-container links links--inline links--gray centered">

      <?php print render($content['field_links']); ?>
    </div>
  </div>

  <!-- secondary body -->
  <div class="as-page__block">
    <div class="as-page__content--full as-container">
      <?php print render($content['field_secondary_body']); ?>
    </div>
  </div>

  <!-- dates -->
  <div class="as-page__block">
    <div class="as-container">
      <h3 class="centered">Important Dates</h3>
      <div class="eventList eventList--horizontal">
        <?php print render($content['field_events']); ?>
      </div>
    </div>


  <!-- stats -->

  <div class="as-container">

      <?php if ($content['field_stat']): ?>

        <div class="as-stats">
          <?php print render($content['field_stat']); ?>
        </div>
        <?php else: ?>
        <div class="as-stats">
          <?php
          $block = block_load('views', 'eb0a4adc059d96db1f5c2b0ea35d1a61');
          $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
          print $output; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <!-- Student Life Stories -->
  <div class="as-page__block">
  <div id="student-life-news" class="as-container" aria-label="Other Student Stories">
    <h1>Student Stories</h1>
    <a href="/all-articles" class="viewAll as-button as-button--light">View all news</a>
    <div class="content as-cards">
      <?php if (!empty($content['field_article'])): ?>
        <?php print render($content['field_article']); ?>
      <?php else: ?>
        <?php print views_embed_view('factoid_blocks', 'article_4');?>
      <?php endif; ?>
    </div>
  </div>
  </div>
</div>

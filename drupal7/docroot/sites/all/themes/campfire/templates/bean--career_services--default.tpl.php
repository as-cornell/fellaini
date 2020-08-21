


 <div class="as-page__block">

  <div class="as-container">
    <?php print render($content['field_hero']);?>
  </div>

  <div class="as-container as-grid as-grid--two-one">

    <!-- Description -->
    <div class="as-page__content">
      <?php print render($content['field_description']);?>
    </div>
    <!-- sidebar -->
    <div class="as-page__sidebar">
      <?php print render($content['field_secondary_body']);?>
    </div>
  </div>
</div>

<!-- popular destinations -->
<div class="as-page__block as-page__block--gray">
  <div class="as-container links links--inline links--gray centered">
    <h3>Popular Destinations</h3>
    <?php print render($content['field_links']);?>
  </div>
</div>

<!-- Photo text blocks -->
<div class="as-page__block">
  <div class="as-container">
    <?php print render($content['field_image_text']); ?>
  </div>
</div>



<!-- Career fields -->
<!-- <div class="as-page__block">
  <div id="Career-Fields" class="as-container">
    <h1>Career Fields</h1>
    <div class="as-cards">
          <?php // print views_embed_view('830c679116a47fcd6518137b9cd9253c');?>
    </div>
  </div>
</div> -->

  <!-- TOC Cards
  <div class="as-page__block">
    <div class="as-container">
      <h1>Career Development Resources</h1>
      <div class="as-cards as-cards--toc">
        <?php //print render($content['field_article']);?>
      </div>
    </div>
  </div>
  -->



  <!-- dates
  <div class="as-page__block">
    <div class="as-container">
      <h3 class="centered">Important Dates</h3>
      <div class="eventList eventList--horizontal">
        <?php //print render($content['field_events_XXXX']);?>
      </div>
    </div>
  </div>-->

  <!-- stats -->
  <!-- <div class="as-container centered">
    <h3>By the Numbers</h3>
      <?php //if (!empty($content['field_stat'])): ?>
        <div class="as-stats">
        <?php //print render($content['field_stat']);?>
        </div>
        <?php //else: ?>
        <div class="as-stats">
          <?php// print views_embed_view('eb0a4adc059d96db1f5c2b0ea35d1a61');?>
        </div>
      <?php //endif;?>
    </div>
  </div> -->

  <!-- twitter
  <div class="as-page__block">
    <div class="as-container">
      Tweet block here
    </div>
  </div>
  -->

<!-- students -->
<!-- <div class="as-page__block">
    <div class="as-container as-cards__wrapper">
    <h1>Student Success Stories</h1>
    <a href="/all-articles" class="viewAll as-button as-button--light">View all Extraordinary Journeys</a>
    <div class="content as-cards">
     <?php //print views_embed_view('factoid_blocks', 'seniors', 'careers');?>
    </div>
    </div>
</div> -->


<!-- Twitter -->

<!-- 
    <div class="as-container fullwidth as-social-bar">
      <?php // print views_embed_view('tweets', 'block_careers');?>
    </div> -->



  <!-- quote 2 -->
  <?php // print render($content['field_quote']);?>



  <!-- news -->
  <div class="as-page__block">
    <div id="Career-News" class="as-container">
      <h1>Career Services News</h1>
      <div class="as-cards">
        <?php print views_embed_view('factoid_blocks', 'block_cs');?>
      </div>

      </div>
    </div>
  </div>

  <!-- <div class="as-page__block">
    <div class="as-container">
      <?php // print render($content['field_tertiary_body']);?>
    </div>
  </div> -->




</div>

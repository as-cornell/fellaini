<!-- Alumi Bean -->

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

<!-- Introduction -->
<div class="as-page__block">
  <div class="as-container">
    <h1 class="pageTitle centered">
      <?php print $title; ?>
      </h1>
    <?php print render($content['field_primary_body']); ?>
    </div>

<!-- quotes -->

  <div class="as-container">
    <?php print render($content['field_fourth_body']); ?>
    </div>
<!-- Success Stories -->
  <div id="" class="as-container">
    <h1>How these experiences change lives</h1>
    <div class="as-cards as-cards__wrapper">
      <?php print views_embed_view('factoid_blocks', 'block_1', 'seg');?>
    </div>
  </div>
<!-- Introduction -->
  <div class="as-container">

    <?php print render($content['field_fifth_body']); ?>

  </div>
<!-- </div> -->
<!-- gold bar -->
<?php print render($content['field_secondary_body']); ?>



<!-- <div class="divider divider--horizontal"></div> -->
<!-- for Students -->
<!-- <div class="as-page__block"> -->
  <!-- <div class="as-container">
    <?php // print render($content['field_tertiary_body']); ?>
    </div>
  </div> -->
  <div class="as-container">
    <?php print render($content['field_image_text']); ?>
    </div>
  </div>
</div>


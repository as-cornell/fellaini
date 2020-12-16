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

<!-- Introduction -field_primary_body6- -->
<div class="as-page__block">
  <div class="as-container">
    <h1 class="pageTitle centered">
      <?php print $title; ?>
    </h1>
    <?php print render($content['field_primary_body']); ?>
  </div>



  <div class="as-container">
    <?php print render($content['field_secondary_body']); ?>
    <?php print render($content['field_tertiary_body']); ?>
  </div>
</div>
<!-- speical non constrained element -->
<?php print render($content['field_fourth_body']); ?>




<!-- news intro -field_sixth_body- -->
<div class="as-container">
  <?php print render($content['field_sixth_body']); ?>
</div>
<!-- <div class="as-container">
  <div class="as-cards as-cards__wrapper">
    <?php // print views_embed_view('factoid_blocks', 'block_1', ''); 
    ?>
  </div>
</div> -->

</div>
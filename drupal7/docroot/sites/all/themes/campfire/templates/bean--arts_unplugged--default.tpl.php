
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
    <div class="as-page__introduction"><?php print render($content['field_description']); ?></div>
    </div>

<!-- quotes -->

  <div class="as-container">
    <h2 class="pageTitle centered">Past events</h2>
    <?php print render($content['field_secondary_body']); ?>
    <?php print render($content['field_tertiary_body']); ?>
    <?php print render($content['field_fourth_body']);?>
    </div>
<!-- Success Stories -->
  <div id="" class="as-container">
    <h1>How these experiences change lives</h1>
    <div class="as-cards as-cards__wrapper">
      <?php print views_embed_view('factoid_blocks', 'block_1', 'artsunplugged');?>
    </div>
  </div>



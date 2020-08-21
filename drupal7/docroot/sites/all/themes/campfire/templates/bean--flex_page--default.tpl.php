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
  <div class="as-container">
    <h1>
      <?php print $title_attributes; ?><?php print $title; ?>
    </h1>
  </div>
  <div class="as-container">
    <?php print render($content['field_description']); ?>
  </div>
  <div class="as-container">
    <?php print render($content['field_top_feature']); ?>
  </div>
<div class="content as-places">
  <div class="as-container">
    <?php print render($content['field_links']); ?>
  </div>
</div>
  <div class="as-container">
    <?php print render($content['field_blocks']); ?>
  </div>
  <div class="as-container">
    <?php print render($content['field_bottom_feature']); ?>
  </div>

  <div>This is a flex page bean</div>
</div>





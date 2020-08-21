
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

  <div class="container as-grid">
    <div><?php print render($content['field_primary_body']); ?></div>
    <div><?php print render($content['field_fifth_body']);?></div>
    <div><?php print render($content['field_secondary_body']); ?></div>
    <div><?php print render($content['field_fourth_body']);?></div>
    
    
      
  </div>
  <div class="container">
    <h1>Frequently asked questions for A&S students</h1>
    <?php print views_embed_view('faq', 'block', 'COVID19'); ?>
  </div>
    
</div>

  <div id="" class="as-container">
    <h1>Cornell responds to COVID-19</h1>
    <div class="as-cards as-cards__wrapper">
      <?php print views_embed_view('factoid_blocks', 'block_1', 'COVID19');?>
    </div>
  </div>



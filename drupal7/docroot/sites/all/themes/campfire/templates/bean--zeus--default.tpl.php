<!-- Milstein Program -->

<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']);?>
    <div class="container">
      <div class="hero__copy">
        <?php print render($content['field_hero']);?>
      </div>
    </div>
  </div>
</div>

<div class="block">
    <div class="as-container">
        <?php print render($content['field_primary_body']);?>
        <div class="as-grid as-grid--two-one" style="align-items: flex-start;">
            <div>
                <?php print render($content['field_secondary_body']);?>
            </div>
            <div class="card right">
                <?php print render($content['field_fifth_body']);?>
                <h2>Soup of the Day</h2>
                <?php print views_embed_view('tweets', 'block_zeus'); ?>
            </div>
        </div>
    </div>
</div>
<div class="as-container--narrow">
    <?php print render($content['field_tertiary_body']);?>
    <?php print render($content['field_fourth_body']);?>
</div>
<div class="block">
    <div class="container">
        <h2 class="larger">More about the Temple of Zeus</h2>
        <div class="as-cards">
            <?php if ($content['field_related_articles']): ?>

                <div class="as-page__other__stories">
                    <?php print render($content['field_related_articles']);?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>

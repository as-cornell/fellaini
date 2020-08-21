<div class="as-img">
  <div class="as-hero">
    <?php print render($content['field_pano_image']); ?>
    <div class="as-container">
      <div class="as-hero__copy">

        <h1><?php print $title; ?></h1>

      </div>
    </div>
  </div>
</div>
<div class="as-page__block">

  <div class="view-content as-container as-cards as-cards__wrapper as-cards--toc">
    <article class="as-card as-card--description">
    <?php print render($content['field_description']); ?>
    </article>

    <?php print render($content['field_sidebar_stories']); ?>
    <?php print render($content['field_articles']); ?>

  </div>
</div>

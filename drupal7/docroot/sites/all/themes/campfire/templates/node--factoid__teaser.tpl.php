<article class="as-card as-card--info field-article">

<div class="as-card__inner">
  <div class="as-card__copy">
        <?php print render($content['field_image']); ?>
    <div class="as-card__text">
        <?php print render($content['field_small_text']); ?>
    </div>
    <div class="as-card__subtitle">
      <?php print render($content['field_tags']); ?>
    </div>
    <div class="as-card__link">
      <a href="<?php print $node_url; ?>" class="as-link--arrow">Learn More</a>
    </div>
    <div>This is a factoid teaser.</div>
  </div>
</div>
</article>

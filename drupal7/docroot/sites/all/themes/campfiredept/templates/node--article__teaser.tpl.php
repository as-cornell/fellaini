<article class="as-card field-article">
<?php print render($content['field_image']); ?>
<div class="as-card__inner">
  <div class="as-card__copy">
    <div class="as-card__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </div>
    <div class="as-card__subtitle">
      <?php print render($content['field_tags']); ?>
    </div>
    <div class="as-card__link">
      <a href="<?php print $node_url; ?>" class="as-link--arrow">Learn More</a>
    </div>
  </div>
</div>
</article>

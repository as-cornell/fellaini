<?php print render($content['field_image']); ?>

<div class="as-card__inner">
  <div class="as-card__copy">
    <div class="as-card__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </div>
    <div class="as-card__link">
      <?php print render($content['field_links']); ?>
    </div>
    <div class="as-card__link">
      <?php print render($content['field_related_dept_prog']); ?>
    </div>
    <div class="as-card__link">
      <a href="<?php print $node_url; ?>" class="as-link--arrow">Learn More</a>
    </div>
    <div>This is a major_minor_grad_field teaser.</div>
  </div>
</div>

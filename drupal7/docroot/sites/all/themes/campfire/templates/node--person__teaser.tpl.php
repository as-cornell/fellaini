  <?php if (!$page): ?>


    <div class="content">
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
       hide($content);
       ?>
    </div>

  <?php print render($content['field_image']); ?>



<div class="as-card__inner">
  <div class="as-card__copy">
    <div class="as-card__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </div>
    <div class="as-card__link">
      <a href="<?php print $node_url; ?>" class="as-link--arrow">Learn More</a>
    </div>
    <div>This is a person teaser.</div>
  </div>
</div>

<?php endif; ?>

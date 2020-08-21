<div class="card card--person">
  <a href="<?php print $node_url; ?>">
    <div class="card__image">
    <?php print render($content['field_image']); ?>
    </div>
    <div class="card__content">
      <h1 class="card--person__name">
        <?php print render($content['field_display_name']); ?>
      </h1>
  </div>
      <p class="card__linkText">
        Learn More
      </p>
  </a>
</div>

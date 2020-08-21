<article class="card card--newsletter">
  <a href="<?php print $node_url; ?>">
    <div class="card__img">
    <?php print render($content['field_newsletter_image']); ?>
    </div>
    <div class="card__content">
      <?php if ($content['field_dateline']):?>
      <div class="card__copy--date">
      <?php print render($content['field_dateline']); ?>
      </div>
      <?php endif; ?>
      <h1 class="card__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
      </h1>
      <?php if ($content['field_card_label']): ?>
      <h2 class="card__subtitle">
      <?php print render($content['field_card_label']); ?>
      </h2>
      <?php endif; ?>
    </div>
    <p class="card__linkText">
    Learn More
    </p>
  </a>

</article>
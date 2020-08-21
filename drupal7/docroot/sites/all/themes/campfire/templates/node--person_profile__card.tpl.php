<article class="as-card as-card--article" aria-label="<?php print $title; ?>">
  <a href="<?php print $node_url; ?>">
    <div class="as-card__img">
      <?php print render($content['field_image']); ?>
    </div>
    <div class="as-card__inner">
      <div class="as-card__copy">
        <h1 class="as-card__title"
          <?php print $title_attributes; ?>><?php print $title; ?>
        </h1>
        
        <h2 class="as-card__subtitle">
          <?php print render($content['field_person_title']); ?>
        </h2>
        
        <p class="as-card__link">
          Learn More
        </p>
      </div>
    </div>
  </a>
</article>

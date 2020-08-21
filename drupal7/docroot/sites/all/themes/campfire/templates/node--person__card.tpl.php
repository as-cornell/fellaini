<article class="as-card as-card--article" aria-label="<?php print $title; ?>">
  <a href="<?php print $node_url; ?>">
    <div class="as-card__img">
      <?php
        if ($content['field_image']){
         print render($content['field_image']);
        }else{
          print "<img typeof='foaf:Image' src='http://as.cornell.edu/sites/as/files/Klarman_profile.jpg'>";
        }
         ?>
    </div>
    <div class="as-card__inner">
      <div class="as-card__copy">
        <h1 class="as-card__title"
          <?php print $title_attributes; ?>><?php print $title; ?>
        </h1>
        <?php if ($content['field_person_title']): ?>
        <h3>
          <?php print render($content['field_person_title']); ?>
        </h3>
        <?php endif; ?>
        <p class="as-card__link">
          Learn More
        </p>
      </div>
    </div>
  </a>
</article>

<article class="as-card" id="<?php print $title; ?>" aria-labelledby="article-title-<?php print $node->nid?>">
<a href="#nid-<?php print $node->nid?>" class="as-card__thumbnail magnific">
<?php print render($content['field_image']); ?>
  <div class="as-card__copy">
    <h1 id="article-title-<?php print $node->nid?>">
      <?php print $title_attributes; ?><?php print $title; ?>
    </h1>
    <div class="as-card__link">
      Learn More
    </div>
  </div>
</a>
</article>
<div id="nid-<?php print $node->nid?>" class="inline-popup mfp-hide">
  <div class='as-quick-view'>
    <div class='as-button as-button--close' data-bind=''>
      <div class='as-icon as-icon--close'></div>
    </div>
    <div class='as-quick-view__main'>
      <h1>
      <?php print $title_attributes; ?><?php print $title; ?>
      </h1>
      <?php print render($content['body']); ?>
      <?php if (!empty($content['field_students_careers'])): ?>
          <h3>Careers</h3>
          <?php print render($content['field_students_careers']); ?>
      <?php endif ;?>
      <?php if (!empty($content['field_related_major_minor_or_gra'])): ?>
          <h3>Related Major or Minor</h3>
          <?php print render($content['field_related_major_minor_or_gra']); ?>
      <?php endif; ?>
      <?php if (!empty($content['field_related_articles'])): ?>
          <h3>Student and Alumni Stories</h3>
          <?php print render($content['field_related_articles']); ?>
      <?php endif; ?>
    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']); ?>
      <?php print render($content['field_links']); ?>

      <?php if ((!empty($content['field_related_persons'])) OR (!empty($content['field_related_people']))): ?>
          <h3>Related People</h3>
          <?php if (!empty($content['field_related_persons'])):?>
              <div class="m-bottom-0">
                  <?php print render($content['field_related_persons']); ?>
              </div>
          <?php endif; ?>
          <?php if (!empty($content['field_related_people'])): ?>
              <?php print render($content['field_related_people']); ?>
          <?php endif;?>


      <?php endif; ?>
    </div>  </div>
</div>

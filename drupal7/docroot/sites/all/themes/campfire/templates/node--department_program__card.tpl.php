<article class="as-card <?php print($content['field_department_or_program']['#newclass']);?> <?php print($content['field_topic']['#newclass']);?> all as-card--dept-pro" aria-label="<?php print render($content['field_display_name']); ?>
">
<a href="#nid-<?php print $node->nid?>" class="as-card__thumbnail magnific">
<?php print render($content['field_image']); ?>
  <div class="as-card__copy">
    <h1>
      <?php print $title_attributes; ?><?php print render($content['field_display_name']); ?>
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
      <?php print $title_attributes; ?><?php print render($content['field_display_name']); ?>
      </h1>
      <!--<?php //print render($content['field_image']); ?>-->
      <?php print render($content['field_discipline']) ?>
      <?php if (!empty($content['field_level']['#newmarkup'])): ?>
      <div class='as-majors-minors__tags'>
        <?php print($content['field_level']['#newmarkup']) ?>
      </div>
      <?php endif;?>
      <?php print render($content['body']); ?>
    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']); ?>
      <p><a href="<?php print render($content['field_department_website']); ?>"><?php print $title; ?>&nbsp;website</a></p>
    </div>
  </div>
</div>

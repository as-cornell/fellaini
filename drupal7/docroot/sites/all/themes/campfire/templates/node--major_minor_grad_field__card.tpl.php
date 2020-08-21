<article class="as-card <?php print($content['field_level']['#newclass']);?> <?php print($content['field_topic']['#newclass']);?> all as-card--majors-minors" aria-label="<?php print $title; ?>">

  <a href="#nid-<?php print $node->nid?>" class="as-card__thumbnail magnific" title="<?php print $title; ?>">
    <?php print render($content['field_image']); ?>
    <div class="as-card__copy">
      <h1>
        <?php print $title_attributes; ?><?php print $title; ?>
      </h1>
      <div class="as-card__link">
        Learn More
      </div>
      <div class="as-majors-minors__tags">
        <?php print($content['field_level']['#newmarkup']) ?>
      </div>
    </div>
  </a>
</article>

<div id="nid-<?php print $node->nid?>" class="inline-popup mfp-hide">
  <div class='as-quick-view'>

    <div class='as-quick-view__main'>
      <h1>
      <?php print $title_attributes; ?><?php print $title; ?>
      </h1>
      <!--<?php print render($content['field_image']); ?>-->
      <?php print render($content['field_discipline']) ?>
      <div class='as-majors-minors__tags'>
        <?php print($content['field_level']['#newmarkup']) ?>
      </div>

      <?php print render($content['body']); ?>

      <?php if (!empty($content['field_student_careers'])): ?>
        <h3>Sample Courses</h3>
        <?php print render($content['field_classes']); ?>
      <?php endif; ?>

      <?php if (!empty($content['field_secondary_body'])): ?>
      <h2>Post-Graduate Outcomes</h2>
      <?php print render($content['field_secondary_body']);?>
      <?php endif;?>


      <?php if ((!empty($content['field_student_careers'])) && (empty($content['field_secondary_body']))): ?>
        <h3>Students went off to</h3>
        <?php print render($content['field_student_careers']);?>
      <?php endif;?>


    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']); ?>
      <h3>Helpful links</h3>
      <?php print render($content['field_links']); ?>
      <?php if (!empty($content['field_related_articles'])): ?>
          <h3>Student and Alumni Stories</h3>
          <?php print render($content['field_related_articles']);?>
      <?php endif;?>
      <?php if (!empty($content['field_department_prefix'])): ?>
      <h3>Courses</h3>
      <?php
          $subject = $field_department_prefix [0]['value'];
          print views_embed_view('courses', 'block_flt', $subject );
          ?>
      <?php endif; ?>

      <?php if (!empty($content['field_related_persons'])): ?>
          <h3>Related People</h3>
        <?php print render($content['field_related_persons']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

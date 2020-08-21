<div class="as-page__block">
<div class="as-container">
  <?php
      $breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb())) ;
      print $breadcrumb; ?>
  <div class='as-quick-view'>
    <div class='as-quick-view__main'>
      <h2>
      <?php print render($content['field_department_prefix']); ?>&nbsp;<?php print render($content['field_course_number']); ?>
      </h2>
      <h3>
      <?php print $title_attributes; ?><?php print $title; ?>
      </h3>
      <h3>
      <?php print render($content['field_course_crosslisted']); ?>
      </h3>
      <?php print render($content['body']); ?>
    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <h3>Instructor(s)</h3>
      <?php print render($content['field_related_people']); ?>
      <?php print render($content['field_links']); ?>
    </div>
  </div>
</div>
</div>

<div class="as-page__block">
<div class="as-container">
  <?php
      $breadcrumb = theme('breadcrumb', array('breadcrumb' => drupal_get_breadcrumb())) ;
      print $breadcrumb; ?>
  <!--<h1>Department or Program</h1>-->
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
    </div>
    <div class='as-divider'></div>
    <div class='as-quick-view__sidebar'>
      <?php print render($content['field_image']); ?>
      <p><a href="<?php print render($content['field_department_website']); ?>"><?php print $title; ?> website</a></p>
    </div>
  </div>
</div>
</div>

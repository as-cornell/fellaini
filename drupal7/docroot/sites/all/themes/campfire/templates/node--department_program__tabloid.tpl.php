<div class="as-color-bar">
<article class="as-tabloid as-tabloid--departmentProgram">
  <div class="as-tabloid__media">
    <?php print render($content['field_image']); ?>
  </div>

  <div class="as-tabloid__copy">
    <p class="as-tabloid__label">Featured Department</p>
    <h1 class="as-tabloid__title"
      <?php print $title_attributes; ?>><?php print $title; ?>
    </h1>
    <div class="as-tabloid__text"><?php print render(field_view_field('node', $node, 'body', array(
      'label'=>'hidden', 
      'type' => 'text_summary_or_trimmed',
      )));?></div>
    <div class="as-tabloid__link">
      <a href="<?php print $node_url; ?>">Learn More</a>
    </div>
  </div>

</article>
</div>
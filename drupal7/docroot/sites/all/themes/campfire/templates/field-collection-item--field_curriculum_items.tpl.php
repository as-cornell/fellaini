<?php
$divclass = $content['field_section_title'][0]['#class'];
?>
<div class="as-grid <?php print $divclass; ?>" id="<?php print $divclass; ?>">
  <div>
    <h3><?php print render($content['field_section_title']); ?></h3>
    <?php print render($content['field_section_text']); ?>
    </div>
    <div>
    <?php print render($content['field_section_table']); ?>
    </div>
</div>

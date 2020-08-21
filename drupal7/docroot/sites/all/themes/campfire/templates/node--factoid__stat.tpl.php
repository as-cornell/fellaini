<?php if (!empty($content['field_stat_link'])): ?>
<a href="<?php print render($content['field_stat_link']);?>">
<?php endif;?>
<div class="as-stat">
    <div class="as-stat__numbers">
        <?php print render($content['field_large_text']);?>
    </div>
    <div class="as-stat__content">
      <?php print render($content['field_description']);?>
    </div>
</div>
<?php if (!empty($content['field_stat_link'])): ?>
</a>
<?php endif;?>

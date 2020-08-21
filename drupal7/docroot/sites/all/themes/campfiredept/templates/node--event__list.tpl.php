<article class="calEvent as-grid as-grid--one-two" aria-labelledby="event-title-<?php print $node->nid?>">
  <div>
    <?php if (!empty($content['field_image'])): ?>
      <?php print render($content['field_image']);?>
    <?php endif;?>
  </div>
  <div>
    <a href="<?php print $node_url; ?>">
      <h2 class="calEvent__title"
        <?php print $title_attributes; ?> id="event-title-<?php print $node->nid?>"><?php print $title; ?>
      </h2>
    </a>
    <?php if (!empty($content['field_text_three'])): ?>
    <!-- person -->
      <?php print render($content['field_text_three']);?>
    <?php endif;?>
    <?php if (!empty($content['field_date_event'])): ?>
    <!-- date -->
      <?php print render($content['field_date_event']);?>
    <?php endif;?>
  </div>


</article>

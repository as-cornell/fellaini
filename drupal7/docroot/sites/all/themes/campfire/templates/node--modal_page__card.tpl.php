<article class="as-card as-cards--toc" aria-label="links for <?php print $title; ?>">
  <div class="as-card__inner">

  <h1>
    <a href="<?php print $node_url;?>"><?php print $title_attributes; ?><?php print $title; ?></a>
  </h1>
  <div class="as-card__img">
    <?php print render($content['field_image']); ?>
  </div>

  <div class="as-card__copy">
    <div class="as-card__text">
      <?php if (!empty($content['field_description'])): ?>
      <p>
      <?php print render($content['field_description']); ?>
      </p>
      <?php endif; ?>
    </div>
      <ul>
      <?php
    // Modal page card links, markup provided by as_modal_links module
      $link_count=0;
      foreach($content['field_text_group']['#items'] as $item) {
      $index=$item['value'];
      $cleantext = render($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#anchortext']);
      $displaytext = render($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#cardlinktext']);
      print '<li><a href="'.$node_url.'#'.$cleantext.'" aria-label="'.$title.' - '.$displaytext.'">'.$displaytext.'</a></li>';
      $link_count++;
      }
      ?>
      </ul>
</div>
</div>
</article>

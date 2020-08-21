<div class="toc toc--teaser" aria-label="links for <?php print $title; ?>">
 

  <h2>
    <a href="<?php print $node_url;?>"><?php print $title_attributes; ?><?php print $title; ?></a>
  </h2>


      <?php if (!empty($content['field_description'])): ?>

      <?php print render($content['field_description']); ?>

      <?php endif; ?>
 
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

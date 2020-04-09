<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a 'PageMenuBlock' block.
 *
 * @Block(
 *  id = "page_menu_block",
 *  admin_label = @Translation("Page menu block"),
 * )
 */
class PageMenuBlock extends BlockBase {



  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'page_menu_block';
     $build['page_menu_block']['#markup'] = 'Implement PageMenuBlock.';

    return $build;
  }

}

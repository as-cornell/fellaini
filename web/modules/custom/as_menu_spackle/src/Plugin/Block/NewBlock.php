<?php

namespace Drupal\as_menu_spackle\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'NewBlock' block.
 *
 * @Block(
 *  id = "new_block",
 *  admin_label = @Translation("New block"),
 * )
 */
class NewBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'new_block';
     $build['new_block']['#markup'] = 'Implement NewBlock.';

    return $build;
  }

}

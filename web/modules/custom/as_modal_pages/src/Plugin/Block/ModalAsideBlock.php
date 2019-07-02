<?php

namespace Drupal\as_modal_pages\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ModalAsideBlock' block.
 *
 * @Block(
 *  id = "modal_aside_block",
 *  admin_label = @Translation("Modal aside block"),
 * )
 */
class ModalAsideBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['modal_aside_block']['#markup'] = 'Implement ModalAsideBlock.';

    return $build;
  }

}

<?php

namespace Drupal\as_courses\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RandomBlock' block.
 *
 * @Block(
 *  id = "random_block",
 *  admin_label = @Translation("Random block"),
 * )
 */
class RandomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['random_block']['#markup'] = 'Implement RandomBlock.';

    return $build;
  }

}

<?php

namespace Drupal\as_modal_pages\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SidebarBlock' block.
 *
 * @Block(
 *  id = "sidebar_block",
 *  admin_label = @Translation("Modal Sidebar block"),
 * )
 */
class SidebarBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['sidebar_block']['#markup'] = 'SidebarBlock.';

    return $build;
  }

}

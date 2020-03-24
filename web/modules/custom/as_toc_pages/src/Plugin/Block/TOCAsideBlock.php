<?php

namespace Drupal\as_toc_pages\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TOCAsideBlock' block.
 *
 * @Block(
 *  id = "toc_aside_block",
 *  admin_label = @Translation("TOC Aside Block"),
 * )
 */
class TOCAsideBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $config = $this->getConfiguration();

    if (!empty($config['link_values'])) {
      $link_values = $config['link_values'];
    }

    $build['toc_aside_block']['#markup'] = '<ul>';

    if (!empty($link_values)) {
      foreach($link_values as $link_title) {
            $build['toc_aside_block']['#markup'] = $build['toc_aside_block']['#markup'] .as_toc_pages_generate_link_markup($link_title);
      }

    } // There were no links
    else {
      $build['toc_aside_block']['#markup'] = "<li>There are no modal links</li>";
    }
        $build['toc_aside_block']['#markup'] = $build['toc_aside_block']['#markup'] .'</ul>';

    return $build;
  }

}

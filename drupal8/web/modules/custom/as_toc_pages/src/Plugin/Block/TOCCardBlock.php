<?php

namespace Drupal\as_toc_pages\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'TOCCardBlock' block.
 *
 * @Block(
 *  id = "toc_card_block",
 *  admin_label = @Translation("TOC Card Block"),
 * )
 */
class TOCCardBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $config = $this->getConfiguration();

    if (!empty($config['link_values'])) {
      $link_values = $config['link_values'];
    }
    else {
      $link_values = 'not passing anything in link values';
    }

    if (!empty($config['page_value'])) {
      $page_value = $config['page_value'];
    }
    else {
      $page_value = 'not passing anything in page values';
    }

    $build['toc_card_block']['#markup'] = '<ul>';

    if (!empty($link_values)) {
      foreach($link_values as $link_title) {
            $build['toc_card_block']['#markup'] = $build['toc_card_block']['#markup'] .as_toc_pages_generate_card_link_markup($link_title,$page_value);
      }

    } // There were no links
    else {
      $build['toc_card_block']['#markup'] = "<li>There are no modal links</li>";
    }
        $build['toc_card_block']['#markup'] = $build['toc_card_block']['#markup'] .'</ul>';

    return $build;
  }

}

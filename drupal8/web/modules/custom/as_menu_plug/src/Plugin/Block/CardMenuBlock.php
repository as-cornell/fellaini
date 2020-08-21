<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CardMenuBlock' block.
 *
 * @Block(
 *  id = "card_menu_block",
 *  admin_label = @Translation("Card menu block"),
 * )
 */
class CardMenuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $link_class = 'cardNav__item';
    $build = [];
    $build['#theme'] = 'card_menu_block';
    $config = $this->getConfiguration();

    if (!empty($config['link_values'])) {
      $link_values = $config['link_values'];
    }
    if (!empty($config['alias'])) {
      $alias = $config['alias'];
    }
    $build['card_menu_block']['#markup'] = '<ul>';

    if (!empty($link_values)) {
      foreach($link_values as $link_title) {
            $build['card_menu_block']['#markup'] = $build['card_menu_block']['#markup'] . as_menu_plug_generate_link_markup($link_title,$alias,$link_class);
      }

    } // There were no links
    else {
      $build['card_menu_block']['#markup'] = "<li>There are no modal links</li>";
    }
        $build['card_menu_block']['#markup'] = $build['card_menu_block']['#markup'] .'</ul>';

    return $build;
  }

}

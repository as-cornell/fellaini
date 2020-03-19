<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'MenuPlugBlock' block.
 *
 * @Block(
 *  id = "menu_plug_block",
 *  admin_label = @Translation("Menu Plug block"),
 * )
 */
class MenuPlugBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['related_entity'] = [
      '#type' => 'entity_autocomplete',
      '#title' => $this->t('Related Entity'),
      '#default_value' => $this->configuration['related_entity'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['related_entity'] = $form_state->getValue('related_entity');
  }

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

    $build['menu_plug_block']['#markup'] = '<ul>';

    if (!empty($link_values)) {
      foreach($link_values as $link_title) {
            $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .as_toc_pages_generate_link_markup($link_title);
      }

    } // There were no links
    else {
      $build['menu_plug_block']['#markup'] = "<li>There are no modal links</li>";
    }
        $build['menu_plug_block']['#markup'] = $build['menu_plug_block']['#markup'] .'</ul>';

    return $build;
  }

}

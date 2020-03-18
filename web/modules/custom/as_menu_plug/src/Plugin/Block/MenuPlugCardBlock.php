<?php

namespace Drupal\as_menu_plug\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'MenuPlugCardBlock' block.
 *
 * @Block(
 *  id = "menu_plug_card_block",
 *  admin_label = @Translation("Menu plug card block"),
 * )
 */
class MenuPlugCardBlock extends BlockBase {

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
    $form['entity_reference'] = [
      '#type' => 'entity_autocomplete',
      '#title' => $this->t('Entity Reference'),
      '#description' => $this->t('Entity Reference'),
      '#default_value' => $this->configuration['entity_reference'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['entity_reference'] = $form_state->getValue('entity_reference');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'menu_plug_card_block';
    $build['#conten'][] = $this->configuration['entity_reference'];

    return $build;
  }

}

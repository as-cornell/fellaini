<?php

namespace Drupal\as_menu_spackle\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'MenuLinksBlock' block.
 *
 * @Block(
 *  id = "menu_links_block",
 *  admin_label = @Translation("Menu links block"),
 * )
 */
class MenuLinksBlock extends BlockBase {

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
    $form['links'] = [
      '#type' => 'links',
      '#title' => $this->t('Links'),
      '#description' => $this->t('In-page links'),
      '#default_value' => $this->configuration['links'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['links'] = $form_state->getValue('links');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'menu_links_block';
    $build['#conten'][] = $this->configuration['links'];

    return $build;
  }

}

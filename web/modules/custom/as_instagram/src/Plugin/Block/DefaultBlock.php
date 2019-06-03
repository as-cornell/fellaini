<?php

namespace Drupal\as_instagram\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Instagram block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'instagram_account_name' => cornellcas,
                  'posts' => 1,
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['instagram_account_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instagram Account Name'),
    '#description' => $this->t('The username of the instagram account to be featured'),
      '#default_value' => $this->configuration['instagram_account_name'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];
    $form['posts'] = [
      '#type' => 'number',
      '#title' => $this->t('Posts'),
    '#description' => $this->t('Number of posts to display'),
      '#default_value' => $this->configuration['posts'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['instagram_account_name'] = $form_state->getValue('instagram_account_name');
    $this->configuration['posts'] = $form_state->getValue('posts');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['default_block_instagram_account_name']['#markup'] = '<p>' . $this->configuration['instagram_account_name'] . '</p>';
    $build['default_block_posts']['#markup'] = '<p>' . $this->configuration['posts'] . '</p>';

    return $build;
  }

}

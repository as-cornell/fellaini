<?php

/**
 * @file
 * Contains \Drupal\ckeditor_a11ychecker\Plugin\CKEditorPlugin\A11yCheckerPlugin.
 */

namespace Drupal\ckeditor_a11ychecker\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "a11ychecker" plugin.
 *
 * @CKEditorPlugin(
 *   id = "a11ychecker",
 *   label = @Translation("Accessibility Checker")
 * )
 */
class A11yCheckerPlugin extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return ['balloonpanel'];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return ['core/drupal.jquery'];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return array(
      'A11ychecker' => array(
        'label' => t('Accessibility Checker'),
        'image' => base_path() . 'libraries/a11ychecker/icons/a11ychecker.png',
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return base_path() . 'libraries/a11ychecker/plugin.js';
  }
}
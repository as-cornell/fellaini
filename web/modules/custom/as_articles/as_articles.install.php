<?php

use Symfony\Component\Yaml\Yaml;

/**
 * Implements hook_install().
 */
function as_articles_install() {
  // Don't do anything during config sync.
  if (\Drupal::isConfigSyncing()) {
    return;
  }
  $overridden_config = [
    'core.entity_form_display.node.article.default',
    'core.entity_view_display.node.article.default',
    'filter.format.full_html.yml',
    'migrate_plus.migration.import_as_article_departments_programs.yml',
    'node.type.article.yml',
    'taxonomy.vocabulary.tags.yml'
  ];

  $config_path = \Drupal::root() . '/' . drupal_get_path('module', 'as_articles') . '/config/optional/';

  foreach ($overridden_config as $config) {
    $editable_config = Drupal::configFactory()->getEditable($config);
    $new_config_file = $config_path . $config . '.yml';
    $new_config_content = file_get_contents($new_config_file);
    $new_config = (array) Yaml::parse($new_config_content);
    // Check for existing uuid on the config
    if ($uuid = $editable_config->get('uuid')) {
      $new_config['uuid'] = $uuid;
    }
    $editable_config->setData($new_config)->save();
  }
}

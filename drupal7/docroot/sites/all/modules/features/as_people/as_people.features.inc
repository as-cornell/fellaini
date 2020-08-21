<?php
/**
 * @file
 * as_people.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function as_people_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "feeds_tamper" && $api == "feeds_tamper_default") {
    return array("version" => "2");
  }
}

/**
 * Implements hook_views_api().
 */
function as_people_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function as_people_node_info() {
  $items = array(
    'person' => array(
      'name' => t('Person'),
      'base' => 'node_content',
      'description' => t('Content type for aggregating data about people pulled from various external data points.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'person_profile' => array(
      'name' => t('Person Profile'),
      'base' => 'node_content',
      'description' => t('Content for long-form, in depth person profiles.   Used to import student, faculty and alumni profiles from CS site.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

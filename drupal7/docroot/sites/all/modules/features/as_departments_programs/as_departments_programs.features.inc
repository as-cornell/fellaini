<?php
/**
 * @file
 * as_departments_programs.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function as_departments_programs_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function as_departments_programs_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function as_departments_programs_node_info() {
  $items = array(
    'department_program' => array(
      'name' => t('Department Program'),
      'base' => 'node_content',
      'description' => t('Content type for A&S Departments and Programs.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

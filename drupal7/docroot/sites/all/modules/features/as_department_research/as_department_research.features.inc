<?php
/**
 * @file
 * as_department_research.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function as_department_research_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
}

/**
 * Implements hook_views_api().
 */
function as_department_research_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function as_department_research_node_info() {
  $items = array(
    'research_area' => array(
      'name' => t('Research Area'),
      'base' => 'node_content',
      'description' => t('Research area or subdiscipline for departments.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

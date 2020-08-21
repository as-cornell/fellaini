<?php
/**
 * @file
 * as_factoids.features.inc
 */

/**
 * Implements hook_views_api().
 */
function as_factoids_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function as_factoids_node_info() {
  $items = array(
    'factoid' => array(
      'name' => t('Stats, Quotes, FAQs, and Facts'),
      'base' => 'node_content',
      'description' => t('Content type for stats, quotes, FAQs and other short content to be displayed in tiles on various pages.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

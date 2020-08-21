<?php
/**
 * @file
 * as_basic_page.features.inc
 */

/**
 * Implements hook_node_info().
 */
function as_basic_page_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Any page that is not the child of a TOC page. There is an option for a sidebar with different fields, as well as two main body areas. '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

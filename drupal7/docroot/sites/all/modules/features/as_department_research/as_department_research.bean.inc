<?php
/**
 * @file
 * as_department_research.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function as_department_research_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'alt_research_landing';
  $bean_type->label = 'Alt Research Landing';
  $bean_type->options = '';
  $bean_type->description = 'Alternative landing page for research focused sites.';
  $export['alt_research_landing'] = $bean_type;

  return $export;
}

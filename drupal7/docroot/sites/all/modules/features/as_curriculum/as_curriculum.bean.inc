<?php
/**
 * @file
 * as_curriculum.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function as_curriculum_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'curriculum';
  $bean_type->label = 'Curriculum';
  $bean_type->options = '';
  $bean_type->description = 'Special bean type for Curriculum page';
  $export['curriculum'] = $bean_type;

  return $export;
}

<?php
/**
 * @file
 * as_dept_directory.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function as_dept_directory_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'directory';
  $bean_type->label = 'Directory';
  $bean_type->options = '';
  $bean_type->description = 'Directory of different kinds of people built with filed collections of entity references.';
  $export['directory'] = $bean_type;

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'people_list';
  $bean_type->label = 'People List';
  $bean_type->options = '';
  $bean_type->description = 'Block type that manually builds lists of people for card views.';
  $export['people_list'] = $bean_type;

  return $export;
}

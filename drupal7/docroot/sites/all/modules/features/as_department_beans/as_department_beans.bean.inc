<?php
/**
 * @file
 * as_department_beans.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function as_department_beans_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'department_homepage';
  $bean_type->label = 'Department Homepage';
  $bean_type->options = '';
  $bean_type->description = 'Department Homepage';
  $export['department_homepage'] = $bean_type;

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'dept_landing_page';
  $bean_type->label = 'Department landing page';
  $bean_type->options = '';
  $bean_type->description = 'Basic department landing page';
  $export['dept_landing_page'] = $bean_type;

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'homepage_alt';
  $bean_type->label = 'Homepage-Alt';
  $bean_type->options = '';
  $bean_type->description = 'Alternate homepage layout';
  $export['homepage_alt'] = $bean_type;

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'table_of_contents';
  $bean_type->label = 'table of contents';
  $bean_type->options = '';
  $bean_type->description = '';
  $export['table_of_contents'] = $bean_type;

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'wip';
  $bean_type->label = 'wip';
  $bean_type->options = '';
  $bean_type->description = 'Women in Physics webpage';
  $export['wip'] = $bean_type;

  return $export;
}

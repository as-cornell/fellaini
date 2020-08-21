<?php
/**
 * @file
 * as_student_services_block.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function as_student_services_block_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'student_services';
  $bean_type->label = 'Student Services';
  $bean_type->options = '';
  $bean_type->description = 'The student services page.';
  $export['student_services'] = $bean_type;

  return $export;
}

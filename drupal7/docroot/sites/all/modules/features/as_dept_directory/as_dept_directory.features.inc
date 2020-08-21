<?php
/**
 * @file
 * as_dept_directory.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function as_dept_directory_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
}

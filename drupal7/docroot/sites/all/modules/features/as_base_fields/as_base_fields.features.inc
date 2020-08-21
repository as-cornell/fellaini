<?php

/**
 * @file
 * as_base_fields.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function as_base_fields_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "cer" && $api == "default_cer_presets") {
    return array("version" => "1");
  }
}

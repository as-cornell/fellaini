<?php
/**
 * @file
 * as_people.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function as_people_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_12-rewrite';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:12';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => '[xpathparser:12]@cornell.edu',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite';
  $export['vivo_all_a_s_faculty-xpathparser_12-rewrite'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_17-find_replace_regex';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:17';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/^[^\\(]+/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace REGEX before (';
  $export['vivo_all_a_s_faculty-xpathparser_17-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_17-find_replace_regex_after';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:17';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/\\(.*/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 3;
  $feeds_tamper->description = 'Find replace REGEX after (';
  $export['vivo_all_a_s_faculty-xpathparser_17-find_replace_regex_after'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_17-trim';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:17';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => '(',
    'side' => 'ltrim',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Trim (';
  $export['vivo_all_a_s_faculty-xpathparser_17-trim'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_17-trim_r';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:17';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => ' ',
    'side' => 'rtrim',
  );
  $feeds_tamper->weight = 4;
  $feeds_tamper->description = 'Trim';
  $export['vivo_all_a_s_faculty-xpathparser_17-trim_r'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_17-trim_rspace';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:17';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => ') ',
    'side' => 'ltrim',
  );
  $feeds_tamper->weight = 2;
  $feeds_tamper->description = 'Trim right ) and space';
  $export['vivo_all_a_s_faculty-xpathparser_17-trim_rspace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_18-explode';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:18';
  $feeds_tamper->plugin_id = 'explode';
  $feeds_tamper->settings = array(
    'separator' => ',',
    'limit' => '',
    'real_separator' => ',',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Explode';
  $export['vivo_all_a_s_faculty-xpathparser_18-explode'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_18-rewrite';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:18';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => '[xpathparser:18],[xpathparser:9]',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite';
  $export['vivo_all_a_s_faculty-xpathparser_18-rewrite'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_19-explode';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:19';
  $feeds_tamper->plugin_id = 'explode';
  $feeds_tamper->settings = array(
    'separator' => ',',
    'limit' => '',
    'real_separator' => ',',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Explode';
  $export['vivo_all_a_s_faculty-xpathparser_19-explode'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_19-rewrite';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:19';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => '[xpathparser:19],[xpathparser:10]',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite';
  $export['vivo_all_a_s_faculty-xpathparser_19-rewrite'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-find_replace';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => ' and ',
    'replace' => ' & ',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 7;
  $feeds_tamper->description = 'Find replace and with &';
  $export['vivo_all_a_s_faculty-xpathparser_3-find_replace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-find_replace_regex';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/\\(.*/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 6;
  $feeds_tamper->description = 'Find replace REGEX after (';
  $export['vivo_all_a_s_faculty-xpathparser_3-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-find_replace_regex_between';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/^[^\\(]+/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 4;
  $feeds_tamper->description = 'Find replace REGEX before (';
  $export['vivo_all_a_s_faculty-xpathparser_3-find_replace_regex_between'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-trim';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => '(',
    'side' => 'ltrim',
  );
  $feeds_tamper->weight = 5;
  $feeds_tamper->description = 'Trim (';
  $export['vivo_all_a_s_faculty-xpathparser_3-trim'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-trim_r';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => ') ',
    'side' => 'rtrim',
  );
  $feeds_tamper->weight = 9;
  $feeds_tamper->description = 'Trim right ) and space';
  $export['vivo_all_a_s_faculty-xpathparser_3-trim_r'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_3-trim_rspace';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:3';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => ' ',
    'side' => 'rtrim',
  );
  $feeds_tamper->weight = 10;
  $feeds_tamper->description = 'Trim';
  $export['vivo_all_a_s_faculty-xpathparser_3-trim_rspace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_5-find_replace_regex';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:5';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/\\,.*/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace REGEX';
  $export['vivo_all_a_s_faculty-xpathparser_5-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_6-find_replace_regex';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:6';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/^(.+?),/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace REGEX';
  $export['vivo_all_a_s_faculty-xpathparser_6-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_6-find_replace_regex_firstname';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:6';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/\\ .*/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 2;
  $feeds_tamper->description = 'Find replace REGEX firstname';
  $export['vivo_all_a_s_faculty-xpathparser_6-find_replace_regex_firstname'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_6-trim';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:6';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => '',
    'side' => 'ltrim',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Trim';
  $export['vivo_all_a_s_faculty-xpathparser_6-trim'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'vivo_all_a_s_faculty-xpathparser_7-strip_tags';
  $feeds_tamper->importer = 'vivo_all_a_s_faculty';
  $feeds_tamper->source = 'xpathparser:7';
  $feeds_tamper->plugin_id = 'strip_tags';
  $feeds_tamper->settings = array(
    'allowed_tags' => '<ul><li><p><a><b><strong><i><em>',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Strip tags';
  $export['vivo_all_a_s_faculty-xpathparser_7-strip_tags'] = $feeds_tamper;

  return $export;
}

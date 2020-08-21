<?php

/**
 * @file
 * as_courses.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function as_courses_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-blank_source_1-rewrite';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'Blank source 1';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => 'https://classes.cornell.edu/browse/roster/[xpathparser:10]/class/[xpathparser:1]/[xpathparser:2]',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite';
  $export['courses_by_department-blank_source_1-rewrite'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-blank_source_2-default_value';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'Blank source 2';
  $feeds_tamper->plugin_id = 'default_value';
  $feeds_tamper->settings = array(
    'default_value' => 'SP17',
    'only_if_empty' => 1,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Set value or default value';
  $export['courses_by_department-blank_source_2-default_value'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = TRUE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-blank_source_2-default_value_sem';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'Blank source 2';
  $feeds_tamper->plugin_id = 'default_value';
  $feeds_tamper->settings = array(
    'default_value' => 'SP17',
    'only_if_empty' => 0,
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Set value or default value';
  $export['courses_by_department-blank_source_2-default_value_sem'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_0-rewrite';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:0';
  $feeds_tamper->plugin_id = 'rewrite';
  $feeds_tamper->settings = array(
    'text' => '[xpathparser:0][xpathparser:10]',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Rewrite Course ID to include semester';
  $export['courses_by_department-xpathparser_0-rewrite'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2643',
    'replace' => 'FA16',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace Fall 2016 - 2643';
  $export['courses_by_department-xpathparser_10-find_replace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace_fa17';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2678',
    'replace' => 'FA17',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 2;
  $feeds_tamper->description = 'Find replace Fall 2017 - 2678';
  $export['courses_by_department-xpathparser_10-find_replace_fa17'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace_fa18';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2713',
    'replace' => 'FA18',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 4;
  $feeds_tamper->description = 'Find replace Fall 2018 - 2713';
  $export['courses_by_department-xpathparser_10-find_replace_fa18'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace_fa19';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2741',
    'replace' => 'FA19',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 5;
  $feeds_tamper->description = 'Find replace_fa19';
  $export['courses_by_department-xpathparser_10-find_replace_fa19'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace_sp18';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2727',
    'replace' => 'SP19',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 3;
  $feeds_tamper->description = 'Find replace Spring 2019 - 2727';
  $export['courses_by_department-xpathparser_10-find_replace_sp18'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_10-find_replace_spring';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:10';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '2657',
    'replace' => 'SP17',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Find replace Spring 2017 - 2657';
  $export['courses_by_department-xpathparser_10-find_replace_spring'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_5-unique';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:5';
  $feeds_tamper->plugin_id = 'unique';
  $feeds_tamper->settings = array();
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Unique';
  $export['courses_by_department-xpathparser_5-unique'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_6-unique';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:6';
  $feeds_tamper->plugin_id = 'unique';
  $feeds_tamper->settings = array();
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Unique';
  $export['courses_by_department-xpathparser_6-unique'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_7-unique';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:7';
  $feeds_tamper->plugin_id = 'unique';
  $feeds_tamper->settings = array();
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Unique';
  $export['courses_by_department-xpathparser_7-unique'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_8-find_replace_regex';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:8';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/C\\s|B\\s|W\\s|C$|B$|W$/',
    'replace' => '',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 3;
  $feeds_tamper->description = 'Find replace C B W REGEX';
  $export['courses_by_department-xpathparser_8-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_8-find_replace_regex_lettersspace';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:8';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/([a-zA-Z])(\\d)/',
    'replace' => '$1 $2',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 5;
  $feeds_tamper->description = 'Find replace REGEX space letters numbers';
  $export['courses_by_department-xpathparser_8-find_replace_regex_lettersspace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_8-implode';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:8';
  $feeds_tamper->plugin_id = 'implode';
  $feeds_tamper->settings = array(
    'glue' => ' , ',
    'real_glue' => ' , ',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Implode';
  $export['courses_by_department-xpathparser_8-implode'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = TRUE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_9-implode';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:9';
  $feeds_tamper->plugin_id = 'implode';
  $feeds_tamper->settings = array(
    'glue' => ' , ',
    'real_glue' => ' , ',
  );
  $feeds_tamper->weight = 2;
  $feeds_tamper->description = 'Implode';
  $export['courses_by_department-xpathparser_9-implode'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'courses_by_department-xpathparser_9-unique';
  $feeds_tamper->importer = 'courses_by_department';
  $feeds_tamper->source = 'xpathparser:9';
  $feeds_tamper->plugin_id = 'unique';
  $feeds_tamper->settings = array();
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Unique';
  $export['courses_by_department-xpathparser_9-unique'] = $feeds_tamper;

  return $export;
}

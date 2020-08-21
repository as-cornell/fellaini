<?php

/**
 * @file
 * as_courses.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function as_courses_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'courses_by_department';
  $feeds_importer->config = array(
    'name' => 'Courses by Subject',
    'description' => 'Imports courses from Classes website by individual subject designator.',
    'fetcher' => array(
      'plugin_key' => 'FeedsHTTPFetcher',
      'config' => array(
        'auto_detect_feeds' => FALSE,
        'use_pubsubhubbub' => FALSE,
        'designated_hub' => '',
        'request_timeout' => NULL,
        'auto_scheme' => 'http',
        'accept_invalid_cert' => FALSE,
        'cache_http_result' => TRUE,
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsXPathParserXML',
      'config' => array(
        'sources' => array(
          'xpathparser:10' => 'strm',
          'xpathparser:0' => 'crseId',
          'xpathparser:1' => 'subject',
          'xpathparser:2' => 'catalogNbr',
          'xpathparser:3' => 'titleLong',
          'xpathparser:4' => 'description',
          'xpathparser:5' => 'enrollGroups/enrollGroup/classSections/classSection/meetings/meeting/instructors/instructor/netid',
          'xpathparser:6' => 'enrollGroups/enrollGroup/classSections/classSection/meetings/meeting/instructors/instructor/firstName',
          'xpathparser:7' => 'enrollGroups/enrollGroup/classSections/classSection/meetings/meeting/instructors/instructor/lastName',
          'xpathparser:8' => 'enrollGroups/enrollGroup/simpleCombinations/combination',
          'xpathparser:9' => 'enrollGroups/enrollGroup/classSections/classSection/meetings/meeting/instructors/instructor/netid',
        ),
        'rawXML' => array(
          'xpathparser:10' => 0,
          'xpathparser:0' => 0,
          'xpathparser:1' => 0,
          'xpathparser:2' => 0,
          'xpathparser:3' => 0,
          'xpathparser:4' => 0,
          'xpathparser:5' => 0,
          'xpathparser:6' => 0,
          'xpathparser:7' => 0,
          'xpathparser:8' => 0,
          'xpathparser:9' => 0,
        ),
        'context' => '////class',
        'exp' => array(
          'errors' => 0,
          'tidy' => 0,
          'tidy_encoding' => 'UTF8',
          'debug' => array(
            'context' => 0,
            'xpathparser:10' => 0,
            'xpathparser:0' => 0,
            'xpathparser:1' => 0,
            'xpathparser:2' => 0,
            'xpathparser:3' => 0,
            'xpathparser:4' => 0,
            'xpathparser:5' => 0,
            'xpathparser:6' => 0,
            'xpathparser:7' => 0,
            'xpathparser:8' => 0,
            'xpathparser:9' => 0,
          ),
        ),
        'allow_override' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'expire' => '-1',
        'author' => '1',
        'authorize' => 1,
        'mappings' => array(
          0 => array(
            'source' => 'xpathparser:10',
            'target' => 'field_semester',
            'unique' => FALSE,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'xpathparser:0',
            'target' => 'guid',
            'unique' => 1,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'xpathparser:1',
            'target' => 'field_department_prefix',
            'unique' => FALSE,
            'language' => 'und',
          ),
          3 => array(
            'source' => 'xpathparser:2',
            'target' => 'field_course_number',
            'unique' => FALSE,
            'language' => 'und',
          ),
          4 => array(
            'source' => 'xpathparser:3',
            'target' => 'title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          5 => array(
            'source' => 'xpathparser:4',
            'target' => 'body',
            'unique' => FALSE,
            'language' => 'und',
          ),
          6 => array(
            'source' => 'Blank source 1',
            'target' => 'field_links:url',
            'unique' => FALSE,
            'language' => 'und',
          ),
          7 => array(
            'source' => 'xpathparser:5',
            'target' => 'field_person_netid',
            'unique' => FALSE,
            'language' => 'und',
          ),
          8 => array(
            'source' => 'xpathparser:6',
            'target' => 'field_person_first_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          9 => array(
            'source' => 'xpathparser:7',
            'target' => 'field_person_last_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          10 => array(
            'source' => 'xpathparser:8',
            'target' => 'field_courses_crosslisted',
            'unique' => FALSE,
            'language' => 'und',
          ),
          11 => array(
            'source' => 'xpathparser:9',
            'target' => 'field_related_person',
            'unique' => FALSE,
            'language' => 'und',
          ),
        ),
        'update_existing' => '2',
        'update_non_existent' => 'skip',
        'input_format' => 'plain_text',
        'skip_hash_check' => 1,
        'bundle' => 'course',
        'insert_new' => '1',
        'language' => 'und',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '604800',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['courses_by_department'] = $feeds_importer;

  return $export;
}

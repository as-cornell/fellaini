<?php

/**
 * @file
 * as_people_departments.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function as_people_departments_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'as_people';
  $feeds_importer->config = array(
    'content_type' => '',
    'description' => 'Imports people from AS Website',
    'expire_period' => 3600,
    'fetcher' => array(
      'config' => array(
        'accept_invalid_cert' => FALSE,
        'auto_detect_feeds' => FALSE,
        'auto_scheme' => 'http',
        'cache_http_result' => TRUE,
        'designated_hub' => '',
        'request_timeout' => NULL,
        'use_pubsubhubbub' => FALSE,
      ),
      'plugin_key' => 'FeedsHTTPFetcher',
    ),
    'import_on_create' => 1,
    'import_period' => '86400',
    'name' => 'AS People',
    'parser' => array(
      'config' => array(
        'allow_override' => 0,
        'context' => '//item',
        'exp' => array(
          'debug' => array(
            'context' => 0,
            'xpathparser:0' => 0,
            'xpathparser:10' => 0,
            'xpathparser:11' => 0,
            'xpathparser:13' => 0,
            'xpathparser:14' => 0,
            'xpathparser:15' => 0,
            'xpathparser:16' => 0,
            'xpathparser:17' => 0,
            'xpathparser:18' => 0,
            'xpathparser:19' => 0,
            'xpathparser:2' => 0,
            'xpathparser:20' => 0,
            'xpathparser:21' => 0,
            'xpathparser:22' => 0,
            'xpathparser:23' => 0,
            'xpathparser:3' => 0,
          ),
          'errors' => 0,
        ),
        'rawXML' => array(
          'xpathparser:0' => 0,
          'xpathparser:10' => 0,
          'xpathparser:11' => 0,
          'xpathparser:13' => 0,
          'xpathparser:14' => 0,
          'xpathparser:15' => 0,
          'xpathparser:16' => 0,
          'xpathparser:17' => 0,
          'xpathparser:18' => 0,
          'xpathparser:19' => 0,
          'xpathparser:2' => 0,
          'xpathparser:20' => 0,
          'xpathparser:21' => 0,
          'xpathparser:22' => 0,
          'xpathparser:23' => 0,
          'xpathparser:3' => 0,
        ),
        'sources' => array(
          'xpathparser:0' => 'FirstName',
          'xpathparser:10' => 'NetID',
          'xpathparser:11' => 'NetID',
          'xpathparser:13' => 'Affliliation',
          'xpathparser:14' => 'Description',
          'xpathparser:15' => 'EducationalBackground',
          'xpathparser:16' => 'GraduateFields',
          'xpathparser:17' => 'Keywords',
          'xpathparser:18' => 'Publications',
          'xpathparser:19' => 'ResearchFocus',
          'xpathparser:2' => 'LastName',
          'xpathparser:20' => 'LinkURL',
          'xpathparser:21' => 'LinkTitle',
          'xpathparser:22' => 'DepartmentsPrograms',
          'xpathparser:23' => 'Image',
          'xpathparser:3' => 'PersonTitle',
        ),
      ),
      'plugin_key' => 'FeedsXPathParserXML',
    ),
    'process_in_background' => 0,
    'processor' => array(
      'config' => array(
        'author' => '1',
        'authorize' => 1,
        'bundle' => 'person',
        'expire' => '-1',
        'input_format' => 'full_html',
        'insert_new' => '1',
        'language' => 'und',
        'mappings' => array(
          0 => array(
            'language' => 'und',
            'source' => 'xpathparser:0',
            'target' => 'field_person_first_name',
            'unique' => FALSE,
          ),
          1 => array(
            'language' => 'und',
            'source' => 'xpathparser:2',
            'target' => 'field_person_last_name',
            'unique' => FALSE,
          ),
          2 => array(
            'language' => 'und',
            'source' => 'xpathparser:3',
            'target' => 'field_person_title',
            'unique' => FALSE,
          ),
          3 => array(
            'language' => 'und',
            'source' => 'xpathparser:10',
            'target' => 'field_person_netid',
            'unique' => FALSE,
          ),
          4 => array(
            'language' => 'und',
            'source' => 'xpathparser:11',
            'target' => 'guid',
            'unique' => 1,
          ),
          5 => array(
            'language' => 'und',
            'source' => 'xpathparser:13',
            'target' => 'field_person_affiliation',
            'unique' => FALSE,
          ),
          6 => array(
            'language' => 'und',
            'source' => 'xpathparser:14',
            'target' => 'body',
            'unique' => FALSE,
          ),
          7 => array(
            'language' => 'und',
            'source' => 'xpathparser:15',
            'target' => 'field_person_education',
            'unique' => FALSE,
          ),
          8 => array(
            'language' => 'und',
            'source' => 'xpathparser:16',
            'target' => 'field_person_graduate_fields',
            'unique' => FALSE,
          ),
          9 => array(
            'language' => 'und',
            'source' => 'xpathparser:17',
            'target' => 'field_keywords',
            'unique' => FALSE,
          ),
          10 => array(
            'language' => 'und',
            'source' => 'xpathparser:18',
            'target' => 'field_person_publications',
            'unique' => FALSE,
          ),
          11 => array(
            'language' => 'und',
            'source' => 'xpathparser:19',
            'target' => 'field_person_research_focus',
            'unique' => FALSE,
          ),
          12 => array(
            'language' => 'und',
            'source' => 'xpathparser:20',
            'target' => 'field_links:url',
            'unique' => FALSE,
          ),
          13 => array(
            'language' => 'und',
            'source' => 'xpathparser:21',
            'target' => 'field_links:title',
            'unique' => FALSE,
          ),
          14 => array(
            'language' => 'und',
            'source' => 'xpathparser:22',
            'target' => 'field_departments_programs',
            'unique' => FALSE,
          ),
          15 => array(
            'language' => 'und',
            'source' => 'Blank source 1',
            'target' => 'field_person_type',
            'unique' => FALSE,
          ),
          16 => array(
            'language' => 'und',
            'source' => 'xpathparser:23',
            'target' => 'field_remote_image',
            'unique' => FALSE,
          ),
        ),
        'skip_hash_check' => 1,
        'update_existing' => '2',
        'update_non_existent' => 'skip',
      ),
      'plugin_key' => 'FeedsNodeProcessor',
    ),
    'update' => 0,
  );
  $export['as_people'] = $feeds_importer;

  return $export;
}

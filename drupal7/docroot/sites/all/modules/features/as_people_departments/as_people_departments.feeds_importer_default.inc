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
    'name' => 'AS People',
    'description' => 'Imports people from AS Website',
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
          'xpathparser:0' => 'FirstName',
          'xpathparser:2' => 'LastName',
          'xpathparser:3' => 'PersonTitle',
          'xpathparser:10' => 'NetID',
          'xpathparser:11' => 'NetID',
          'xpathparser:12' => 'Image',
          'xpathparser:13' => 'Affliliation',
          'xpathparser:14' => 'Description',
          'xpathparser:15' => 'EducationalBackground',
          'xpathparser:16' => 'GraduateFields',
          'xpathparser:17' => 'Keywords',
          'xpathparser:18' => 'Publications',
          'xpathparser:19' => 'ResearchFocus',
          'xpathparser:20' => 'LinkURL',
          'xpathparser:21' => 'LinkTitle',
          'xpathparser:22' => 'DepartmentsPrograms',
          'xpathparser:23' => 'Image',
        ),
        'rawXML' => array(
          'xpathparser:0' => 0,
          'xpathparser:2' => 0,
          'xpathparser:3' => 0,
          'xpathparser:10' => 0,
          'xpathparser:11' => 0,
          'xpathparser:12' => 0,
          'xpathparser:13' => 0,
          'xpathparser:14' => 0,
          'xpathparser:15' => 0,
          'xpathparser:16' => 0,
          'xpathparser:17' => 0,
          'xpathparser:18' => 0,
          'xpathparser:19' => 0,
          'xpathparser:20' => 0,
          'xpathparser:21' => 0,
          'xpathparser:22' => 0,
          'xpathparser:23' => 0,
        ),
        'context' => '//node',
        'exp' => array(
          'errors' => 0,
          'tidy' => 0,
          'tidy_encoding' => 'UTF8',
          'debug' => array(
            'context' => 0,
            'xpathparser:0' => 0,
            'xpathparser:2' => 0,
            'xpathparser:3' => 0,
            'xpathparser:10' => 0,
            'xpathparser:11' => 0,
            'xpathparser:12' => 0,
            'xpathparser:13' => 0,
            'xpathparser:14' => 0,
            'xpathparser:15' => 0,
            'xpathparser:16' => 0,
            'xpathparser:17' => 0,
            'xpathparser:18' => 0,
            'xpathparser:19' => 0,
            'xpathparser:20' => 0,
            'xpathparser:21' => 0,
            'xpathparser:22' => 0,
            'xpathparser:23' => 0,
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
            'source' => 'xpathparser:0',
            'target' => 'field_person_first_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'xpathparser:2',
            'target' => 'field_person_last_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'xpathparser:3',
            'target' => 'field_person_title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          3 => array(
            'source' => 'xpathparser:10',
            'target' => 'field_person_netid',
            'unique' => FALSE,
            'language' => 'und',
          ),
          4 => array(
            'source' => 'xpathparser:11',
            'target' => 'guid',
            'unique' => 1,
            'language' => 'und',
          ),
          5 => array(
            'source' => 'xpathparser:12',
            'target' => 'field_image:uri',
            'file_exists' => '1',
            'language' => 'und',
          ),
          6 => array(
            'source' => 'xpathparser:13',
            'target' => 'field_person_affiliation',
            'unique' => FALSE,
            'language' => 'und',
          ),
          7 => array(
            'source' => 'xpathparser:14',
            'target' => 'body',
            'unique' => FALSE,
            'language' => 'und',
          ),
          8 => array(
            'source' => 'xpathparser:15',
            'target' => 'field_person_education',
            'unique' => FALSE,
            'language' => 'und',
          ),
          9 => array(
            'source' => 'xpathparser:16',
            'target' => 'field_person_graduate_fields',
            'unique' => FALSE,
            'language' => 'und',
          ),
          10 => array(
            'source' => 'xpathparser:17',
            'target' => 'field_keywords',
            'unique' => FALSE,
            'language' => 'und',
          ),
          11 => array(
            'source' => 'xpathparser:18',
            'target' => 'field_person_publications',
            'unique' => FALSE,
            'language' => 'und',
          ),
          12 => array(
            'source' => 'xpathparser:19',
            'target' => 'field_person_research_focus',
            'unique' => FALSE,
            'language' => 'und',
          ),
          13 => array(
            'source' => 'xpathparser:20',
            'target' => 'field_links:url',
            'unique' => FALSE,
            'language' => 'und',
          ),
          14 => array(
            'source' => 'xpathparser:21',
            'target' => 'field_links:title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          15 => array(
            'source' => 'xpathparser:22',
            'target' => 'field_departments_programs',
            'unique' => FALSE,
            'language' => 'und',
          ),
          16 => array(
            'source' => 'Blank source 1',
            'target' => 'field_person_type',
            'unique' => FALSE,
            'language' => 'und',
          ),
          17 => array(
            'source' => 'xpathparser:23',
            'target' => 'field_remote_image',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '2',
        'update_non_existent' => 'skip',
        'input_format' => 'full_html',
        'skip_hash_check' => 1,
        'bundle' => 'person',
        'insert_new' => '1',
        'language' => 'und',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '86400',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['as_people'] = $feeds_importer;

  return $export;
}

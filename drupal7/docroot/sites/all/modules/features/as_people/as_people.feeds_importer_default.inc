<?php
/**
 * @file
 * as_people.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function as_people_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'vivo_all_a_s_faculty';
  $feeds_importer->config = array(
    'name' => 'VIVO all A&S Faculty',
    'description' => 'Import A&S Faculty from VIVO XML feed',
    'fetcher' => array(
      'plugin_key' => 'FeedsHTTPFetcher',
      'config' => array(
        'auto_detect_feeds' => FALSE,
        'use_pubsubhubbub' => FALSE,
        'designated_hub' => '',
        'request_timeout' => NULL,
        'auto_scheme' => 'http',
        'accept_invalid_cert' => FALSE,
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsXPathParserXML',
      'config' => array(
        'sources' => array(
          'xpathparser:0' => 'netid',
          'xpathparser:1' => 'netid',
          'xpathparser:3' => 'departmentList/string',
          'xpathparser:17' => 'departmentList/string',
          'xpathparser:5' => 'personLabel',
          'xpathparser:6' => 'personLabel',
          'xpathparser:7' => 'overview',
          'xpathparser:8' => 'publications',
          'xpathparser:9' => 'otherWebsiteList/website/anchor',
          'xpathparser:18' => 'website/anchor',
          'xpathparser:10' => 'otherWebsiteList/website/url',
          'xpathparser:19' => 'website/url',
          'xpathparser:11' => 'moniker',
          'xpathparser:12' => 'netid',
          'xpathparser:13' => 'researchFocus',
          'xpathparser:14' => 'affiliationList/string',
          'xpathparser:15' => 'gradFieldList/string',
          'xpathparser:16' => 'keywordList/string',
          'xpathparser:20' => 'educationalBackground',
        ),
        'rawXML' => array(
          'xpathparser:0' => 0,
          'xpathparser:1' => 0,
          'xpathparser:3' => 0,
          'xpathparser:17' => 0,
          'xpathparser:5' => 0,
          'xpathparser:6' => 0,
          'xpathparser:7' => 0,
          'xpathparser:8' => 0,
          'xpathparser:9' => 0,
          'xpathparser:18' => 0,
          'xpathparser:10' => 0,
          'xpathparser:19' => 0,
          'xpathparser:11' => 0,
          'xpathparser:12' => 0,
          'xpathparser:13' => 0,
          'xpathparser:14' => 0,
          'xpathparser:15' => 0,
          'xpathparser:16' => 0,
          'xpathparser:20' => 0,
        ),
        'context' => '///vivoFaculty',
        'exp' => array(
          'errors' => 0,
          'tidy' => 0,
          'tidy_encoding' => 'UTF8',
          'debug' => array(
            'context' => 0,
            'xpathparser:0' => 0,
            'xpathparser:1' => 0,
            'xpathparser:3' => 0,
            'xpathparser:17' => 0,
            'xpathparser:5' => 0,
            'xpathparser:6' => 0,
            'xpathparser:7' => 0,
            'xpathparser:8' => 0,
            'xpathparser:9' => 0,
            'xpathparser:18' => 0,
            'xpathparser:10' => 0,
            'xpathparser:19' => 0,
            'xpathparser:11' => 0,
            'xpathparser:12' => 0,
            'xpathparser:13' => 0,
            'xpathparser:14' => 0,
            'xpathparser:15' => 0,
            'xpathparser:16' => 0,
            'xpathparser:20' => 0,
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
            'target' => 'guid',
            'unique' => 1,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'xpathparser:1',
            'target' => 'field_person_netid',
            'unique' => FALSE,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'xpathparser:3',
            'target' => 'field_primary_department',
            'unique' => FALSE,
            'language' => 'und',
          ),
          3 => array(
            'source' => 'xpathparser:17',
            'target' => 'field_related_dept_prog:label',
            'unique' => FALSE,
            'language' => 'und',
          ),
          4 => array(
            'source' => 'xpathparser:5',
            'target' => 'field_person_last_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          5 => array(
            'source' => 'xpathparser:6',
            'target' => 'field_person_first_name',
            'unique' => FALSE,
            'language' => 'und',
          ),
          6 => array(
            'source' => 'xpathparser:7',
            'target' => 'body',
            'format' => 'full_html',
            'language' => 'und',
          ),
          7 => array(
            'source' => 'xpathparser:8',
            'target' => 'field_person_publications',
            'format' => 'full_html',
            'language' => 'und',
          ),
          8 => array(
            'source' => 'xpathparser:9',
            'target' => 'field_links:title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          9 => array(
            'source' => 'xpathparser:18',
            'target' => 'field_links:title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          10 => array(
            'source' => 'xpathparser:10',
            'target' => 'field_links:url',
            'unique' => FALSE,
            'language' => 'und',
          ),
          11 => array(
            'source' => 'xpathparser:19',
            'target' => 'field_links:url',
            'unique' => FALSE,
            'language' => 'und',
          ),
          12 => array(
            'source' => 'xpathparser:11',
            'target' => 'field_person_title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          13 => array(
            'source' => 'xpathparser:12',
            'target' => 'field_email',
            'unique' => FALSE,
            'language' => 'und',
          ),
          14 => array(
            'source' => 'xpathparser:13',
            'target' => 'field_research_focus',
            'format' => 'full_html',
            'language' => 'und',
          ),
          15 => array(
            'source' => 'xpathparser:14',
            'target' => 'field_person_affiliation',
            'unique' => FALSE,
            'language' => 'und',
          ),
          16 => array(
            'source' => 'xpathparser:15',
            'target' => 'field_person_graduate_fields',
            'unique' => FALSE,
            'language' => 'und',
          ),
          17 => array(
            'source' => 'xpathparser:16',
            'target' => 'field_keywords',
            'format' => 'full_html',
            'language' => 'und',
          ),
          18 => array(
            'source' => 'xpathparser:20',
            'target' => 'field_educational_background',
            'format' => 'full_html',
          ),
        ),
        'insert_new' => '1',
        'update_existing' => '2',
        'update_non_existent' => 'skip',
        'input_format' => 'plain_text',
        'skip_hash_check' => 1,
        'bundle' => 'person',
        'language' => 'und',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '-1',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['vivo_all_a_s_faculty'] = $feeds_importer;

  return $export;
}

<?php

/**
 * @file
 * as_article.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function as_article_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'as_articles';
  $feeds_importer->config = array(
    'name' => 'AS Articles',
    'description' => 'Imports articles tagged with this department or program from AS Website',
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
          'xpathparser:0' => 'Title',
          'xpathparser:1' => 'Title',
          'xpathparser:2' => 'Byline',
          'xpathparser:3' => 'Media-Source',
          'xpathparser:4' => 'Dateline',
          'xpathparser:9' => 'Description',
          'xpathparser:7' => 'Newsletter-Image',
          'xpathparser:8' => 'Featured-Video',
          'xpathparser:14' => 'Link-Text',
          'xpathparser:16' => 'Alias',
          'xpathparser:17' => 'Nid',
          'xpathparser:18' => 'Summary',
          'xpathparser:19' => 'RelatedPeopleNetID',
          'xpathparser:20' => 'Image',
          'xpathparser:21' => 'image-alt',
        ),
        'rawXML' => array(
          'xpathparser:9' => 'xpathparser:9',
          'xpathparser:0' => 0,
          'xpathparser:1' => 0,
          'xpathparser:2' => 0,
          'xpathparser:3' => 0,
          'xpathparser:4' => 0,
          'xpathparser:7' => 0,
          'xpathparser:8' => 0,
          'xpathparser:14' => 0,
          'xpathparser:16' => 0,
          'xpathparser:17' => 0,
          'xpathparser:18' => 0,
          'xpathparser:19' => 0,
          'xpathparser:20' => 0,
          'xpathparser:21' => 0,
        ),
        'context' => '//node',
        'exp' => array(
          'errors' => 0,
          'tidy' => 0,
          'tidy_encoding' => 'UTF8',
          'debug' => array(
            'context' => 0,
            'xpathparser:0' => 0,
            'xpathparser:1' => 0,
            'xpathparser:2' => 0,
            'xpathparser:3' => 0,
            'xpathparser:4' => 0,
            'xpathparser:9' => 0,
            'xpathparser:7' => 0,
            'xpathparser:8' => 0,
            'xpathparser:14' => 0,
            'xpathparser:16' => 0,
            'xpathparser:17' => 0,
            'xpathparser:18' => 0,
            'xpathparser:19' => 0,
            'xpathparser:20' => 0,
            'xpathparser:21' => 0,
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
            'target' => 'title',
            'unique' => FALSE,
            'language' => 'und',
          ),
          1 => array(
            'source' => 'xpathparser:1',
            'target' => 'title_field',
            'unique' => FALSE,
            'language' => 'und',
          ),
          2 => array(
            'source' => 'xpathparser:2',
            'target' => 'field_byline',
            'unique' => FALSE,
            'language' => 'und',
          ),
          3 => array(
            'source' => 'xpathparser:3',
            'target' => 'field_media_source',
            'unique' => FALSE,
            'language' => 'und',
          ),
          4 => array(
            'source' => 'xpathparser:4',
            'target' => 'field_dateline:start',
            'unique' => FALSE,
            'language' => 'und',
          ),
          5 => array(
            'source' => 'xpathparser:9',
            'target' => 'body',
            'unique' => FALSE,
            'language' => 'und',
          ),
          6 => array(
            'source' => 'xpathparser:7',
            'target' => 'field_newsletter_image:uri',
            'file_exists' => '5',
            'language' => 'und',
          ),
          7 => array(
            'source' => 'xpathparser:8',
            'target' => 'field_featured_video',
            'unique' => FALSE,
            'language' => 'und',
          ),
          8 => array(
            'source' => 'xpathparser:14',
            'target' => 'field_link_text',
            'unique' => FALSE,
            'language' => 'und',
          ),
          9 => array(
            'source' => 'xpathparser:16',
            'target' => 'path_alias',
            'pathauto_override' => 1,
            'language' => 'und',
          ),
          10 => array(
            'source' => 'xpathparser:17',
            'target' => 'guid',
            'unique' => 1,
            'language' => 'und',
          ),
          11 => array(
            'source' => 'xpathparser:18',
            'target' => 'body:summary',
            'unique' => FALSE,
            'language' => 'und',
          ),
          12 => array(
            'source' => 'xpathparser:19',
            'target' => 'field_related_people',
            'unique' => FALSE,
            'language' => 'und',
          ),
          13 => array(
            'source' => 'xpathparser:20',
            'target' => 'field_image_remote_path',
            'unique' => FALSE,
            'language' => 'und',
          ),
          14 => array(
            'source' => 'xpathparser:21',
            'target' => 'field_image_remote_alt',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '0',
        'update_non_existent' => 'skip',
        'input_format' => 'full_html',
        'skip_hash_check' => 0,
        'bundle' => 'article',
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
  $export['as_articles'] = $feeds_importer;

  return $export;
}

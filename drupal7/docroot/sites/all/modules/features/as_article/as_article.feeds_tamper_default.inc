<?php

/**
 * @file
 * as_article.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function as_article_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'as_articles-xpathparser_19-explode';
  $feeds_tamper->importer = 'as_articles';
  $feeds_tamper->source = 'xpathparser:19';
  $feeds_tamper->plugin_id = 'explode';
  $feeds_tamper->settings = array(
    'separator' => '|',
    'limit' => '',
    'real_separator' => '|',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Explode';
  $export['as_articles-xpathparser_19-explode'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'as_articles-xpathparser_19-trim';
  $feeds_tamper->importer = 'as_articles';
  $feeds_tamper->source = 'xpathparser:19';
  $feeds_tamper->plugin_id = 'trim';
  $feeds_tamper->settings = array(
    'mask' => '',
    'side' => 'trim',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Trim';
  $export['as_articles-xpathparser_19-trim'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'as_articles-xpathparser_19-unique';
  $feeds_tamper->importer = 'as_articles';
  $feeds_tamper->source = 'xpathparser:19';
  $feeds_tamper->plugin_id = 'unique';
  $feeds_tamper->settings = array();
  $feeds_tamper->weight = 2;
  $feeds_tamper->description = 'Unique';
  $export['as_articles-xpathparser_19-unique'] = $feeds_tamper;

  return $export;
}

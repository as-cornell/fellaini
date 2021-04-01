<?php
/**
 * @file
 * Platform.sh example settings.php file for Drupal 7.
 */

// Recommended PHP settings.
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
ini_set('pcre.backtrack_limit', 200000);
ini_set('pcre.recursion_limit', 200000);

// Default Drupal 7 settings.
//
// These are already explained with detailed comments in Drupal's
// default.settings.php file.
//
// See https://api.drupal.org/api/drupal/sites!default!default.settings.php/7
$databases = array();
$update_free_access = FALSE;
$drupal_hash_salt = '';

// Set Drupal not to check for HTTP connectivity.
$conf['https'] = TRUE;
$conf['drupal_http_request_fails'] = FALSE;

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';


// memcache settings
//if (isset($conf['memcache_servers'])) {
 // $conf['cache_backends'][] = './sites/all/modules/contrib/memcache/memcache.inc';
  //$conf['cache_default_class'] = 'MemCacheDrupal';
  //$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
//}

drupal_fast_404();
/**
* Fast 404 settings:
*/
// This path may need to be changed if the fast 404 module is in a different location.
include_once('./sites/all/modules/contrib/fast_404/fast_404.inc');

# Disallowed extensions. Any extension in here will not be served by Drupal and
# will get a fast 404.
$conf['fast_404_exts'] = '/^(?!robots).*\.(txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';

# Array of whitelisted URL fragment strings that conflict with fast_404.
$conf['fast_404_string_whitelisting'] = array('cdn/farfuture', '/advagg_');

# Default fast 404 error message.
$conf['fast_404_html'] = '<html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

# Call the extension checking now. This will skip any logging of 404s.
fast_404_ext_check();

// Include automatic Platform.sh settings.
if (file_exists(__DIR__ . '/settings.platformsh.php')) {
  require_once(__DIR__ . '/settings.platformsh.php');
}

// Include local settings. These come last so that they can override anything.
$on_platformsh = !empty($_ENV['PLATFORM_PROJECT']);
if (file_exists(__DIR__ . '/settings.local.php') && !$on_platformsh) {
  require_once(__DIR__ . '/settings.local.php');
}

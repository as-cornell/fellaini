<?php
/**
 * @file
 * Platform.sh example settings.php file for Drupal 8.
 */

// Default Drupal 8 settings.
//
// These are already explained with detailed comments in Drupal's
// default.settings.php file.
//
// See https://api.drupal.org/api/drupal/sites!default!default.settings.php/8
$databases = [];
$config_directories = [];
$settings['update_free_access'] = false;
//$settings['file_temp_path'] = '/app/tmp/departments';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
    'node_modules',
    'bower_components',
];
$settings['hash_salt'] = 'eY4Nown9w_UoQAC08vp60Qdzfs0bZDufkvz47GOWBP4bb3td2-OzycKEkIhs-RdSg6jk1WqRtA';
// Set up a config sync directory.
//
// This is defined inside the read-only "config" directory, deployed via Git.
$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/departments';

// Automatic Platform.sh settings.
if (file_exists($app_root . '/' . $site_path . '/../settings.platformsh.php')) {
    $platformsh_subsite_id = 'departments';
    include $app_root . '/' . $site_path . '/../settings.platformsh.php';
}

// Local settings. These come last so that they can override anything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
    include $app_root . '/' . $site_path . '/settings.local.php';
}



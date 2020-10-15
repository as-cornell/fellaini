<?php
/**
 * @file
 * Platform.sh example settings.php file for Drupal 8.
 */
$settings['hash_salt'] = '0U6ZN9QW4RJvlkDr8ZrWPv7hRbIglJLdAlgzymDJ_gEx181D-SDjdx8Dj9M8ZqS1Sx8tn0oHjw';
$databases = [];
$config_directories = [];
$settings['update_free_access'] = false;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
    'node_modules',
    'bower_components',
];
$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/people';

// Automatic Platform.sh settings.
if (file_exists($app_root . '/' . $site_path . '/../settings.platformsh.php')) {
    $platformsh_subsite_id = 'people';
    include $app_root . '/' . $site_path . '/../settings.platformsh.php';
}
// Local settings. These come last so that they can override anything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
    include $app_root . '/' . $site_path . '/settings.local.php';
}




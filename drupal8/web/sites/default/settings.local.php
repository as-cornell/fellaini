<?php
$config_directories = [];
$settings['update_free_access'] = false;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
// added by rtm9
$config['system.performance']['css']['preprocess'] = false;
$config['system.performance']['js']['preprocess'] = false;
$settings['cache']['bins']['page'] = 'cache.backend.null';

$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'fellaini',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
// trusted host settings for local
$settings['trusted_host_patterns'] = array(
    '^fellaini\.local$',
);

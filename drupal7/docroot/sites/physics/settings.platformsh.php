<?php
// Configure relationships.
if (isset($_ENV['PLATFORM_RELATIONSHIPS'])) {
  $relationships = json_decode(base64_decode($_ENV['PLATFORM_RELATIONSHIPS']), TRUE);
  if (empty($databases['default']) && !empty($relationships)) {
    foreach ($relationships as $key => $relationship) {
      $drupal_key = ($key === 'drupal7') ? 'default' : $key;
      foreach ($relationship as $instance) {
        if (empty($instance['scheme']) || ($instance['scheme'] !== 'mysql' && $instance['scheme'] !== 'pgsql')) {
          continue;
        }
        $database = [
          'driver' => $instance['scheme'],
          'database' => $instance['path'],
          'username' => $instance['username'],
          'password' => $instance['password'],
          'host' => $instance['host'],
          'port' => $instance['port'],
          'prefix' => 'physics_',
        ];
        if (!empty($instance['query']['compression'])) {
          $database['pdo'][PDO::MYSQL_ATTR_COMPRESS] = TRUE;
        }
        if (!empty($instance['query']['is_master'])) {
          $databases[$drupal_key]['default'] = $database;
        }
        else {
          $databases[$drupal_key]['slave'][] = $database;
        }
      }
    }
  }
}

// Configure private and temporary file paths.
if (isset($_ENV['PLATFORM_APP_DIR'])) {
  if (!isset($conf['file_private_path'])) {
    $conf['file_private_path'] = $_ENV['PLATFORM_APP_DIR'] . '/private';
  }
  if (!isset($conf['file_temporary_path'])) {
    $conf['file_temporary_path'] = $_ENV['PLATFORM_APP_DIR'] . '/tmp';
  }
}

// Import variables prefixed with 'drupal:' into $conf.
if (isset($_ENV['PLATFORM_VARIABLES'])) {
  $variables = json_decode(base64_decode($_ENV['PLATFORM_VARIABLES']), TRUE);

  $prefix_len = strlen('drupal:');
  $drupal_globals = array('cookie_domain', 'installed_profile', 'drupal_hash_salt', 'base_url');
  foreach ($variables as $name => $value) {
    if (substr($name, 0, $prefix_len) == 'drupal:') {
      $name = substr($name, $prefix_len);
      if (in_array($name, $drupal_globals)) {
        $GLOBALS[$name] = $value;
      }
      else {
        $conf[$name] = $value;
      }
    }
  }
}

// Set a default Drupal hash salt, based on a project-specific entropy value.
if (isset($_ENV['PLATFORM_PROJECT_ENTROPY']) && empty($drupal_hash_salt)) {
  $drupal_hash_salt = $_ENV['PLATFORM_PROJECT_ENTROPY'];
}

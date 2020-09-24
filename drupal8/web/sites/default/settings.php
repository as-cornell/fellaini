<?php
$databases = [];
$config_directories = [];
$settings['hash_salt'] = 'eY4Nown9w_UoQAC08vp60Qdzfs0bZDufkvz47GOWBP4bb3td2-OzycKEkIhs-RdSg6jk1WqRtA';
$settings['update_free_access'] = false;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
    'node_modules'
];
$config_directories[CONFIG_SYNC_DIRECTORY] = '../config/sync';
$settings["file_temp_path"] = "/app/tmp/"
// Automatic Platform.sh settings.
if (file_exists($app_root . '/' . $site_path . '/../settings.platformsh.php')) {
    $platformsh_subsite_id = 'first';
    include $app_root . '/' . $site_path . '/../settings.platformsh.php';
}
// Local settings. These come last so that they can override anything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
    include $app_root . '/' . $site_path . '/settings.local.php';
}

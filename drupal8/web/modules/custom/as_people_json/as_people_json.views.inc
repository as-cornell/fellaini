<?php

/**
 * Implements hook_views_data().
 */
function as_people_json_views_data() {
  $data = [];
  // Base data.
  $data['people_data']['table']['group'] = t('People Data');
  $data['people_data']['table']['base'] = [
    'title' => t('People Data'),
    'help' => t('People data provided by people.as.cornell.edu jsonapi.'),
    'query_id' => 'people_json',
  ];
  // Fields.
  $data['people_data']['display_name'] = [
    'title' => t('Display name'),
    'help' => t('Person display name.'),
    'field' => [
      'id' => 'standard',
    ],
  ];
  $data['people_data']['netid'] = [
    'title' => t('NetID'),
    'help' => t('Person NetID.'),
    'field' => [
      'id' => 'standard',
    ],
    'filter' => [
      'id' => 'people_netid',
    ],
  ];
  $data['people_data']['path_token'] = [
    'title' => t('Path Token'),
    'help' => t('Path to full page.'),
    'field' => [
      'id' => 'standard',
    ],
  ];
  $data['people_data']['image'] = [
    'title' => t('People Image'),
    'help' => t('Reson record image.'),
    'field' => [
    'id' => 'people_image',
    ],
  ];



  return $data;
}

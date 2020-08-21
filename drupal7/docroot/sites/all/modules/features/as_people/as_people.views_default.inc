<?php
/**
 * @file
 * as_people.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function as_people_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'people';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'People';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'People';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'full';
  $handler->display->display_options['row_options']['links'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'people';

  /* Display: Sidebar Block Filtered */
  $handler = $view->new_display('block', 'Sidebar Block Filtered', 'block_flt');
  $handler->display->display_options['display_description'] = 'Contextual filer on NetID';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Person NetID (field_person_netid) */
  $handler->display->display_options['arguments']['field_person_netid_value']['id'] = 'field_person_netid_value';
  $handler->display->display_options['arguments']['field_person_netid_value']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['arguments']['field_person_netid_value']['field'] = 'field_person_netid_value';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_argument_options']['index'] = '0';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_person_netid_value']['limit'] = '0';

  /* Display: XML export */
  $handler = $view->new_display('views_data_export', 'XML export', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_first_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_first_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Middle Name */
  $handler->display->display_options['fields']['field_person_middle_name']['id'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['table'] = 'field_data_field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['field'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['label'] = 'MiddleName';
  $handler->display->display_options['fields']['field_person_middle_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_middle_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_last_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_last_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person title */
  $handler->display->display_options['fields']['field_person_title']['id'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['table'] = 'field_data_field_person_title';
  $handler->display->display_options['fields']['field_person_title']['field'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['label'] = 'PersonTitle';
  $handler->display->display_options['fields']['field_person_title']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_title']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_title']['field_api_classes'] = TRUE;
  /* Field: Content: Primary Department */
  $handler->display->display_options['fields']['field_primary_department_list']['id'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['field'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['label'] = 'PrimaryDepartment';
  $handler->display->display_options['fields']['field_primary_department_list']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_primary_department_list']['element_type'] = '0';
  $handler->display->display_options['fields']['field_primary_department_list']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_primary_department_list']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list']['type'] = 'list_key';
  $handler->display->display_options['fields']['field_primary_department_list']['field_api_classes'] = TRUE;
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_email']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_email']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_email']['type'] = 'email_plain';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = 'Link';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'NetID';
  $handler->display->display_options['fields']['field_person_netid']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['field_api_classes'] = TRUE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status_1']['id'] = 'status_1';
  $handler->display->display_options['filters']['status_1']['table'] = 'node';
  $handler->display->display_options['filters']['status_1']['field'] = 'status';
  $handler->display->display_options['filters']['status_1']['value'] = '1';
  $handler->display->display_options['path'] = 'people.xml';

  /* Display: Sidebar Department Filtered */
  $handler = $view->new_display('block', 'Sidebar Department Filtered', 'block_dept_flt');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Related Department';
  $handler->display->display_options['display_description'] = 'Contextual filter on Dept Prefix';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Department Prefix (field_department_prefix) */
  $handler->display->display_options['arguments']['field_department_prefix_value']['id'] = 'field_department_prefix_value';
  $handler->display->display_options['arguments']['field_department_prefix_value']['table'] = 'field_data_field_department_prefix';
  $handler->display->display_options['arguments']['field_department_prefix_value']['field'] = 'field_department_prefix_value';
  $handler->display->display_options['arguments']['field_department_prefix_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_department_prefix_value']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_department_prefix_value']['default_argument_options']['index'] = '0';
  $handler->display->display_options['arguments']['field_department_prefix_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_department_prefix_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_department_prefix_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_department_prefix_value']['limit'] = '0';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'department_program' => 'department_program',
    'person' => 'person',
  );

  /* Display: Faculty Page */
  $handler = $view->new_display('page', 'Faculty Page', 'faculty_cards');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Faculty';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'card';
  $handler->display->display_options['row_options']['links'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  $handler->display->display_options['path'] = 'faculty';

  /* Display: XML by NetID */
  $handler = $view->new_display('views_data_export', 'XML by NetID', 'views_data_export_3');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'NetID';
  $handler->display->display_options['fields']['field_person_netid']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['field_api_classes'] = TRUE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_first_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_first_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Middle Name */
  $handler->display->display_options['fields']['field_person_middle_name']['id'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['table'] = 'field_data_field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['field'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['label'] = 'MiddleName';
  $handler->display->display_options['fields']['field_person_middle_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_middle_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_last_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_last_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person title */
  $handler->display->display_options['fields']['field_person_title']['id'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['table'] = 'field_data_field_person_title';
  $handler->display->display_options['fields']['field_person_title']['field'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['label'] = 'PersonTitle';
  $handler->display->display_options['fields']['field_person_title']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_title']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_title']['field_api_classes'] = TRUE;
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_email']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_email']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_email']['type'] = 'email_plain';
  /* Field: Content: Primary Department */
  $handler->display->display_options['fields']['field_primary_department_list_1']['id'] = 'field_primary_department_list_1';
  $handler->display->display_options['fields']['field_primary_department_list_1']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list_1']['field'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list_1']['label'] = 'PrimaryDepartment';
  $handler->display->display_options['fields']['field_primary_department_list_1']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list_1']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list_1']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_primary_department_list_1']['multi_type'] = 'ul';
  /* Field: Content: Affiliations */
  $handler->display->display_options['fields']['field_person_affiliation']['id'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['table'] = 'field_data_field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['field'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['label'] = 'Affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['multi_type'] = 'ul';
  /* Field: Content: Graduate Fields */
  $handler->display->display_options['fields']['field_person_graduate_fields']['id'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['table'] = 'field_data_field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['field'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['label'] = 'GraduateFields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['multi_type'] = 'ul';
  /* Field: Content: Research Focus */
  $handler->display->display_options['fields']['field_research_focus']['id'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['table'] = 'field_data_field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['field'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['label'] = 'ResearchFocus';
  $handler->display->display_options['fields']['field_research_focus']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_research_focus']['element_default_classes'] = FALSE;
  /* Field: Content: Educational Background */
  $handler->display->display_options['fields']['field_educational_background']['id'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['table'] = 'field_data_field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['field'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['label'] = 'EducationalBackground';
  $handler->display->display_options['fields']['field_educational_background']['element_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_default_classes'] = FALSE;
  /* Field: Field: Links */
  $handler->display->display_options['fields']['field_links']['id'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_links']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_links']['multi_type'] = 'ul';
  /* Field: Content: Related Articles */
  $handler->display->display_options['fields']['field_related_articles']['id'] = 'field_related_articles';
  $handler->display->display_options['fields']['field_related_articles']['table'] = 'field_data_field_related_articles';
  $handler->display->display_options['fields']['field_related_articles']['field'] = 'field_related_articles';
  $handler->display->display_options['fields']['field_related_articles']['label'] = 'RelatedArticles';
  $handler->display->display_options['fields']['field_related_articles']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_related_articles']['alter']['path'] = 'as.cornell.edu/node/[field_related_articles-target_id]';
  $handler->display->display_options['fields']['field_related_articles']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['field_related_articles']['alter']['external'] = TRUE;
  $handler->display->display_options['fields']['field_related_articles']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_related_articles']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_related_articles']['settings'] = array(
    'link' => 0,
  );
  $handler->display->display_options['fields']['field_related_articles']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_related_articles']['multi_type'] = 'ul';
  /* Field: Content: Keywords */
  $handler->display->display_options['fields']['field_keywords']['id'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['table'] = 'field_data_field_keywords';
  $handler->display->display_options['fields']['field_keywords']['field'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['element_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_default_classes'] = FALSE;
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = 'Description';
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  /* Field: Content: Publications */
  $handler->display->display_options['fields']['field_person_publications']['id'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['table'] = 'field_data_field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['field'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_default_classes'] = FALSE;
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = 'Link';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Field: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['settings'] = array(
    'image_style' => '',
    'image_link' => '',
  );
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Person NetID (field_person_netid) */
  $handler->display->display_options['arguments']['field_person_netid_value']['id'] = 'field_person_netid_value';
  $handler->display->display_options['arguments']['field_person_netid_value']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['arguments']['field_person_netid_value']['field'] = 'field_person_netid_value';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_person_netid_value']['default_argument_options']['index'] = '0';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_person_netid_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_person_netid_value']['validate']['fail'] = 'empty';
  $handler->display->display_options['arguments']['field_person_netid_value']['limit'] = '0';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['path'] = 'peoplenetid.xml';

  /* Display: nid per department */
  $handler = $view->new_display('page', 'nid per department', 'page_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'nid per department';
  $handler->display->display_options['display_description'] = 'nid per department';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['style_options']['default'] = '-1';
  $handler->display->display_options['style_options']['info'] = array(
    'title' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  /* Field: Feeds item: Owner feed nid */
  $handler->display->display_options['fields']['feed_nid']['id'] = 'feed_nid';
  $handler->display->display_options['fields']['feed_nid']['table'] = 'feeds_item';
  $handler->display->display_options['fields']['feed_nid']['field'] = 'feed_nid';
  $handler->display->display_options['fields']['feed_nid']['separator'] = '';
  /* Field: Feeds source: Source */
  $handler->display->display_options['fields']['config']['id'] = 'config';
  $handler->display->display_options['fields']['config']['table'] = 'feeds_source';
  $handler->display->display_options['fields']['config']['field'] = 'config';
  /* Field: Content: Published */
  $handler->display->display_options['fields']['status']['id'] = 'status';
  $handler->display->display_options['fields']['status']['table'] = 'node';
  $handler->display->display_options['fields']['status']['field'] = 'status';
  $handler->display->display_options['fields']['status']['not'] = 0;
  /* Field: Feeds source: Source */
  $handler->display->display_options['fields']['config_1']['id'] = 'config_1';
  $handler->display->display_options['fields']['config_1']['table'] = 'feeds_source';
  $handler->display->display_options['fields']['config_1']['field'] = 'config';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  /* Sort criterion: Content: Published */
  $handler->display->display_options['sorts']['status']['id'] = 'status';
  $handler->display->display_options['sorts']['status']['table'] = 'node';
  $handler->display->display_options['sorts']['status']['field'] = 'status';
  $handler->display->display_options['sorts']['status']['order'] = 'DESC';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );
  /* Filter criterion: Content: Primary Department (field_primary_department_list) */
  $handler->display->display_options['filters']['field_primary_department_list_value']['id'] = 'field_primary_department_list_value';
  $handler->display->display_options['filters']['field_primary_department_list_value']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['filters']['field_primary_department_list_value']['field'] = 'field_primary_department_list_value';
  $handler->display->display_options['filters']['field_primary_department_list_value']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_primary_department_list_value']['expose']['operator_id'] = 'field_primary_department_list_value_op';
  $handler->display->display_options['filters']['field_primary_department_list_value']['expose']['label'] = 'Primary Department (field_primary_department_list)';
  $handler->display->display_options['filters']['field_primary_department_list_value']['expose']['operator'] = 'field_primary_department_list_value_op';
  $handler->display->display_options['filters']['field_primary_department_list_value']['expose']['identifier'] = 'field_primary_department_list_value';
  $handler->display->display_options['filters']['field_primary_department_list_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    11 => 0,
    16 => 0,
    21 => 0,
  );
  $handler->display->display_options['path'] = 'nid-per-dept';

  /* Display: XML ctx filt by dept exp */
  $handler = $view->new_display('views_data_export', 'XML ctx filt by dept exp', 'views_data_export_2');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_first_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_first_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Middle Name */
  $handler->display->display_options['fields']['field_person_middle_name']['id'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['table'] = 'field_data_field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['field'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['label'] = 'MiddleName';
  $handler->display->display_options['fields']['field_person_middle_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_middle_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_last_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_last_name']['field_api_classes'] = TRUE;
  /* Field: Content: Academic Role */
  $handler->display->display_options['fields']['field_academic_role']['id'] = 'field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['table'] = 'field_data_field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['field'] = 'field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['label'] = 'AcademicRole';
  $handler->display->display_options['fields']['field_academic_role']['element_type'] = '0';
  $handler->display->display_options['fields']['field_academic_role']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_academic_role']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_academic_role']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_academic_role']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_academic_role']['delta_offset'] = '0';
  /* Field: Content: Person title */
  $handler->display->display_options['fields']['field_person_title']['id'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['table'] = 'field_data_field_person_title';
  $handler->display->display_options['fields']['field_person_title']['field'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['label'] = 'PersonTitle';
  $handler->display->display_options['fields']['field_person_title']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_title']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_title']['field_api_classes'] = TRUE;
  /* Field: Content: Primary Department */
  $handler->display->display_options['fields']['field_primary_department_list']['id'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['field'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list']['label'] = 'PrimaryDepartment';
  $handler->display->display_options['fields']['field_primary_department_list']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_primary_department_list']['element_type'] = '0';
  $handler->display->display_options['fields']['field_primary_department_list']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_primary_department_list']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list']['type'] = 'list_key';
  $handler->display->display_options['fields']['field_primary_department_list']['delta_offset'] = '0';
  /* Field: Content: Primary Department */
  $handler->display->display_options['fields']['field_primary_department_list_1']['id'] = 'field_primary_department_list_1';
  $handler->display->display_options['fields']['field_primary_department_list_1']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list_1']['field'] = 'field_primary_department_list';
  $handler->display->display_options['fields']['field_primary_department_list_1']['label'] = 'DepartmentsPrograms';
  $handler->display->display_options['fields']['field_primary_department_list_1']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_primary_department_list_1']['delta_offset'] = '0';
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_email']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_email']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_email']['type'] = 'email_plain';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = 'Link';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'NetID';
  $handler->display->display_options['fields']['field_person_netid']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['field_api_classes'] = TRUE;
  /* Field: Field: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['element_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_image']['empty'] = 'http://as.cornell.edu/sites/as/files/CU-Insignia-Black.png';
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_image']['settings'] = array(
    'url_type' => '0',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Affiliations */
  $handler->display->display_options['fields']['field_person_affiliation']['id'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['table'] = 'field_data_field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['field'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['label'] = 'Affliliation';
  $handler->display->display_options['fields']['field_person_affiliation']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_affiliation']['delta_offset'] = '0';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = 'Description';
  $handler->display->display_options['fields']['body']['element_type'] = '0';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  /* Field: Content: Educational Background */
  $handler->display->display_options['fields']['field_educational_background']['id'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['table'] = 'field_data_field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['field'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['label'] = 'EducationalBackground';
  $handler->display->display_options['fields']['field_educational_background']['element_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_educational_background']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_educational_background']['field_api_classes'] = TRUE;
  /* Field: Content: Graduate Fields */
  $handler->display->display_options['fields']['field_person_graduate_fields']['id'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['table'] = 'field_data_field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['field'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['label'] = 'GraduateFields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_graduate_fields']['delta_offset'] = '0';
  /* Field: Content: Keywords */
  $handler->display->display_options['fields']['field_keywords']['id'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['table'] = 'field_data_field_keywords';
  $handler->display->display_options['fields']['field_keywords']['field'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['element_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_keywords']['field_api_classes'] = TRUE;
  /* Field: Content: Publications */
  $handler->display->display_options['fields']['field_person_publications']['id'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['table'] = 'field_data_field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['field'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_publications']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_default_classes'] = FALSE;
  /* Field: Content: Research Focus */
  $handler->display->display_options['fields']['field_research_focus']['id'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['table'] = 'field_data_field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['field'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['label'] = 'ResearchFocus';
  $handler->display->display_options['fields']['field_research_focus']['element_type'] = '0';
  $handler->display->display_options['fields']['field_research_focus']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_research_focus']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_research_focus']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_research_focus']['field_api_classes'] = TRUE;
  /* Field: Field: Links */
  $handler->display->display_options['fields']['field_links']['id'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['label'] = 'LinkURL';
  $handler->display->display_options['fields']['field_links']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links']['type'] = 'link_absolute';
  $handler->display->display_options['fields']['field_links']['delta_offset'] = '0';
  /* Field: Field: Links */
  $handler->display->display_options['fields']['field_links_1']['id'] = 'field_links_1';
  $handler->display->display_options['fields']['field_links_1']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links_1']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links_1']['label'] = 'LinkTitle';
  $handler->display->display_options['fields']['field_links_1']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links_1']['type'] = 'link_title_plain';
  $handler->display->display_options['fields']['field_links_1']['delta_offset'] = '0';
  /* Field: Content: Primary Department */
  $handler->display->display_options['fields']['field_primary_department']['id'] = 'field_primary_department';
  $handler->display->display_options['fields']['field_primary_department']['table'] = 'field_data_field_primary_department';
  $handler->display->display_options['fields']['field_primary_department']['field'] = 'field_primary_department';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Primary Department (field_primary_department_list) */
  $handler->display->display_options['arguments']['field_primary_department_list_value']['id'] = 'field_primary_department_list_value';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['table'] = 'field_data_field_primary_department_list';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['field'] = 'field_primary_department_list_value';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['default_argument_options']['index'] = '0';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_primary_department_list_value']['limit'] = '0';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['path'] = 'peopledeptexp.xml';

  /* Display: XML ctx filt by dept er */
  $handler = $view->new_display('views_data_export', 'XML ctx filt by dept er', 'views_data_export_4');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_first_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_first_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Middle Name */
  $handler->display->display_options['fields']['field_person_middle_name']['id'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['table'] = 'field_data_field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['field'] = 'field_person_middle_name';
  $handler->display->display_options['fields']['field_person_middle_name']['label'] = 'MiddleName';
  $handler->display->display_options['fields']['field_person_middle_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_middle_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_middle_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_middle_name']['field_api_classes'] = TRUE;
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_last_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_last_name']['field_api_classes'] = TRUE;
  /* Field: Content: Academic Role */
  $handler->display->display_options['fields']['field_academic_role']['id'] = 'field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['table'] = 'field_data_field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['field'] = 'field_academic_role';
  $handler->display->display_options['fields']['field_academic_role']['label'] = 'AcademicRole';
  $handler->display->display_options['fields']['field_academic_role']['element_type'] = '0';
  $handler->display->display_options['fields']['field_academic_role']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_academic_role']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_academic_role']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_academic_role']['type'] = 'taxonomy_term_reference_plain';
  $handler->display->display_options['fields']['field_academic_role']['delta_offset'] = '0';
  /* Field: Content: Person title */
  $handler->display->display_options['fields']['field_person_title']['id'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['table'] = 'field_data_field_person_title';
  $handler->display->display_options['fields']['field_person_title']['field'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['label'] = 'PersonTitle';
  $handler->display->display_options['fields']['field_person_title']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_title']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_title']['field_api_classes'] = TRUE;
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_email']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_email']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_email']['type'] = 'email_plain';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = 'Link';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'NetID';
  $handler->display->display_options['fields']['field_person_netid']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['field_api_classes'] = TRUE;
  /* Field: Field: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['element_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_image']['empty'] = 'http://as.cornell.edu/sites/as/files/CU-Insignia-Black.png';
  $handler->display->display_options['fields']['field_image']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_image']['type'] = 'image_url';
  $handler->display->display_options['fields']['field_image']['settings'] = array(
    'url_type' => '0',
    'image_style' => '',
    'image_link' => '',
  );
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = 'Description';
  $handler->display->display_options['fields']['body']['element_type'] = '0';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  /* Field: Content: Related Departments or Programs */
  $handler->display->display_options['fields']['field_related_dept_prog']['id'] = 'field_related_dept_prog';
  $handler->display->display_options['fields']['field_related_dept_prog']['table'] = 'field_data_field_related_dept_prog';
  $handler->display->display_options['fields']['field_related_dept_prog']['field'] = 'field_related_dept_prog';
  $handler->display->display_options['fields']['field_related_dept_prog']['label'] = 'DepartmentsPrograms';
  $handler->display->display_options['fields']['field_related_dept_prog']['element_type'] = '0';
  $handler->display->display_options['fields']['field_related_dept_prog']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_related_dept_prog']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_related_dept_prog']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_related_dept_prog']['settings'] = array(
    'link' => 0,
  );
  $handler->display->display_options['fields']['field_related_dept_prog']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_related_dept_prog']['separator'] = '|';
  /* Field: Content: Affiliations */
  $handler->display->display_options['fields']['field_person_affiliation']['id'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['table'] = 'field_data_field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['field'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['label'] = 'Affliliation';
  $handler->display->display_options['fields']['field_person_affiliation']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_affiliation']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['separator'] = '|';
  /* Field: Content: Graduate Fields */
  $handler->display->display_options['fields']['field_person_graduate_fields']['id'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['table'] = 'field_data_field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['field'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['label'] = 'GraduateFields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_graduate_fields']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['separator'] = '|';
  /* Field: Content: Educational Background */
  $handler->display->display_options['fields']['field_educational_background']['id'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['table'] = 'field_data_field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['field'] = 'field_educational_background';
  $handler->display->display_options['fields']['field_educational_background']['label'] = 'EducationalBackground';
  $handler->display->display_options['fields']['field_educational_background']['element_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_educational_background']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_educational_background']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_educational_background']['field_api_classes'] = TRUE;
  /* Field: Content: Keywords */
  $handler->display->display_options['fields']['field_keywords']['id'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['table'] = 'field_data_field_keywords';
  $handler->display->display_options['fields']['field_keywords']['field'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['element_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_keywords']['field_api_classes'] = TRUE;
  /* Field: Content: Publications */
  $handler->display->display_options['fields']['field_person_publications']['id'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['table'] = 'field_data_field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['field'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_publications']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_default_classes'] = FALSE;
  /* Field: Content: Research Focus */
  $handler->display->display_options['fields']['field_research_focus']['id'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['table'] = 'field_data_field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['field'] = 'field_research_focus';
  $handler->display->display_options['fields']['field_research_focus']['label'] = 'ResearchFocus';
  $handler->display->display_options['fields']['field_research_focus']['element_type'] = '0';
  $handler->display->display_options['fields']['field_research_focus']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_research_focus']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_research_focus']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_research_focus']['field_api_classes'] = TRUE;
  /* Field: Field: Links */
  $handler->display->display_options['fields']['field_links']['id'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['label'] = 'LinkURL';
  $handler->display->display_options['fields']['field_links']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links']['type'] = 'link_absolute';
  $handler->display->display_options['fields']['field_links']['delta_offset'] = '0';
  /* Field: Field: Links */
  $handler->display->display_options['fields']['field_links_1']['id'] = 'field_links_1';
  $handler->display->display_options['fields']['field_links_1']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links_1']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links_1']['label'] = 'LinkTitle';
  $handler->display->display_options['fields']['field_links_1']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links_1']['type'] = 'link_title_plain';
  $handler->display->display_options['fields']['field_links_1']['delta_offset'] = '0';
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Related Departments or Programs (field_related_dept_prog) */
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['id'] = 'field_related_dept_prog_target_id';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['table'] = 'field_data_field_related_dept_prog';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['field'] = 'field_related_dept_prog_target_id';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['default_action'] = 'default';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['default_argument_type'] = 'raw';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['default_argument_options']['index'] = '0';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_related_dept_prog_target_id']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person' => 'person',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['path'] = 'peoplereldept.xml';
  $export['people'] = $view;

  $view = new view();
  $view->name = 'person_profile';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Person Profile';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Person Profile';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'node';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person_profile' => 'person_profile',
  );

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Person Profile Listing';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['wrapper_class'] = '';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = '';
  $handler->display->display_options['fields']['field_person_last_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = '1';
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person_profile' => 'person_profile',
  );
  /* Filter criterion: Content: Profile Type (field_profile_type) */
  $handler->display->display_options['filters']['field_profile_type_value']['id'] = 'field_profile_type_value';
  $handler->display->display_options['filters']['field_profile_type_value']['table'] = 'field_data_field_profile_type';
  $handler->display->display_options['filters']['field_profile_type_value']['field'] = 'field_profile_type_value';
  $handler->display->display_options['filters']['field_profile_type_value']['value'] = array(
    'advisoryCouncil' => 'advisoryCouncil',
  );
  $handler->display->display_options['path'] = 'person-profile';

  /* Display: Block */
  $handler = $view->new_display('block', 'Block', 'block');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;

  /* Display: Cards Block */
  $handler = $view->new_display('block', 'Cards Block', 'block_4nfac');
  $handler->display->display_options['display_description'] = 'Display of 4 People Profile as cards in block for embedding in pages';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '4';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'card';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Global: Random */
  $handler->display->display_options['sorts']['random']['id'] = 'random';
  $handler->display->display_options['sorts']['random']['table'] = 'views';
  $handler->display->display_options['sorts']['random']['field'] = 'random';
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['nid']['specify_validation'] = TRUE;
  $handler->display->display_options['arguments']['nid']['validate']['fail'] = 'ignore';
  $handler->display->display_options['arguments']['nid']['not'] = TRUE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'person_profile' => 'person_profile',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Profile Type (field_profile_type) */
  $handler->display->display_options['filters']['field_profile_type_value']['id'] = 'field_profile_type_value';
  $handler->display->display_options['filters']['field_profile_type_value']['table'] = 'field_data_field_profile_type';
  $handler->display->display_options['filters']['field_profile_type_value']['field'] = 'field_profile_type_value';
  $handler->display->display_options['filters']['field_profile_type_value']['value'] = array(
    'faculty' => 'faculty',
  );
  $handler->display->display_options['filters']['field_profile_type_value']['group'] = 1;
  /* Filter criterion: Content: Post date */
  $handler->display->display_options['filters']['created']['id'] = 'created';
  $handler->display->display_options['filters']['created']['table'] = 'node';
  $handler->display->display_options['filters']['created']['field'] = 'created';
  $handler->display->display_options['filters']['created']['operator'] = '>=';
  $handler->display->display_options['filters']['created']['value']['value'] = '-3 months';
  $handler->display->display_options['filters']['created']['value']['type'] = 'offset';
  $handler->display->display_options['filters']['created']['group'] = 1;
  $export['person_profile'] = $view;

  return $export;
}

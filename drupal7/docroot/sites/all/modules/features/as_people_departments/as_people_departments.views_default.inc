<?php

/**
 * @file
 * as_people_departments.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function as_people_departments_views_default_views() {
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
  $handler->display->display_options['title'] = 'Faculty';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'card';
  $handler->display->display_options['row_options']['links'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Filter criterion: Content: Published status */
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
  $handler->display->display_options['filters']['type']['group'] = 1;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['path'] = 'faculty';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Faculty';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Faculty List */
  $handler = $view->new_display('block', 'Faculty List', 'block_1');
  $handler->display->display_options['display_description'] = 'Alpha bulleted list block';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['style_options']['class'] = 'faculty--alpha__list';
  $handler->display->display_options['style_options']['wrapper_class'] = 'faculty--alpha';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';

  /* Display: Emeritus Faculty List */
  $handler = $view->new_display('block', 'Emeritus Faculty List', 'block_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Emeritus Faculty';
  $handler->display->display_options['display_description'] = 'Alpha bulleted list block of just Emeritus Faculty';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['style_options']['class'] = 'faculty--alpha__list';
  $handler->display->display_options['style_options']['wrapper_class'] = 'faculty--alpha';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Person Last Name (field_person_last_name) */
  $handler->display->display_options['sorts']['field_person_last_name_value']['id'] = 'field_person_last_name_value';
  $handler->display->display_options['sorts']['field_person_last_name_value']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['sorts']['field_person_last_name_value']['field'] = 'field_person_last_name_value';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published status */
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
  $handler->display->display_options['filters']['type']['group'] = 1;

  /* Display: People Export */
  $handler = $view->new_display('views_data_export', 'People Export', 'views_data_export_1');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'People';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['style_options']['no_entity_encode'] = array(
    'body' => 'body',
    'field_person_education' => 'field_person_education',
    'field_person_publications' => 'field_person_publications',
    'field_person_research_focus' => 'field_person_research_focus',
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'prefName';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_first_name']['delta_offset'] = '0';
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_last_name']['delta_offset'] = '0';
  /* Field: Content: Person title */
  $handler->display->display_options['fields']['field_person_title']['id'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['table'] = 'field_data_field_person_title';
  $handler->display->display_options['fields']['field_person_title']['field'] = 'field_person_title';
  $handler->display->display_options['fields']['field_person_title']['label'] = 'PersonTitle';
  $handler->display->display_options['fields']['field_person_title']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_title']['type'] = 'text_plain';
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'netid';
  $handler->display->display_options['fields']['field_person_netid']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['delta_offset'] = '0';
  /* Field: Field: Image */
  $handler->display->display_options['fields']['field_image']['id'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['table'] = 'field_data_field_image';
  $handler->display->display_options['fields']['field_image']['field'] = 'field_image';
  $handler->display->display_options['fields']['field_image']['element_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_image']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_image']['element_default_classes'] = FALSE;
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
  /* Field: Content: Departments/Programs */
  $handler->display->display_options['fields']['field_departments_programs']['id'] = 'field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['table'] = 'field_data_field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['field'] = 'field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['label'] = 'DepartmentsPrograms';
  $handler->display->display_options['fields']['field_departments_programs']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_departments_programs']['alter']['text'] = 'English';
  $handler->display->display_options['fields']['field_departments_programs']['element_type'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_departments_programs']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['separator'] = '|';
  /* Field: Content: Graduate Fields */
  $handler->display->display_options['fields']['field_person_graduate_fields']['id'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['table'] = 'field_data_field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['field'] = 'field_person_graduate_fields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['label'] = 'GraduateFields';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_graduate_fields']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_graduate_fields']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_graduate_fields']['separator'] = '|';
  /* Field: Content: Affiliations */
  $handler->display->display_options['fields']['field_person_affiliation']['id'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['table'] = 'field_data_field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['field'] = 'field_person_affiliation';
  $handler->display->display_options['fields']['field_person_affiliation']['label'] = 'Affliliation';
  $handler->display->display_options['fields']['field_person_affiliation']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_affiliation']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_affiliation']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_person_affiliation']['separator'] = '|';
  /* Field: Content: Educational Background */
  $handler->display->display_options['fields']['field_person_education']['id'] = 'field_person_education';
  $handler->display->display_options['fields']['field_person_education']['table'] = 'field_data_field_person_education';
  $handler->display->display_options['fields']['field_person_education']['field'] = 'field_person_education';
  $handler->display->display_options['fields']['field_person_education']['label'] = 'EducationalBackground';
  $handler->display->display_options['fields']['field_person_education']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_education']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_education']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_education']['element_default_classes'] = FALSE;
  /* Field: Content: Keywords */
  $handler->display->display_options['fields']['field_keywords']['id'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['table'] = 'field_data_field_keywords';
  $handler->display->display_options['fields']['field_keywords']['field'] = 'field_keywords';
  $handler->display->display_options['fields']['field_keywords']['element_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_keywords']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_keywords']['type'] = 'text_plain';
  /* Field: Content: Publications */
  $handler->display->display_options['fields']['field_person_publications']['id'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['table'] = 'field_data_field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['field'] = 'field_person_publications';
  $handler->display->display_options['fields']['field_person_publications']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_publications']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_publications']['element_default_classes'] = FALSE;
  /* Field: Content: Research */
  $handler->display->display_options['fields']['field_person_research_focus']['id'] = 'field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['table'] = 'field_data_field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['field'] = 'field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['label'] = 'ResearchFocus';
  $handler->display->display_options['fields']['field_person_research_focus']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_research_focus']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_research_focus']['element_default_classes'] = FALSE;
  /* Field: Content: Website(s) */
  $handler->display->display_options['fields']['field_links']['id'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['label'] = 'websitesTitle';
  $handler->display->display_options['fields']['field_links']['alter']['trim_whitespace'] = TRUE;
  $handler->display->display_options['fields']['field_links']['element_type'] = '0';
  $handler->display->display_options['fields']['field_links']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_links']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_links']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_links']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links']['type'] = 'link_title_plain';
  $handler->display->display_options['fields']['field_links']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_links']['separator'] = '|';
  /* Field: Content: Website(s) */
  $handler->display->display_options['fields']['field_links_1']['id'] = 'field_links_1';
  $handler->display->display_options['fields']['field_links_1']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links_1']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links_1']['label'] = 'websitesUrl';
  $handler->display->display_options['fields']['field_links_1']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links_1']['type'] = 'link_absolute';
  $handler->display->display_options['fields']['field_links_1']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_links_1']['separator'] = '|';
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = 'nid';
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['nid']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published status */
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
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Person NetID (field_person_netid) */
  $handler->display->display_options['filters']['field_person_netid_value']['id'] = 'field_person_netid_value';
  $handler->display->display_options['filters']['field_person_netid_value']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['filters']['field_person_netid_value']['field'] = 'field_person_netid_value';
  $handler->display->display_options['filters']['field_person_netid_value']['operator'] = 'not empty';
  $handler->display->display_options['path'] = 'people.xml';
  $handler->display->display_options['sitename_title'] = 0;

  /* Display: Overviews Export */
  $handler = $view->new_display('views_data_export', 'Overviews Export', 'views_data_export_2');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'People';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['style_options']['no_entity_encode'] = array(
    'body' => 'body',
    'field_person_research_focus' => 'field_person_research_focus',
  );
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'prefName';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'netid';
  $handler->display->display_options['fields']['field_person_netid']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['delta_offset'] = '0';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  $handler->display->display_options['fields']['body']['label'] = 'Description';
  $handler->display->display_options['fields']['body']['element_type'] = '0';
  $handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['body']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['body']['element_default_classes'] = FALSE;
  /* Field: Content: Departments/Programs */
  $handler->display->display_options['fields']['field_departments_programs']['id'] = 'field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['table'] = 'field_data_field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['field'] = 'field_departments_programs';
  $handler->display->display_options['fields']['field_departments_programs']['label'] = 'DepartmentsPrograms';
  $handler->display->display_options['fields']['field_departments_programs']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_departments_programs']['alter']['text'] = 'English';
  $handler->display->display_options['fields']['field_departments_programs']['element_type'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['hide_alter_empty'] = FALSE;
  $handler->display->display_options['fields']['field_departments_programs']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_departments_programs']['delta_offset'] = '0';
  $handler->display->display_options['fields']['field_departments_programs']['separator'] = '|';
  /* Field: Content: Research */
  $handler->display->display_options['fields']['field_person_research_focus']['id'] = 'field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['table'] = 'field_data_field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['field'] = 'field_person_research_focus';
  $handler->display->display_options['fields']['field_person_research_focus']['label'] = 'ResearchFocus';
  $handler->display->display_options['fields']['field_person_research_focus']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_research_focus']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_research_focus']['element_default_classes'] = FALSE;
  /* Field: Content: Nid */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['label'] = 'nid';
  $handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['nid']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published status */
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
  $handler->display->display_options['filters']['type']['group'] = 1;
  /* Filter criterion: Content: Person NetID (field_person_netid) */
  $handler->display->display_options['filters']['field_person_netid_value']['id'] = 'field_person_netid_value';
  $handler->display->display_options['filters']['field_person_netid_value']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['filters']['field_person_netid_value']['field'] = 'field_person_netid_value';
  $handler->display->display_options['filters']['field_person_netid_value']['operator'] = 'not empty';
  $handler->display->display_options['path'] = 'peopleoverviews.xml';
  $handler->display->display_options['sitename_title'] = 0;
  $export['people'] = $view;

  return $export;
}

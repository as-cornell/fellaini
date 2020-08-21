<?php

/**
 * @file
 * as_courses.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function as_courses_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'courses';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Courses';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Courses';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['links'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['label'] = 'No Courses Found';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'Alas, no matching courses have been found.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Sort criterion: Content: Course Number (field_course_number) */
  $handler->display->display_options['sorts']['field_course_number_value']['id'] = 'field_course_number_value';
  $handler->display->display_options['sorts']['field_course_number_value']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['sorts']['field_course_number_value']['field'] = 'field_course_number_value';
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
    'course' => 'course',
  );
  /* Filter criterion: Content: Department Prefix (field_department_prefix:format) */
  $handler->display->display_options['filters']['field_department_prefix_format']['id'] = 'field_department_prefix_format';
  $handler->display->display_options['filters']['field_department_prefix_format']['table'] = 'field_data_field_department_prefix';
  $handler->display->display_options['filters']['field_department_prefix_format']['field'] = 'field_department_prefix_format';
  $handler->display->display_options['filters']['field_department_prefix_format']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_department_prefix_format']['expose']['operator_id'] = 'field_department_prefix_format_op';
  $handler->display->display_options['filters']['field_department_prefix_format']['expose']['label'] = 'Department Prefix (field_department_prefix:format)';
  $handler->display->display_options['filters']['field_department_prefix_format']['expose']['operator'] = 'field_department_prefix_format_op';
  $handler->display->display_options['filters']['field_department_prefix_format']['expose']['identifier'] = 'field_department_prefix_format';
  /* Filter criterion: Content: Semester (field_semester) */
  $handler->display->display_options['filters']['field_semester_value']['id'] = 'field_semester_value';
  $handler->display->display_options['filters']['field_semester_value']['table'] = 'field_data_field_semester';
  $handler->display->display_options['filters']['field_semester_value']['field'] = 'field_semester_value';
  $handler->display->display_options['filters']['field_semester_value']['value'] = array(
    'SP19' => 'SP19',
    'FA19' => 'FA19',
  );

  /* Display: Courses Index */
  $handler = $view->new_display('page', 'Courses Index', 'page');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['links'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['path'] = 'courses-index';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Courses';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Courses Sidebar */
  $handler = $view->new_display('block', 'Courses Sidebar', 'block');
  $handler->display->display_options['display_description'] = 'Sidebar element to appear in Major Minor Grad listings';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  /* Field: Content: Department Prefix */
  $handler->display->display_options['fields']['field_department_prefix']['id'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['table'] = 'field_data_field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['field'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['label'] = '';
  $handler->display->display_options['fields']['field_department_prefix']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_department_prefix']['alter']['path'] = '[path]';
  $handler->display->display_options['fields']['field_department_prefix']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['field_department_prefix']['element_type'] = '0';
  $handler->display->display_options['fields']['field_department_prefix']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_department_prefix']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_department_prefix']['field_api_classes'] = TRUE;
  /* Field: Content: Course Number */
  $handler->display->display_options['fields']['field_course_number']['id'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['fields']['field_course_number']['field'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['label'] = '';
  $handler->display->display_options['fields']['field_course_number']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_course_number']['alter']['path'] = '[path]';
  $handler->display->display_options['fields']['field_course_number']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['field_course_number']['element_type'] = '0';
  $handler->display->display_options['fields']['field_course_number']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_course_number']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['type'] = 'number_unformatted';
  $handler->display->display_options['fields']['field_course_number']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  $handler->display->display_options['fields']['field_course_number']['field_api_classes'] = TRUE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Global: Random */
  $handler->display->display_options['sorts']['random']['id'] = 'random';
  $handler->display->display_options['sorts']['random']['table'] = 'views';
  $handler->display->display_options['sorts']['random']['field'] = 'random';
  $handler->display->display_options['block_description'] = 'Courses Sidebar';

  /* Display: Sidebar Filtered by Dept */
  $handler = $view->new_display('block', 'Sidebar Filtered by Dept', 'block_flt');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Courses';
  $handler->display->display_options['display_description'] = 'Filtered sidebar element to display instructor in Major Minor Grad listings';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '5';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = '';
  $handler->display->display_options['fields']['path']['exclude'] = TRUE;
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = '';
  $handler->display->display_options['fields']['field_person_netid']['element_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  $handler->display->display_options['fields']['field_person_netid']['field_api_classes'] = TRUE;
  /* Field: Content: Email */
  $handler->display->display_options['fields']['field_email']['id'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['table'] = 'field_data_field_email';
  $handler->display->display_options['fields']['field_email']['field'] = 'field_email';
  $handler->display->display_options['fields']['field_email']['label'] = '';
  $handler->display->display_options['fields']['field_email']['element_type'] = '0';
  $handler->display->display_options['fields']['field_email']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_email']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_email']['element_default_classes'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Global: Random */
  $handler->display->display_options['sorts']['random']['id'] = 'random';
  $handler->display->display_options['sorts']['random']['table'] = 'views';
  $handler->display->display_options['sorts']['random']['field'] = 'random';
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
    'course' => 'course',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['block_description'] = 'Courses Sidebar';

  /* Display: Sidebar Filtered by NetID */
  $handler = $view->new_display('block', 'Sidebar Filtered by NetID', 'block_flt_netid');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = '<none>';
  $handler->display->display_options['display_description'] = 'Filtered sidebar element to display all courses by instructor in Person listings';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['row_class_special'] = FALSE;
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['default_field_elements'] = FALSE;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['defaults']['empty'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['label'] = 'No Courses Found';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'There are no current courses listed for this faculty member.';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Link */
  $handler->display->display_options['fields']['field_links']['id'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['table'] = 'field_data_field_links';
  $handler->display->display_options['fields']['field_links']['field'] = 'field_links';
  $handler->display->display_options['fields']['field_links']['label'] = '';
  $handler->display->display_options['fields']['field_links']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_links']['element_type'] = '0';
  $handler->display->display_options['fields']['field_links']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_links']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_links']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_links']['click_sort_column'] = 'url';
  $handler->display->display_options['fields']['field_links']['type'] = 'link_absolute';
  $handler->display->display_options['fields']['field_links']['delta_offset'] = '0';
  /* Field: Content: Department Prefix */
  $handler->display->display_options['fields']['field_department_prefix']['id'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['table'] = 'field_data_field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['field'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['label'] = '';
  $handler->display->display_options['fields']['field_department_prefix']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_department_prefix']['element_type'] = '0';
  $handler->display->display_options['fields']['field_department_prefix']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_department_prefix']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['type'] = 'text_plain';
  /* Field: Content: Course Number */
  $handler->display->display_options['fields']['field_course_number']['id'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['fields']['field_course_number']['field'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['label'] = '';
  $handler->display->display_options['fields']['field_course_number']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_course_number']['element_type'] = '0';
  $handler->display->display_options['fields']['field_course_number']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['element_wrapper_type'] = '0';
  $handler->display->display_options['fields']['field_course_number']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['text'] = '[field_department_prefix] [field_course_number] - [title]';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_links]';
  $handler->display->display_options['fields']['title']['alter']['absolute'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['external'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Course Number (field_course_number) */
  $handler->display->display_options['sorts']['field_course_number_value']['id'] = 'field_course_number_value';
  $handler->display->display_options['sorts']['field_course_number_value']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['sorts']['field_course_number_value']['field'] = 'field_course_number_value';
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
    'course' => 'course',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['block_description'] = 'Courses Person Sidebar';

  /* Display: XML by NetID */
  $handler = $view->new_display('views_data_export', 'XML by NetID', 'xml_netid');
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_xml';
  $handler->display->display_options['style_options']['provide_file'] = 0;
  $handler->display->display_options['style_options']['parent_sort'] = 0;
  $handler->display->display_options['style_options']['transform'] = 1;
  $handler->display->display_options['style_options']['root_node'] = 'nodes';
  $handler->display->display_options['style_options']['item_node'] = 'node';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Department Prefix */
  $handler->display->display_options['fields']['field_department_prefix']['id'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['table'] = 'field_data_field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['field'] = 'field_department_prefix';
  $handler->display->display_options['fields']['field_department_prefix']['label'] = 'DepartmentPrefix';
  $handler->display->display_options['fields']['field_department_prefix']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_department_prefix']['type'] = 'text_plain';
  /* Field: Content: Course Number */
  $handler->display->display_options['fields']['field_course_number']['id'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['fields']['field_course_number']['field'] = 'field_course_number';
  $handler->display->display_options['fields']['field_course_number']['label'] = 'CourseNumber';
  $handler->display->display_options['fields']['field_course_number']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_course_number']['type'] = 'number_unformatted';
  $handler->display->display_options['fields']['field_course_number']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Person First Name */
  $handler->display->display_options['fields']['field_person_first_name']['id'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['table'] = 'field_data_field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['field'] = 'field_person_first_name';
  $handler->display->display_options['fields']['field_person_first_name']['label'] = 'FirstName';
  $handler->display->display_options['fields']['field_person_first_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_first_name']['type'] = 'text_plain';
  /* Field: Content: Person Last Name */
  $handler->display->display_options['fields']['field_person_last_name']['id'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['table'] = 'field_data_field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['field'] = 'field_person_last_name';
  $handler->display->display_options['fields']['field_person_last_name']['label'] = 'LastName';
  $handler->display->display_options['fields']['field_person_last_name']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_last_name']['type'] = 'text_plain';
  /* Field: Content: Person NetID */
  $handler->display->display_options['fields']['field_person_netid']['id'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['table'] = 'field_data_field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['field'] = 'field_person_netid';
  $handler->display->display_options['fields']['field_person_netid']['label'] = 'NetID';
  $handler->display->display_options['fields']['field_person_netid']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['field_person_netid']['type'] = 'text_plain';
  /* Field: Content: Path */
  $handler->display->display_options['fields']['path']['id'] = 'path';
  $handler->display->display_options['fields']['path']['table'] = 'node';
  $handler->display->display_options['fields']['path']['field'] = 'path';
  $handler->display->display_options['fields']['path']['label'] = 'Link';
  $handler->display->display_options['fields']['path']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['path']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['path']['absolute'] = TRUE;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Course Number (field_course_number) */
  $handler->display->display_options['sorts']['field_course_number_value']['id'] = 'field_course_number_value';
  $handler->display->display_options['sorts']['field_course_number_value']['table'] = 'field_data_field_course_number';
  $handler->display->display_options['sorts']['field_course_number_value']['field'] = 'field_course_number_value';
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
    'course' => 'course',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;
  $handler->display->display_options['path'] = 'coursesnetid.xml';
  $export['courses'] = $view;

  return $export;
}

<?php
/**
 * @file
 * CU Search admin page for setting up the Search block attributes
 */

/**
 * Admin form.
 */
function as_search_admin($form, &$form_state) {

  $form['as_search_google_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Google CSE Key'),
    '#default_value' => variable_get('as_search_google_key', '008519597213911685754:qk0vzz3julq')
  );

  return system_settings_form($form);
}

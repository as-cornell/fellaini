<?php

function campfire_theme()
{
    return array(
        'contact_site_form' => array(
            'render element' => 'form',
            'template' => 'contact-site-form',
            'path' => drupal_get_path('theme', 'campfire') . '/templates',
        ),
    );
}
function campfire_preprocess_contact_site_form(&$vars)
{
    $vars['contact'] = drupal_render_children($vars['form']);

}

function campfire_preprocess_image(&$variables)
{
    // Remove Height and Width Inline Styles from Drupal Images
    foreach (array('width', 'height') as $key) {
        unset($variables[$key]);
    }
}

function campfire_js_alter(&$javascript)
{
    //removes Drupal's default jquery implementation from scripts
    unset($javascript['misc/jquery.js']);
    //unset($javascript['misc/jquery.once.js']);
}

function campfire_preprocess_html(&$variables)
{
    // hide header and footer scripts for newsletters
    $variables['show_scripts'] = true;
    if ($node = menu_get_object()) {
        if ($node->type == "newsletter") {
            $variables['show_scripts'] = false;
        }
    }
}

function campfire_preprocess_page(&$variables)
{
    // Get the entire main menu tree
    $main_menu_tree = menu_tree_all_data('main-menu');
    // Add the rendered output to the $main_menu_expanded variable
    $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
    //drupal_static_reset($scripts = NULL);

    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/modernizr.custom.20162.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/imagesloaded.pkgd.min.js', array('type' => 'file'));
    // drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/isotope.pkgd.min.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/flickity.pkgd.min.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/magnific-popup.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/jquery-nav.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/jquery.pin.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/jquery.flexslider-min.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/jquery.waypoints.min.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/waypoints.sticky.min.js', array('type' => 'file', 'scope' => 'footer'));
    //drupal_add_js(drupal_get_path('theme', 'campfire') . '/js/as-scripts-as-as.js', array('type' => 'file', 'scope' => 'footer'));

    // hide header and footer for newsletters
    $variables['show_headerfooter'] = true;
    if (!empty($variables['node']->type)) {
        if ($variables['node']->type == 'newsletter') {
            $variables['show_headerfooter'] = false;
        }
    }
}

function campfire_preprocess_node(&$variables)
{
    //provide tempate suggestions for teaser view mode
    if ($variables['view_mode'] == 'teaser') {
        $variables['theme_hook_suggestions'][] = 'node--' . $variables['node']->type . '__teaser';
        $variables['theme_hook_suggestions'][] = 'node--' . $variables['node']->nid . '__teaser';
    }
    if ($variables['view_mode'] == 'tabloid') {
        $variables['theme_hook_suggestions'][] = 'node--' . $variables['node']->type . '__tabloid';
    }
    if ($variables['view_mode'] == 'card') {
        $variables['theme_hook_suggestions'][] = 'node--' . $variables['node']->type . '__card';
    }

}

function campfire_breadcrumb($variables)
{
    $breadcrumb = $variables['breadcrumb'];

    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

        $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . ' » ' . drupal_get_title() . '</div>';
        return $output;
    }
}

function campfire_menu_tree__main_menu($variables)
{
    //look for class in main menu link and write appropriate wrapper for tree
    if (preg_match("/\bas-nav__link--primary\b/i", $variables['tree'])) {
        return '<ul class="menu--primary">' . $variables['tree'] . '</ul>';
    }
    if (preg_match("/\bas-nav__link--secondary\b/i", $variables['tree'])) {
        return "\n          <ul class='menu--secondary' aria-hidden='true' >\n          " . $variables['tree'] . "\n            </ul>\n";
    }
    //if (preg_match("/\bas-nav__link--tertiary\b/i", $variables['tree'])){
    //return "\n              <ul class='menu--tertiary'>\n          " . $variables['tree'] . "\n                </ul>\n";
    //}
}

function campfire_menu_link__main_menu(array $variables)
{
    $element = $variables['element'];
    $sub_menu = '';
    // adds classes to links depending on link depth
    if ($element['#original_link']['depth'] == 1) {
        $element['#localized_options']['attributes']['class'] = array('as-nav__link', 'as-nav__link--primary');
    }
    if ($element['#original_link']['depth'] == 2) {
        $element['#localized_options']['attributes']['class'] = array('as-nav__link', 'as-nav__link--secondary');
    }
    //if ($element['#original_link']['depth'] == 3) {
    //$element['#localized_options']['attributes']['class'] = array('as-nav__link', 'as-nav__link--tertiary');
    //}

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    // add some spacing to indent depending on link depth
    if ($element['#original_link']['depth'] == 1) {
        return "\n        <li>" . $output . $sub_menu . "</li>";
    }
    if ($element['#original_link']['depth'] == 2) {
        return "\n              <li>" . $output . $sub_menu . "</li>";
    }
    if ($element['#original_link']['depth'] == 3) {
        return "\n                  <li>" . $output . $sub_menu . "</li>";
    }

}

function campfire_menu_tree__menu_footer_menu($variables)
{
    //look for class in footer link and write appropriate wrapper for tree
    if (preg_match("/\bas-footer__link--primary\b/i", $variables['tree'])) {
        return '<ul class="menu--primary">' . $variables['tree'] . '</ul>';
    }
    if (preg_match("/\bas-footer__link--secondary\b/i", $variables['tree'])) {
        return "\n          <ul class='menu--secondary'>" . $variables['tree'] . "\n            </ul>\n";
    }
}

function campfire_menu_link__menu_footer_menu(array $variables)
{
    $element = $variables['element'];
    $sub_menu = '';
    // adds classes to links depending on link depth
    if ($element['#original_link']['depth'] == 1) {
        $element['#localized_options']['attributes']['class'] = array('as-nav__link', 'as-footer__link', 'as-footer__link--primary', 'as-nav__link--expandable');
    }
    if ($element['#original_link']['depth'] == 2) {
        $element['#localized_options']['attributes']['class'] = array('as-footer__link', 'as-footer__link--secondary');
    }
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    // add some spacing to indent depending on link depth
    if ($element['#original_link']['depth'] == 1) {
        return "\n        <li>" . $output . $sub_menu . "        </li>";
    }
    if ($element['#original_link']['depth'] == 2) {
        return "\n            <li>" . $output . $sub_menu . "</li>";
    }
}
/**
 * Implements hook_preprocess_HOOK().
 */
function campfire_preprocess_field(&$variables)
{

    $view_mode = $variables['element']['#view_mode'];
    $field_name = $variables['element']['#field_name'];
    $bundle = $variables['element']['#bundle'];

    $variables['theme_hook_suggestions'][] = 'field__' . $field_name . '__' . $view_mode;
    $variables['theme_hook_suggestions'][] = 'field__' . $field_name . '__' . $bundle . '__' . $view_mode;
}

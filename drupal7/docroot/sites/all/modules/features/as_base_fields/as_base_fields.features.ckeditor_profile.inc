<?php

/**
 * @file
 * as_base_fields.features.ckeditor_profile.inc
 */

/**
 * Implements hook_ckeditor_profile_defaults().
 */
function as_base_fields_ckeditor_profile_defaults() {
  $data = array(
    'CKEditor Global Profile' => array(
      'name' => 'CKEditor Global Profile',
      'settings' => array(
        'skin' => 'moono-lisa',
        'ckeditor_path' => '//cdn.ckeditor.com/4.12.0/full-all',
        'ckeditor_local_path' => '',
        'ckeditor_plugins_path' => '%m/plugins',
        'ckeditor_plugins_local_path' => '',
        'ckfinder_path' => '%m/ckfinder',
        'ckfinder_local_path' => '',
        'ckeditor_aggregate' => 'f',
        'toolbar_wizard' => 'f',
        'loadPlugins' => array(),
      ),
      'input_formats' => array(),
    ),
    'Full' => array(
      'name' => 'Full',
      'settings' => array(
        'ss' => 2,
        'toolbar' => '[
    [\'Cut\',\'Copy\',\'Paste\',\'PasteText\',\'PasteFromWord\'],
    [\'Undo\',\'Redo\',\'Find\',\'Replace\',\'-\',\'SelectAll\'],
    [\'Media\',\'Iframe\',\'HorizontalRule\', \'Table\',\'A11ychecker\'],
    \'/\',
     [\'Format\',\'Styles\',\'ShowBlocks\'],
    [\'Bold\',\'Italic\',\'-\',\'Subscript\',\'Superscript\',\'-\',\'RemoveFormat\'],
    [\'NumberedList\',\'BulletedList\',\'-\',\'Outdent\',\'Indent\',\'Blockquote\'],
    [\'JustifyLeft\',\'JustifyCenter\',\'JustifyRight\',\'JustifyBlock\'],
    [\'Link\',\'Unlink\']
]',
        'expand' => 't',
        'default' => 't',
        'show_toggle' => 't',
        'uicolor' => 'default',
        'uicolor_user' => 'default',
        'width' => '100%',
        'lang' => 'en',
        'auto_lang' => 't',
        'language_direction' => 'default',
        'allowed_content' => 'f',
        'extraAllowedContent' => 'properties;
table[class](*);
tbody[class](*);
tr[class](*);
td[class,colspan](*);
img[title,alt,src,data-cke-saved-src](wysiwyg-break,drupal-content);
video[width,height,controls,src,controlslist,data-delta,data-fid,data-media-element](*);
source[src,type,data-cke-saved-src];
audio[controls,src](*);
img[*](media-element,file-default,media-wysiwyg-align-right,media-wysiwyg-align-left,media-wysiwyg-align-center);
p[class](*);
audio[controls,src](*);
b[class](*);
p[class](default,fanc*,text-align*,Indent*);
a[href,hreflang,data-entity-type,data-entity-uuid,title,target,class,tabindex](*);
h1[class](*);
h2[class](*);
h3[class](*);
h4[class](*);
h5[class](*);
h6[class](*);
hr[class](*);
div[class,aria-labelledby,data-parent,id](*);
button[class,aria-controls,aria-expanded,data-target,data-toggle,type,id](*);
sub[class](*);
sup[class](*);
strong[class](*);
em[class](*);
cite[class](*);
footer[class](default);
blockquote[class](*);
ul[class,type](*);
ol[class,start,type](*);
span[!class](*);
span[!lang](*);
li[class](*);',
        'enter_mode' => 'p',
        'shift_enter_mode' => 'br',
        'font_format' => 'p;div;pre;address;h1;h2;h3;h4;h5;h6',
        'custom_formatting' => 'f',
        'formatting' => array(
          'custom_formatting_options' => array(
            'indent' => 'indent',
            'breakBeforeOpen' => 'breakBeforeOpen',
            'breakAfterOpen' => 'breakAfterOpen',
            'breakAfterClose' => 'breakAfterClose',
            'breakBeforeClose' => 0,
            'pre_indent' => 0,
          ),
        ),
        'css_mode' => 'theme',
        'css_path' => '',
        'css_style' => 'theme',
        'styles_path' => '',
        'filebrowser' => 'ckeditor_media',
        'filebrowser_image' => '',
        'filebrowser_flash' => '',
        'UserFilesPath' => '%b%f/',
        'UserFilesAbsolutePath' => '%d%b%f/',
        'forcePasteAsPlainText' => 'f',
        'html_entities' => 'f',
        'scayt_autoStartup' => 't',
        'theme_config_js' => 't',
        'js_conf' => '',
        'loadPlugins' => array(
          'a11ychecker' => array(
            'name' => 'a11ychecker',
            'desc' => 'Plugin file: a11ychecker',
            'path' => '%plugin_dir%a11ychecker/',
            'buttons' => array(
              'A11ychecker' => array(
                'label' => 'A11ychecker',
                'icon' => 'icons/a11ychecker.png',
              ),
            ),
            'default' => 'f',
          ),
          'balloonpanel' => array(
            'name' => 'balloonpanel',
            'desc' => 'Plugin file: balloonpanel',
            'path' => '%plugin_dir%balloonpanel/',
            'buttons' => FALSE,
            'default' => 'f',
          ),
          'drupalbreaks' => array(
            'name' => 'drupalbreaks',
            'desc' => 'Plugin for inserting Drupal teaser and page breaks.',
            'path' => '%plugin_dir%drupalbreaks/',
            'buttons' => array(
              'DrupalBreak' => array(
                'label' => 'DrupalBreak',
                'icon' => 'images/drupalbreak.png',
              ),
            ),
            'default' => 't',
          ),
          'media' => array(
            'name' => 'media',
            'desc' => 'Plugin for embedding files using Media CKEditor',
            'path' => '%base_path%sites/all/modules/contrib/media_ckeditor/js/plugins/media/',
            'buttons' => array(
              'Media' => array(
                'icon' => 'icons/media.png',
                'label' => 'Add media',
              ),
            ),
            'default' => 'f',
          ),
          'mediaBrowser' => array(
            'name' => 'mediaBrowser',
            'desc' => 'Media Browser for File Upload/Browsing',
            'path' => '/sites/all/modules/contrib/ckeditor_media/plugins/mediaBrowser/',
          ),
        ),
      ),
      'input_formats' => array(
        'full_html' => 'Full HTML',
      ),
    ),
  );
  return $data;
}

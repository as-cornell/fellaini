<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

    <?php $title = $view->get_title();?>


<div class="as-page__block">
  <div class="as-container">
    <h1 class="pageTitle pageTitle--first"><?php print t($title)?></h1>
  </div>

  <div class="as-container as-grid as-grid--one-two">
    <div>
      <?php print $header;?>
      <?php print $footer;?>
    </div>
    <div>
      <?php print $rows;?>
    </div>
  </div>
</div>
</div>

</div>

(function ($) {
// START jQuery

Drupal.views_autorefresh = Drupal.views_autorefresh || {};

Drupal.behaviors.views_autorefresh = {
  attach: function(context, settings) {
    if (drupalSettings && drupalSettings.views && drupalSettings.views.ajaxViews) {
      $.each(drupalSettings.views.ajaxViews, function(i, settings) {
        var view = settings.view_name + '-' + settings.view_display_id;
        drupalSettings[view].timer = setTimeout(function() {
          Drupal.views_autorefresh.refresh()
        }, drupalSettings[view].interval);
      });
    }
  }
}

Drupal.views_autorefresh.refresh = function() {
  location.reload();
}

// END jQuery
})(jQuery);

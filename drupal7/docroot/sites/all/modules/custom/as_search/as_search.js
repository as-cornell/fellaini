(function ($) {
  Drupal.behaviors.as_search = {
    attach: function (context, settings) {
      var cx = Drupal.settings.as_search.as_search_google_key;
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//www.google.com/cse/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    }
  };
}(jQuery));

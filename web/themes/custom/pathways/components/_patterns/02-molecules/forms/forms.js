// document is ready to go... or is it
(function ($) {
  console.log("hiya");
  $(".search-opener").on({
    click: function () {
      $("#header__searchform").toggleClass("shown");
    },
  });
})(jQuery);

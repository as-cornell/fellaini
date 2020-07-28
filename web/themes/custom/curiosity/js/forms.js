// document is ready to go
(function ($) {
  console.log("hiya");
  $(".search-opener").on({
    click: function () {
      $("#header__searchform").toggleClass("shown");
    },
  });
})(jQuery); 
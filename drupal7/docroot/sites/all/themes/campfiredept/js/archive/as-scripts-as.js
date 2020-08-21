// *** Homepage Masonry cards

// add necessary things to DOM
$(".as-cards").prepend("<div class='gutter-size'></div><div class='grid-size'></div>");
$(".bean-homepage-tiles article").addClass("as-card");
$(".field-article-2").addClass("stamp as-card--featured");

// set up Masonry Container
var $container = $('.as-cards');
// images loaded
$container.imagesLoaded( function(){
  // initialize Masonry
  $container.masonry({
    itemSelector: '.as-card',
    stamp: '.stamp',
    gutter: '.gutter-size',
    percentPosition: 'true'
  });
});

// mobile main menu
$(".as-header__link--menu").on({
  click: function(){
    $(".as-container--nav").toggleClass("as-container--nav--expanded");
    $(".as-overlay").toggleClass("as-overlay--active");
    $( this ).toggleClass("as-header__link--menu--active");
  }
});

// Stick sidebar

jQuery(document).ready(function($){
  // Sticky nav
  (function($, undefined){
    "use strict";

    var $fullPage__sidebar= $(".fullPage__sidebar"),
    width = $fullPage__sidebar.width();

    var $stickyBar = $(".fullPage__sidebar"),
    y_pos = $stickyBar.offset().top;

    $(document).scroll(function(){
      var scrollTop = $(this).scrollTop();
      if (scrollTop > y_pos - 230 ){
      $stickyBar.addClass("sidebar--fixed").width(width);
      } else if (scrollTop <= y_pos){
      $stickyBar.removeClass("sidebar--fixed").clearQueue();
      }
    });

  })(jQuery, undefined);
});


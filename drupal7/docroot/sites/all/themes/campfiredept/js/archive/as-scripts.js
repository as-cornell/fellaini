// *** Homepage Masonry cards

// add necessary things to DOM
$(".bean-homepage-tiles > .content").addClass("as-cards").prepend("<div class='gutter-size'></div><div class='grid-size'></div>");
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

// *** adding elements to main navigation

  //$(".as-nav__section").prepend("<i class='as-icon as-icon--arrow-down' data-bind=''></i>");

// navigation elements
/*
$(function(){
    // Mobile
    $('.block-menu .content').prepend('<div class="menu-trigger">Menu</div>');
    $(".as-header__link--menu").on("click", function(){
      $(".as-nav").bind("as-nav--expanded");
      $(".as-overlay").bind("as-overlay--active");
    });
});*/
$(".as-header__link--menu").on({
  click: function(){
    $(".as-container--nav").toggleClass("as-container--nav--expanded");
    $(".as-overlay").toggleClass("as-overlay--active");
    $( this ).toggleClass("as-header__link--menu--active");
  }
});

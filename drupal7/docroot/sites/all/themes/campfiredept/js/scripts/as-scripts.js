/* as-scripts.js */


// add necessary things to DOM
jQuery(document).ready(function ($) {

    $(".as-cards").prepend("<div class='gutter-size'></div><div class='grid-size'></div>");
    //$(".as-cards--campfire .as-card:eq(1)").addClass("stamp as-card--featured");

    // isotope container
    var $container = $('.as-cards');

    // tiles isotope
      $(function(){
        //images loaded
        $container.imagesLoaded(function(){
         //initi isotope
         var $grid = $('.as-cards').isotope({
            itemSelector: '.as-card',
            percentPosition: 'true',
            transitionDuration: 0,
            masonry: {
              gutter: '.gutter-size',
              columnWidth: '.grid-size'
            }
         });
       });
      });


  // show filters
  $(".viewToggle--filters").on({
    click: function(){
    $(".as-filters").toggleClass("as-filters--expanded");
    $(this).toggleClass("toggleFilters--active");
    }
  });

  // close filters
  $(".as-filters .as-icon--close").on({
    click: function(){
      $(".as-filters").removeClass("as-filters--expanded");
      $(".toggleFilters").removeClass("toggleFilters--active");
    }
  });

  $(".viewToggle--grid").on({
    click: function(){
      $(".cards").removeClass("cards--list");
      $(".cards").addClass("cards--grid");
      $(this).parent().removeClass("toggleView--list").addClass("toggleView--grid");
    }
  });

  $(".viewToggle--list").on({
    click: function(){
      $(".cards").removeClass("cards--grid");
      $(".cards").addClass("cards--list");
      $(this).parent().removeClass("toggleView--grid").addClass("toggleView--list");
    }
  });

// Mobile Main Nav
// $(".menu--secondary").before("<span class='as-icon as-icon--arrow-down'></span>");

//   $(".as-header__link--menu").on({
//     click: function(){
//       $(".as-container--nav").toggleClass("as-container--nav--expanded");
//       $("body").toggleClass("mainNav-expanded");
//       $(".as-overlay").toggleClass("as-overlay--shade");
//       $(this).toggleClass("as-header__link--menu--expanded");
//       $(".as-mainNav-icon").toggleClass("as-icon--bars").toggleClass("as-icon--close");
//     }
//   });

  // document is ready to go...
  (function ($) {

    // console.log( "Let's do this!"  );

    // close the menu--secondary
    $('.menu--secondary a').attr('tabindex', -1);
    $('.menu--secondary').addClass('close');
    $(".menu--secondary").before("<button class='menu-toggle' aria-hidden='false' aria-label='secondary menu'><svg viewBox='0 0 20 20' class='icon--arrow'> <use xlink:href='#shape-icon-down-arrow'></use > </svg ></button>");

    //
    // need to make this toggle want to control visibility with aria hiddens
    //
    $("#toggle-menu").on({
      click: function () {
        $(".as-nav").toggleClass("show");
        // $(this).parent().toggleClass("toggleFilters--active");
      }
    });
    // $("#toggle-menu").click(function (e) {
    //   $('.menu--primary').attr('aria-hidden', 'false');
    // });

    // $("#toggle-menu").click(function () {
    //   $('.menu--primary').attr('show-hide', function (index, attr) {
    //     return attr == 'show' ? null : 'show';
    //   });
    // });

    // if a menu-button is clicked...
    $('.menu-toggle').click(function (e) {

      var _this = $(this);
      console.log(this);

      // if the menu--secondary is hidden....
      if (!_this.next().hasClass('display')) {

        // reset menu--secondary + button arrow to start
        $('.menu--secondary').removeClass('display');
        $('.menu--secondary a').attr('tabindex', -1);
        $('.fa').addClass('fa-angle-down');
        $('.fa').removeClass('fa-angle-up');
        $('.menu-toggle').attr('aria-label', 'secondary menu is closed');

        // open menu
        _this.next().addClass('display');
        // _this.prev().removeAttr('aria-expanded');
        _this.prev().attr('aria-expanded', 'true');
        _this.next().find('a').removeAttr('tabindex', -1);
        _this.children().removeClass('fa-angle-down');
        _this.children().addClass('fa-angle-up');
        _this.attr('aria-label', 'secondary menu is open');

        // if the menu is open then...   
      } else {

        // close the menu...
        _this.next().removeClass('display');
        _this.prev().attr('aria-expanded', 'false');
        _this.next().find('a').attr('tabindex', -1);
        _this.children().removeClass('fa-angle-up');
        _this.children().addClass('fa-angle-down');
        _this.attr('aria-label', 'secondary menu is closed');

      }

    });

  })(jQuery);







// Mobile Footer Nav
  // $(".as-footer__link--primary").after("<i class='as-icon as-icon--arrow-down'></i>");


  $(".menu--primary span").on({
      click: function(){
          //$(".expanded").not(this).removeClass("expanded");
          $(this).parent().toggleClass("expanded");
          $(this).toggleClass("as-icon--arrow-up");
      }
  });

// .as-search
  $(".as-search__toggle").on({
    click: function(){
      $(".as-overlay").removeClass("as-overlay--shade");
      $(".as-container--nav").removeClass("as-container--nav--expanded");
      $('.as-info-bar').toggleClass('as-info-bar--expanded');
      $('.as-overlay').toggleClass('as-overlay--tint');
      $('.as-search-bar__input').focus();
      ga('send', 'event', 'searchBar', 'expand', 'deptHomepage');
    }
  });

// .as-info-for
  $(".as-info-for__toggle").on({
    click: function(){
      $('.as-info-bar').toggleClass('as-info-bar--expanded');
      ga('send', 'event', 'infoFor', 'expand', 'deptHomepage');
    }
  });

  // FAQ Toggle
  $(".faq .toggle").on({
    click: function() {
      $(this).parent().toggleClass("expanded");
    }
  });

// General as-toggle +-
  $(".as-toggle__trigger").on({
    click: function(){
      $(this).parent().toggleClass("as-toggle--expanded");
    }
  });

  $(".course-toggle").on({
    click: function () {
      $(this).parent().toggleClass("course-expanded");
    }
  });


//magnific
  $('.magnific').magnificPopup({
    type:'inline',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    midClick: true}
);




//pin things

  // $(".sidebarNav").pin({
  //   containerSelector: ".as-page__container"
  // });
  // $(".as-search-bar--pin").pin();


// Sticky Mobile Nav
  // $(".sidebarNav__trigger").append("<span class='as-icon as-icon--arrow-down'></span>");
  // $(".sidebarNav__trigger").on({
  //   click: function(){
  //     $(".sidebarNav__list").toggleClass("sidebarNav__list--expanded");
  //     //$(".as-overlay").toggleClass("as-overlay--shade");
  //     $(this).toggleClass("as-header__link--menu--active");
  //   }
  // });
  $(".sidebarNav__trigger").append("<span class='as-icon as-icon--arrow-down'></span>");
  $(".sidebarNav__trigger").on({
    click: function () {
      $(".fullPage__sidebarNav").toggleClass("fullPage__sidebarNav--expanded");
      //$(".as-overlay").toggleClass("as-overlay--shade");
      $(this).toggleClass("as-header__link--menu--active");
    }
  });



// Scorll Nav

    $('.sidebarNav').onePageNav({
      scrollThreshold: 0.009
    });


//magnific popup from m/m
  /*$(document).ready(function(){
    $('.ajax-popup-link').magnificPopup({
      type: 'ajax'
    });
});*/

});

/*
**  Tabs
*/

// for tabs actions
window.addEventListener("load", function() {
	// store tabs variable
	var myTabs = document.querySelectorAll("ul.tabs__nav > li");
    // remove active from all but first tab selector
    for (var i = 1; i < myTabs.length; i++) {
        myTabs[i].classList.remove("active");
    }

    // store panes variable
    var myContentPanes = document.querySelectorAll(".tab__pane");
    // remove active from all but first pane
    for (i = 1; i < myContentPanes.length; i++) {
        myContentPanes[i].classList.remove("active");
    }

	function myTabClicks(tabClickEvent) {
		for (var i = 0; i < myTabs.length; i++) {
			myTabs[i].classList.remove("active");
		}
		var clickedTab = tabClickEvent.currentTarget;
		clickedTab.classList.add("active");
		tabClickEvent.preventDefault();
		//var myContentPanes = document.querySelectorAll(".tab__pane");
		for (i = 0; i < myContentPanes.length; i++) {
			myContentPanes[i].classList.remove("active");
		}
		var anchorReference = tabClickEvent.target;
		var activePaneId = anchorReference.getAttribute("href");
		var activePane = document.querySelector(activePaneId);
		activePane.classList.add("active");
	}
	for (i = 0; i < myTabs.length; i++) {
		myTabs[i].addEventListener("click", myTabClicks)
	}
});

/*
** Carousel
*/
carousel = (function () {

  // if (!document.querySelector ||
  //   !('classList' in document.body)) {
  //   return false;
  // }

  if (!document.getElementById('carousel')){
    return false;
  }

  var box = document.querySelector('.slider');
  //console.log(box);
  var buttons = box.querySelector('.navigation');
  var next = box.querySelector('.next');
  var prev = box.querySelector('.prev');
  var counter = 0;
  var items = box.querySelectorAll('.slide');
  var amount = items.length;
  var current = items[0];

  for (var i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-hidden", "true");
  }

  // add .active to show buttons
  if (amount > 1) {
    box.classList.add('slider--active');
  }
  function navigate(direction) {
    // current.classList.remove('butter');
    current.setAttribute("aria-hidden", "true");
    counter = counter + direction;
    if (direction === -1 &&
      counter < 0) {
      counter = amount - 1;
    }
    if (direction === 1 &&
      !items[counter]) {
      counter = 0;
    }
    current = items[counter];
    current.setAttribute("aria-hidden", "false");
  }
  next.addEventListener('click', function (ev) {
    navigate(1);
  });
  prev.addEventListener('click', function (ev) {
    navigate(-1);
  });
  navigate(0);

})();

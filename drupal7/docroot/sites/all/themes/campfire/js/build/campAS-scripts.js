// for isotope button group
// flatten object by concatting values
function concatValues(obj) {
  var value = '';
  for (var prop in obj) {
    value += obj[prop];
  }
  return value;
}

// *** Homepage Isotope cards

// add necessary things to DOM
jQuery(document).ready(function($) {
  $(".as-cards").prepend("<div class='gutter-size'></div><div class='grid-size'></div>");
  $(".as-cards--campfire .as-card:eq(1)").addClass("stamp as-card--featured");



  // isotope container
  var $container = $('.as-cards');

  // campfire isotope
  $(function() {
    $container.imagesLoaded(function() {
      $('.as-cards--campfire').isotope({
        itemSelector: '.as-card',
        percentPosition: 'true',
        masonry: {
          columnWidth: '.grid-size',
          gutter: '.gutter-size',
          stamp: '.stamp'
        }
      });
    });
  });

  // tiles isotope
  $(function() {
    //images loaded
    $container.imagesLoaded(function() {
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
      // integrating button groups
      // store filter for each group
      var filters = {};

      $('.as-filter__section').on('click', 'input', function() {
        var $this = $(this);
        // get group key
        var $buttonGroup = $this.parents('.filter-group');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        // set filter for group
        filters[filterGroup] = $this.attr('value');
        // combine filters
        var filterValue = concatValues(filters);
        // set filter for Isotope
        $grid.isotope({
          filter: filterValue
        });
      });
    });
  });

  // show filters
  $(".show-filters, .as-filter__panel .as-icon--close").on({
    click: function() {
      $(".as-filter__panel").toggleClass("as-filter__panel--expanded");
      $(".as-icon--arrow-down").toggleClass("as-icon--arrow-up");
    }
  });

  $(".viewList--toggle").on({
    click: function() {
      $(".viewList").removeClass("none");
      $(".viewGrid").addClass("none");
    }
  });
  $(".viewGrid--toggle").on({
    click: function() {
      $(".viewGrid").removeClass("none");
      $(".viewList").addClass("none");
    }
  });

  // Mobile Main Nav
  //add mobile child indicator
  // $(".menu--secondary").before("<span class='as-icon as-icon--arrow-down'></span>");


  // $(".as-header__link--menu").on({
  //   click: function() {
  //     $(".as-container--nav").toggleClass("as-container--nav--expanded");
  //     $(".as-overlay").toggleClass("as-overlay--shade");
  //     $(this).toggleClass("as-header__link--menu--expanded");
  //     $(".as-mainNav-icon").toggleClass("as-icon--bars").toggleClass("as-icon--close");
  //   }
  // });

  // Mobile Footer Nav
  // $(".as-footer__link--primary").after("<span class='as-icon as-icon--arrow-down'></span>");



  // document is ready to go...
  (function ($) {

    // console.log( "Let's do this!"  );

    // close the menu--secondary
    // $('.menu--secondary a').attr('tabindex', -1);
    $('.menu--secondary').addClass('close');
    $(".menu--secondary").before("<button class='menu-toggle' aria-label='secondary menu'aria-expanded='false'><svg viewBox='0 0 20 20' class='icon--arrow'> <use xlink:href='#shape-icon-down-arrow'></use > </svg ></button>");

    //
    // need to make this toggle want to control visibility with aria hiddens
    //
    $("#toggle-menu").on({
      click: function () {
        var thingy = $(this);
        
        $(thingy).toggleClass("active");

        if (thingy.hasClass('active')){
          $(thingy).attr("aria-expanded", "true");
        }else{
          $(thingy).attr("aria-expanded", "false");
        }  
        $(".as-nav").toggleClass("show");
      }
    });

    // remove tabbing form secondary links
    $('#as-main-nav .menu--secondary a').attr('tabindex', -1);
    
    // if a menu-button is clicked...
    $('.menu-toggle').click(function (e) {

      var _this = $(this);
      var secondary = $(this).next();
      console.log(secondary);
      console.log(this);

      // if the menu--secondary is hidden....
      if (!_this.next().hasClass('display')) {

        // reset menu--secondary + button arrow to start
        $('.menu--secondary').removeClass('display');

        $('.fa').addClass('fa-angle-down');
        $('.fa').removeClass('fa-angle-up');

        // set aria label for button
        $('.menu-toggle').attr('aria-label', 'secondary menu is closed');

        // add tabindex 0 to secondary links
        secondary.children('li').children('a').attr('tabindex', 0);

        // add display for css classes open menu
        _this.next().addClass('display');

        // aria-expanded true for button
        _this.attr('aria-expanded', 'true');

        //change atts for child
        _this.next().attr('aria-hidden', 'false'),
        // _this.next().attr('tabindex', '0'),
        
        // changing arrow
        _this.children().removeClass('fa-angle-down');
        _this.children().addClass('fa-angle-up');
        
        //changing aria-label
        _this.attr('aria-label', 'secondary menu is open');

        // if the menu is open then...   
      } else {

        // remove tabindex 0 to secondary links
        secondary.children('li').children('a').attr('tabindex', -1);

        // close the menu...
        _this.next().removeClass('display');

        // aria-expanded false for button
        _this.attr('aria-expanded', 'false');

        //change atts for child
        //_this.next().attr('tabindex', '-1'),
        _this.next().attr('aria-hidden', 'true'),

        //changing arrow back
        _this.children().removeClass('fa-angle-up');
        _this.children().addClass('fa-angle-down');

        //changing aria-label back to closed
        _this.attr('aria-label', 'secondary menu is closed');
      }
    });
  })(jQuery);


  $(".menu--primary span").on({
    click: function() {
      //$(".expanded").not(this).removeClass("expanded");
      $(this).parent().toggleClass("expanded");
      $(this).toggleClass("as-icon--arrow-up");
    }
  });

  // .as-search
  $(".as-search__toggle").on({
    click: function() {
      var thingy = $(this);

      $(thingy).toggleClass("active");

      if (thingy.hasClass('active')) {
        $(thingy).attr("aria-expanded", "true");
      } else {
        $(thingy).attr("aria-expanded", "false");
      } 
      //$(".as-overlay").removeClass("as-overlay--shade");
      $(".as-container--nav").removeClass("as-container--nav--expanded");
      $('.as-search-bar').toggleClass('as-search-bar--expanded');
      $('.search--header').toggleClass('search--header--expanded');
      $('.as-overlay').toggleClass('as-overlay--tint');
      $('.as-search-bar__input').focus();
      ga('send', 'event', 'searchBar', 'expand', 'Homepage');
    }
  });

  // .as-info-for
  $(".as-info-for__toggle").on({
    click: function() {
      $('.as-info-bar').toggleClass('as-info-bar--expanded');
      ga('send', 'event', 'infoFor', 'expand', 'Homepage');
    }
  });

  // FAQ Toggle
  $(".faq .toggle").on({
    click: function() {
      $(this).parent().toggleClass("expanded");
    }
  });

  // Flickity
  /**/
  $('.eventList--flickity .eventList__list').flickity(

    {
      wrapAround: true,
      prevNextButtons: false,
      setGallerySize: false
    }
  );


  /*  */
  //magnific
//   $('.magnific').magnificPopup({
//     type:'inline',
//     removalDelay: 300,
//     mainClass: 'mfp-fade',
//     midClick: true}
// );
//   $('.magnificTwo').magnificPopup({
//     type:'inline',
//     removalDelay: 300,
//     mainClass: 'mfp-fade',
//     midClick: true,
//     delegate: 'div'}
//   );
// $('.video-YT, .video-VM, .popup-gmaps').magnificPopup({
//       disableOn: 700,
//       type: 'iframe',
//       mainClass: 'mfp-fade',
//       removalDelay: 160,
//       preloader: false,
//       fixedContentPos: false
//   });
//   $('.popup-with-form').magnificPopup({
//       type: 'inline',
//       preloader: false,
//       focus: '#name',
//       // When elemenet is focused, some mobile browsers in some cases zoom in
//       // It looks not nice, so we disable it:
//       callbacks: {
//           beforeOpen: function() {
//               if($(window).width() < 700) {
//                   this.st.focus = false;
//               } else {
//                   this.st.focus = '#name';
//               }
//           }
//       }
//   });


  /* Sticky Sidebar */
  jQuery(document).ready(function() {
    if ($(".stickit").length) {
      // Sticky nav
      (function($, undefined) {
        "use strict";

        var $filters = $(".stickit"),
          width = $filters.width();

        var $stickyBar = $(".stickit"),
          y_pos = $stickyBar.offset().top;

        $(document).scroll(function() {
          var scrollTop = $(this).scrollTop();
          if (scrollTop > y_pos - 20) {
            $stickyBar.addClass("stuck").width(width);
          } else if (scrollTop <= y_pos) {
            $stickyBar.removeClass("stuck").width('').clearQueue();
          }
        });

      })(jQuery, undefined);
    }
  });

  // Pin things

  $(".inpage").pin({
    containerSelector: ".region-content"
  });

  $(".stick").pin({
    containerSelector: ".modes, .implications"
  });


  /* sticky with waypoints
  */

  $('.fade').waypoint(function(direction) {
    $(this.element).addClass('fade-in');
    console.log('far out');
  }, {
    offset: '90%'
  });

  // Sticky Mobile Nav
  $(".sidebarNav__trigger").append("<span class='as-icon as-icon--arrow-down'></span>");
  $(".sidebarNav__trigger").on({
    click: function() {
      $(".fullPage__sidebarNav").toggleClass("fullPage__sidebarNav--expanded");
      //$(".as-overlay").toggleClass("as-overlay--shade");
      $(this).toggleClass("as-header__link--menu--active");
    }
  });




  // Scorll Nav
  // $(document).ready(function() {
  //   $('.fullPage__sidebarNav, .inpage_two').onePageNav({
  //     scrollThreshold: 0.009
  //   });
  // });

  $("a[href^='#']").click(function (e) {
    e.preventDefault();

    var position = ($($(this).attr("href")).offset().top) - 40;
    console.log(position);

    $("body, html").animate({
      scrollTop: position
    } /* speed */);
  });



  //magnific popup from m/m
  $(document).ready(function() {
    $('.ajax-popup-link').magnificPopup({
      type: 'ajax'
    });
  });
});

//magnific



// Tiny Carousels

jQuery(document).ready(function($){https://www.parasoft.com/sites/default/files/map_marker.png
	
	// set tabindex of links in popups to -1
	// $('.mfp-hide a').attr('tabindex', '-1');
	
	$('.magnific').magnificPopup({
      type:'inline',
      removalDelay: 300,
      mainClass: 'mfp-fade',
      midClick: true}
  );
  
    $('.magnificTwo').magnificPopup({
      type:'inline',
      removalDelay: 300,
      mainClass: 'mfp-fade',
      midClick: true,
      delegate: 'div'}
    );
  $('.popLink').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
    $('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
		// When elemenet is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});

carousel = (function(){

  // if (!document.querySelector ||
  //   !('classList' in document.body)) {
  //   return false;
  // }

  if (!document.getElementById('carousel')) {
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

  for (var i=0; i < items.length; i++){
    items[i].setAttribute("aria-hidden", "true");
  }

  // add .active to show buttons
  if(amount > 1){
    box.classList.add('slider--active');
  }
  function navigate(direction) {
    // current.classList.remove('butter');
    current.setAttribute("aria-hidden","true");
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
    current.setAttribute("aria-hidden","false");
  }
  next.addEventListener('click', function(ev) {
    navigate(1);
  });
  prev.addEventListener('click', function(ev) {
    navigate(-1);
  });
  navigate(0);
})();

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

jQuery(document).ready(function ($) {
  if($("#facultyListing").length){
  var options = {
    valueNames: ['name', 'region', 'difficulty', 'research', 'type']
  };
  var filterList = new List('facultyListing', options);
  var updateList = function() {

  var region = new Array();
  var research = new Array();
  var type = new Array();

  $("input:checkbox[name=region]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
     // var arrayLength = arr.length;
      region = region.concat(arr);
    } else {
      region.push($(this).val());
    }
  });

  $("input:checkbox[name=research]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
      research = research.concat(arr);
    } else {
      research.push($(this).val());
    }
  });

  $("input:checkbox[name=type]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
      type = type.concat(arr);
    } else {
      type.push($(this).val());
    }
  });

  var values_research = research.length > 0 ? research : null;
  var values_region = region.length > 0 ? region : null;
  var values_type = type.length > 0 ? type : null;

    filterList.filter(function(item) {

      var researchTest;
      var regionTest;
      var typeTest;

      if (item.values().region.indexOf('|') > 0) {
        var regionArr = item.values().region.split('|');
        for (var i = 0; i < regionArr.length; i++) {
          if (_(values_region).contains(regionArr[i])) {
            regionTest = true;
          }
        }
      }

      if (item.values().research.indexOf('|') > 0) {
        var researchArr = item.values().research.split('|');
        for (var n = 0; n < researchArr.length; n++) {
          if (_(values_research).contains(researchArr[n])) {
            researchTest = true;
          }
        }
      }

      if (item.values().type.indexOf('|') > 0) {
        var typeArr = item.values().type.split('|');
        for (var n = 0; n < typeArr.length; n++) {
          if (_(values_type).contains(typeArr[n])) {
            typeTest = true;
          }
        }
      }

      return (_(values_region).contains(item.values().region) || !values_region || regionTest) &&
        (_(values_research).contains(item.values().research) || !values_research || researchTest)
         &&(_(values_type).contains(item.values().type) || !values_type || typeTest);
    });
  };

  filterList.on("updated", function() {
    $('.sort').each(function() {
      if ($(this).hasClass("asc")) {
        $(this).find(".fa").addClass("fa-sort-alpha-asc").removeClass("fa-sort-alpha-desc").show();
      } else if ($(this).hasClass("desc")) {
        $(this).find(".fa").addClass("fa-sort-alpha-desc").removeClass("fa-sort-alpha-asc").show();
      } else {
        $(this).find(".fa").hide();
      }
    });
  });

  var all_research = [];
  var all_region = [];
  var all_type = [];

  updateList();

  _(filterList.items).each(function(item) {
    // region
    if (item.values().region.indexOf('|') > 0) {
      var arr = item.values().region.split('|');
      all_region = all_region.concat(arr);
      } else {
      all_region.push(item.values().region);
    }
    // research
    if (item.values().research.indexOf('|') > 0) {
      var arr = item.values().research.split('|');
      all_research = all_research.concat(arr);
      } else {
      all_research.push(item.values().research);
    }
    // type
    if (item.values().type.indexOf('|') > 0) {
      var arr = item.values().type.split('|');
      all_type = all_type.concat(arr);
      } else {
      all_type.push(item.values().type);
    }
  });

  _(all_research).uniq().each(function(item) {
    $(".subdisciplinesContainer").append('<label><input type="checkbox" name="research" value="' + item + '">' + item + '</label>');
  });

  _(all_region).uniq().each(function(item) {
    $(".regionsContainer").append('<label><input type="checkbox" name="region" value="' + item + '">' + item + '</label>');
  });

  _(all_type).uniq().each(function(item) {
    $(".sliceanddiceContainer").append('<label><input type="checkbox" name="type" value="' + item + '">' + item + '</label>');
  });

$(document).off("change", "input:checkbox[name=research]");
$(document).on("change", "input:checkbox[name=research]", updateList);

$(document).off("change", "input:checkbox[name=region]");
$(document).on("change", "input:checkbox[name=region]", updateList);

$(document).off("change", "input:checkbox[name=type]");
$(document).on("change", "input:checkbox[name=type]", updateList);
}
});

jQuery(document).ready(function ($) {
  var $targets = $('.card');

  $('.searchbox').on('input', function () {
    $targets.show();

    var text = $(this).val().toLowerCase();
    if (text) {
      $targets.filter(':visible').each(function () {
        var $target = $(this);
        var $matches = 0;
        // Search only in targeted element
        $target.find('h2, h3, h4, p').add($target).each(function () {
          if ($(this).text().toLowerCase().indexOf("" + text + "") !== -1) {
            $matches++;
          }
        });
        if ($matches === 0) {
          $target.hide();
        }
      });
    }

  });
});

/*

	How to use:
	1)	Copy this jQuery to your project
	2)	Add [data-search] to search input
	3)	Add [data-filter-item] to the items that should be filtered
	4)	Add [data-filter-name="SEARCH TERM"] to the filter-items


console.log('booyah');
jQuery(document).ready(function ($) {
  $('[data-search]').on('keyup', function () {
    var searchVal = $(this).val();
    console.log(searchVal);
    var filterItems = $('[data-filter-item]');

    if (searchVal != '') {
      filterItems.addClass('hidden');
      $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
    } else {
      filterItems.removeClass('hidden');
    }
  });
});
*/


// jQuery(document).ready(function ($) {
//   if ($("#coursesListing").length){
//   var options = {
//     valueNames: ['course__title', 'course__professor', 'course__description', 'course__number', 'course__semester', 'course__crossListed']
//   };
//   var coursesList = new List('coursesListing', options);
//   var updateList = function() {

//   var course__semester = new Array();


//   $("input:checkbox[name=course__semester]:checked").each(function() {
//     if ($(this).val().indexOf('|') > 0) {
//       var arr = $(this).val().split('|');
//      // var arrayLength = arr.length;
//       course__semester = course__semester.concat(arr);
//     } else {
//       course__semester.push($(this).val());
//     }
//   });



//   var values_course__semester = course__semester.length > 0 ? course__semester : null;

//     coursesList.filter(function(item) {


//       var course__semesterTest;

//       if (item.values().course__semester.indexOf('|') > 0) {
//         var course__semesterArr = item.values().course__semester.split('|');
//         for (var i = 0; i < course__semesterArr.length; i++) {
//           if (_(values_course__semester).contains(course__semesterArr[i])) {
//             course__semesterTest = true;
//           }
//         }
//       }



//       return (_(values_course__semester).contains(item.values().course__semester) || !values_course__semester || course__semesterTest);
//     });
//   };

//   var all_course__semester = [];

//   updateList();

//   _(coursesList.items).each(function(item) {
//     // course__semester
//     if (item.values().course__semester.indexOf('|') > 0) {
//       var arr = item.values().course__semester.split('|');
//       all_course__semester = all_course__semester.concat(arr);
//       } else {
//       all_course__semester.push(item.values().course__semester);
//     }

//   });


//   _(all_course__semester).uniq().each(function(item) {
//     $(".course__semestersContainer").append('<label><input type="checkbox" name="course__semester" value="' + item + '">' + item + '</label>');
//   });


// $(document).off("change", "input:checkbox[name=course__semester]");
// $(document).on("change", "input:checkbox[name=course__semester]", updateList);
// }
// });

// jQuery(document).ready(function($) {
// 	$('.thumbnail-gallery').magnificPopup({
// 		delegate: 'a',
// 		type: 'image',
// 		tLoading: 'Loading image #%curr%...',
// 		mainClass: 'mfp-img-mobile',
// 		gallery: {
// 			enabled: true,
// 			navigateByImgClick: true,
// 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
// 		},
// 		image: {
// 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
// 			titleSrc: function(item) {
// 				return item.el.children().attr('title');
// 			}
// 		}
// 	});
// });

jQuery(document).ready(function($){
	$('.thumbnail-gallery').magnificPopup({
		delegate: 'a',
		// type: 'image',
		tLoading: 'Loading image #%curr%...',
		// mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
		// image: {
		// 	tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		// 	titleSrc: function(item) {
		// 		return item.el.children().attr('title');
		// 	}
		// }
	});
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

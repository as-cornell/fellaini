'use strict';

// UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
// Drupal.behaviors.accordion = {
//   attach: function (context, settings) {

(function () {
  // REMOVE IF DRUPAL

  'use strict';

  // Set 'document' to 'context' if Drupal

  var accordionTerm = document.querySelectorAll('.accordion-term');
  var accordionDef = document.querySelectorAll('.accordion-def');

  // If javascript, hide accordion definition on load
  function jsCheck() {
    for (var i = 0; i < accordionDef.length; i++) {
      if (accordionDef[i].classList) {
        accordionDef[i].classList.add('active');
        accordionDef[0].previousElementSibling.classList.add('is-active');
      } else {
        accordionDef[i].className += ' active';
        accordionDef[0].previousElementSibling.classList.add('is-active');
      }
    }
  }

  jsCheck();

  // Accordion Toggle
  // Mobile Click Menu Transition
  for (var i = 0; i < accordionTerm.length; i++) {
    accordionTerm[i].addEventListener('click', function (e) {
      var className = 'is-active';
      // Add is-active class
      if (this.classList) {
        this.classList.toggle(className);
      } else {
        var classes = this.className.split(' ');
        var existingIndex = classes.indexOf(className);

        if (existingIndex >= 0) {
          classes.splice(existingIndex, 1);
        } else {
          classes.push(className);
        }
        this.className = classes.join(' ');
      }
      e.preventDefault();
    });
  }
})(); // REMOVE IF DRUPAL

// UNCOMMENT IF DRUPAL
//   }
// };
'use strict';

carousel = function () {

    if (!document.querySelector || !('classList' in document.body)) {
        return false;
    }

    var box = document.querySelector('.ptWrapper--slider');
    // console.log(box);
    var buttons = box.querySelector('.navigation');
    var next = box.querySelector('.next');
    var prev = box.querySelector('.prev');
    var counter = 0;
    var items = box.querySelectorAll('.photoText');
    // console.log('items');
    var amount = items.length;
    var current = items[0];

    // add .active to show buttons
    // if (amount > 1) {
    //     box.classList.add('slider--active');

    // }

    for (var i = 0; i < items.length; i++) {
        items[i].setAttribute("aria-hidden", "true");
    }
    if (amount > 1) {
        box.classList.add('slider--active');
    }
    function navigate(direction) {
        // current.classList.remove('butter');
        current.setAttribute("aria-hidden", "true");
        counter = counter + direction;
        if (direction === -1 && counter < 0) {
            counter = amount - 1;
        }
        if (direction === 1 && !items[counter]) {
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
}();
'use strict';

// UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
// Drupal.behaviors.accordion = {
//   attach: function (context, settings) {

(function () {
  // REMOVE IF DRUPAL

  'use strict';

  // Set 'document' to 'context' if Drupal

  var accordionTerm = document.querySelectorAll('.accordion-term');
  var accordionDef = document.querySelectorAll('.accordion-def');

  // If javascript, hide accordion definition on load
  function jsCheck() {
    for (var i = 0; i < accordionDef.length; i++) {
      if (accordionDef[i].classList) {
        accordionDef[i].classList.add('active');
        accordionDef[0].previousElementSibling.classList.add('is-active');
      } else {
        accordionDef[i].className += ' active';
        accordionDef[0].previousElementSibling.classList.add('is-active');
      }
    }
  }

  jsCheck();

  // Accordion Toggle
  // Mobile Click Menu Transition
  for (var i = 0; i < accordionTerm.length; i++) {
    accordionTerm[i].addEventListener('click', function (e) {
      var className = 'is-active';
      // Add is-active class
      if (this.classList) {
        this.classList.toggle(className);
      } else {
        var classes = this.className.split(' ');
        var existingIndex = classes.indexOf(className);

        if (existingIndex >= 0) {
          classes.splice(existingIndex, 1);
        } else {
          classes.push(className);
        }
        this.className = classes.join(' ');
      }
      e.preventDefault();
    });
  }
})(); // REMOVE IF DRUPAL

// UNCOMMENT IF DRUPAL
//   }
// };
'use strict';

// document is ready to go...
(function ($) {

  // console.log( "Let's do this!"  );

  // close the menu--secondary
  // $('.menu--secondary a').attr('tabindex', -1);
  // $('.menu--secondary').addClass('close');
  // $(".menu--secondary").before("<button class='menu-toggle' aria-hidden='false' aria-label='menu--secondary is closed'><svg viewBox='0 0 20 20' class='icon--arrow'> <use xlink:href='#shape-icon-down-arrow'></use > </svg ><span class='sr-only'>Show nested menu</span></button>");

  //
  // need to make this toggle want to control visibility with aria hiddens
  //


  // Add aria-haspopup true to links with popups
  $('.expand-sub').prev().attr('aria-haspopup', 'true');

  $('.subNav a').attr('tabindex', -1);

  // var linkText = $('.expand-sub').prev().text();
  // // console.log(linkText);

  $("#toggle-menu").on({
    click: function click() {
      $(".mainNav").toggleClass("show");
    }
  });

  // if a menu-button is clicked...
  $('.expand-sub').click(function (e) {

    var _this = $(this);
    var parent = $(_this.parent());
    var linkContent = $(_this.prev());
    console.log(linkContent);

    if (!parent.hasClass('sub-expanded')) {

      $(parent).addClass('sub-expanded');
      _this.next().find('a').removeAttr('tabindex', -1);

      // remove sub-expaneded
    } else {
      $(parent).removeClass('sub-expanded');
      _this.next().find('a').attr('tabindex', -1);
    }

    // $('.subNav__link').focus(function(){
    //   $(this).addClass('sub-expanded');
    //   console.log('hiya');
    // });


    // // if the menu--secondary is hidden....
    // if (!_this.next().hasClass('display')) {

    //   // reset menu--secondary + button arrow to start
    //   $('.menu--secondary').removeClass('display');
    //   $('.menu--secondary a').attr('tabindex', -1);
    //   $('.fa').addClass('fa-angle-down');
    //   $('.fa').removeClass('fa-angle-up');
    //   $('.expand-sub').attr('aria-label', 'menu--secondary is closed');

    //   // open menu
    //  // _this.next().addClass('display');
    //   // _this.prev().removeAttr('aria-expanded');
    //   _this.prev().attr('aria-expanded', 'true');
    //   //_this.next().find('a').removeAttr('tabindex', -1);
    //   //_this.children().removeClass('fa-angle-down');
    //  // _this.children().addClass('fa-angle-up');
    //   //_this.attr('aria-label', 'menu--secondary is open');

    //   // if the menu is open then...   
    // } else {

    //   // close the menu...
    //  // _this.next().removeClass('display');
    //   _this.prev().attr('aria-expanded', 'false');
    //  // _this.next().find('a').attr('tabindex', -1);
    //  // _this.children().removeClass('fa-angle-up');
    //  // _this.children().addClass('fa-angle-down');
    // //  _this.attr('aria-label', 'menu--secondary is closed');

    // }
  });
})(jQuery);

/**
 * @file
 * A JavaScript file containing the main menu functionality (small/large screen)
 *
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth


// (function (Drupal) { // UNCOMMENT IF DRUPAL.
//
//   Drupal.behaviors.mainMenu = {
//     attach: function (context) {

(function () {
  // REMOVE IF DRUPAL.

  'use strict';

  // Use context instead of document IF DRUPAL.

  var toggle_expand = document.getElementById('toggle-expand');
  var menu = document.getElementById('main-nav');
  var expand_menu = menu.getElementsByClassName('expand-sub');

  // Mobile Menu Show/Hide.
  toggle_expand.addEventListener('click', function (e) {
    toggle_expand.classList.toggle('toggle-expand--open');
    menu.classList.toggle('main-nav--open');
  });

  // Expose mobile sub menu on click.
  for (var i = 0; i < expand_menu.length; i++) {
    expand_menu[i].addEventListener('click', function (e) {
      var menu_item = e.currentTarget;
      var sub_menu = menu_item.nextElementSibling;

      menu_item.classList.toggle('expand-sub--open');
      sub_menu.classList.toggle('main-menu--sub-open');
    });
  }
})(); // REMOVE IF DRUPAL.

// })(Drupal); // UNCOMMENT IF DRUPAL.
"use strict";
'use strict';

(function () {

  'use strict';

  var el = document.querySelectorAll('.tabs');
  var tabNavigationLinks = document.querySelectorAll('.tabs__link');
  var tabContentContainers = document.querySelectorAll('.tabs__tab');
  var activeIndex = 0;

  /**
   * handleClick
   * @description Handles click event listeners on each of the links in the
   *   tab navigation. Returns nothing.
   * @param {HTMLElement} link The link to listen for events on
   * @param {Number} index The index of that link
   */
  var handleClick = function handleClick(link, index) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      goToTab(index);
    });
  };

  /**
   * goToTab
   * @description Goes to a specific tab based on index. Returns nothing.
   * @param {Number} index The index of the tab to go to
   */
  var goToTab = function goToTab(index) {
    if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
      tabNavigationLinks[activeIndex].classList.remove('is-active');
      tabNavigationLinks[index].classList.add('is-active');
      tabContentContainers[activeIndex].classList.remove('is-active');
      tabContentContainers[index].classList.add('is-active');
      activeIndex = index;
    }
  };

  /**
   * init
   * @description Initializes the component by removing the no-js class from
   *   the component, and attaching event listeners to each of the nav items.
   *   Returns nothing.
   */
  for (var e = 0; e < el.length; e++) {
    el[e].classList.remove('no-js');
  }

  for (var i = 0; i < tabNavigationLinks.length; i++) {
    var link = tabNavigationLinks[i];
    handleClick(link, i);
  }
})();
"use strict";
//# sourceMappingURL=scripts-styleguide.js.map

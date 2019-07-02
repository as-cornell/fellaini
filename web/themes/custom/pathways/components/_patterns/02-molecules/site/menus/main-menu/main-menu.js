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

  var linkText = $('.expand-sub').prev().text();
  console.log(linkText);

  $("#toggle-menu").on({
    click: function () {
      $(".mainNav").toggleClass("show");
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
  $('.expand-sub').click(function (e) {

    var _this = $(this);
    var parent = $(_this.parent());
    var linkContent = $(_this.prev());
    console.log(linkContent);




    if(!parent.hasClass('sub-expanded')){
      console.log(_this.parent());
      //click button add sub-expanded to parent
      $(parent).addClass('sub-expanded');

      // remove sub-expaneded
    }else{
      $(parent).removeClass('sub-expanded');

    }



    // if the menu--secondary is hidden....
    if (!_this.next().hasClass('display')) {

      // reset menu--secondary + button arrow to start
      $('.menu--secondary').removeClass('display');
      $('.menu--secondary a').attr('tabindex', -1);
      $('.fa').addClass('fa-angle-down');
      $('.fa').removeClass('fa-angle-up');
      $('.expand-sub').attr('aria-label', 'menu--secondary is closed');

      // open menu
     // _this.next().addClass('display');
      // _this.prev().removeAttr('aria-expanded');
      _this.prev().attr('aria-expanded', 'true');
      //_this.next().find('a').removeAttr('tabindex', -1);
      //_this.children().removeClass('fa-angle-down');
     // _this.children().addClass('fa-angle-up');
      //_this.attr('aria-label', 'menu--secondary is open');

      // if the menu is open then...   
    } else {

      // close the menu...
     // _this.next().removeClass('display');
      _this.prev().attr('aria-expanded', 'false');
     // _this.next().find('a').attr('tabindex', -1);
     // _this.children().removeClass('fa-angle-up');
     // _this.children().addClass('fa-angle-down');
    //  _this.attr('aria-label', 'menu--secondary is closed');

    }

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

(function () { // REMOVE IF DRUPAL.

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

"use strict";// document is ready to go...
/**
 * @file
 * A JavaScript file containing the main menu functionality (small/large screen)
 *
 */ // JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
// (function (Drupal) { // UNCOMMENT IF DRUPAL.
//
//   Drupal.behaviors.mainMenu = {
//     attach: function (context) {
(function(a){// console.log( "Let's do this!"  );
// close the menu--secondary
// $('.menu--secondary a').attr('tabindex', -1);
// $('.menu--secondary').addClass('close');
// $(".menu--secondary").before("<button class='menu-toggle' aria-hidden='false' aria-label='menu--secondary is closed'><svg viewBox='0 0 20 20' class='icon--arrow'> <use xlink:href='#shape-icon-down-arrow'></use > </svg ><span class='sr-only'>Show nested menu</span></button>");
//
// need to make this toggle want to control visibility with aria hiddens
//
// Add aria-haspopup true to links with popups
// var linkText = $('.expand-sub').prev().text();
// // console.log(linkText);
// if a menu-button is clicked...
a(".expand-sub").prev().attr("aria-haspopup","true"),a(".subNav a").attr("tabindex",-1),a("#toggle-menu").on({click:function click(){a(".mainNav").toggleClass("show")}}),a(".expand-sub").click(function(){var b=a(this),c=a(b.parent()),d=a(b.prev());console.log(d),c.hasClass("sub-expanded")?(a(c).removeClass("sub-expanded"),b.next().find("a").attr("tabindex",-1)):(a(c).addClass("sub-expanded"),b.next().find("a").removeAttr("tabindex",-1))})})(jQuery),function(){// REMOVE IF DRUPAL.
'use strict';// Use context instead of document IF DRUPAL.
var a=document.getElementById("toggle-expand"),b=document.getElementById("main-nav"),c=b.getElementsByClassName("expand-sub");a.addEventListener("click",function(){a.classList.toggle("toggle-expand--open"),b.classList.toggle("main-nav--open")});// Expose mobile sub menu on click.
for(var d=0;d<c.length;d++)c[d].addEventListener("click",function(a){var b=a.currentTarget,c=b.nextElementSibling;b.classList.toggle("expand-sub--open"),c.classList.toggle("main-menu--sub-open")})}();
//# sourceMappingURL=main-menu.js.map

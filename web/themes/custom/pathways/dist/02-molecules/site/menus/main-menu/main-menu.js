"use strict";// document is ready to go... or is it
(function(a){// add active class to current item
// $(function () {
//   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(
//     "active"
//   );
// });
// console.log( "Let's do this!"  );
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
a(".nav-opener").on({click:function click(){a(".mainNav").toggleClass("shown")}}),a(".mainNav__toggle").prev().attr("aria-haspopup","true"),a(".subNav a").attr("tabindex",-1),a(".mainNav__subNavToggle").click(function(){var b=a(this),c=a(b.parent()),d=a(b.prev());a(this).toggleClass("rotated");var e=a(b.next());console.log(d),e.hasClass("subNav--expanded")?(a(e).removeClass("subNav--expanded"),a(c).removeClass("withSubNav--expanded"),b.prev().find("a").attr("tabindex",-1)):(a(e).addClass("subNav--expanded"),a(c).addClass("withSubNav--expanded"),b.prev().find("a").removeAttr("tabindex",-1))})})(jQuery);
//# sourceMappingURL=main-menu.js.map

// document is ready to go
(function ($) {
  // add active class to current item
  // $(function () {
  //   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(
  //     "active"
  //   );
  // });
  $(".siteNavOpener").on({
    click: function () {
      $(".nav--site > .nav").toggleClass("expanded");
    },
  });

  // add toggles to items .with-sub
  $(".with-sub > a").after(
    "<button class='subNav-toggle icon icon--button ' aria-haspopup='true' aria-label='secondary menu closed' aria-expanded='false'><svg viewBox='0 0 20 20' class='icon--arrow'> <use xlink:href='#chevron-down'></use > </svg ></button>"
  );

  $(".subNav-toggle").click(function (e) {
    var _this = $(this);
    var subNav = $(this).next();
    // $(".nav--site > .nav").toggleClass("shown");
    console.log(_this);
    console.log(subNav);
    // $(subNav).addClass("tubthumping");
    if (subNav.hasClass("expanded")) {
      $(subNav).removeClass("expanded");
      // set aria label for button
      $(_this).attr("aria-label", "secondary menu is closed");
      $(_this).attr("aria-expanded", "false");
    } else {
      $(subNav).addClass("expanded");
      // set aria label for button
      $(_this).attr("aria-label", "secondary menu is open");
      $(_this).attr("aria-expanded", "true");
    }
  });

  // Add aria-haspopup true to links with popups
  // $(".mainNav__toggle").prev().attr("aria-haspopup", "true");

  // $(".subNav a").attr("tabindex", -1);

  // if a menu-button is clicked...
  // $(".kjhkjhkjhkjhmainNav__subNavToggle").click(function (e) {
  //   var _this = $(this);
  //   var parent = $(_this.parent());
  //   var linkContent = $(_this.prev());
  //   $(this).toggleClass("rotated");

  //   var next = $(_this.next());

  //   console.log(linkContent);

  //   if (!next.hasClass("subNav--expanded")) {
  //     $(next).addClass("subNav--expanded");
  //     $(parent).addClass("withSubNav--expanded");
  //     _this.prev().find("a").removeAttr("tabindex", -1);

  //     // remove sub-expaneded
  //   } else {
  //     $(next).removeClass("subNav--expanded");
  //     $(parent).removeClass("withSubNav--expanded");
  //     _this.prev().find("a").attr("tabindex", -1);
  //   }
  // });
})(jQuery);

/*
  On this page navigation
  - add .active to first item
  - observers to change active to different links based on location of intersection sections
*/

(function ($) {
  $(".asideNav").first().first().addClass("active");
})(jQuery);

// watch sections with class navTarget
const targets = document.querySelectorAll(".pcWrapper--page-section");

// set navOptions
const navOptions = {
  threshold: 0.25,
};

const navObserver = new IntersectionObserver((entries, navObserver) => {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      return;
    } else {
      console.log(entry);
      // remove old active class
      document.querySelector(".active").classList.remove("active");
      // get id of the intersecting section
      var id = entry.target.getAttribute("id");
      // find matching link & add appropriate class
      var newLink = document
        .querySelector(`[href="#${id}"]`)
        .classList.add("active");
    }
  });
}, navOptions);

targets.forEach((target) => {
  navObserver.observe(target);
});

// document is ready to go

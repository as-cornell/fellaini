"use strict";(function(){'use strict';/**
   * init
   * @description Initializes the component by removing the no-js class from
   *   the component, and attaching event listeners to each of the nav items.
   *   Returns nothing.
   */for(var a=document.querySelectorAll(".tabs"),b=document.querySelectorAll(".tabs__link"),c=document.querySelectorAll(".tabs__tab"),d=0,f=function(a,b){a.addEventListener("click",function(a){a.preventDefault(),g(b)})},g=function(a){a!==d&&0<=a&&a<=b.length&&(b[d].classList.remove("is-active"),b[a].classList.add("is-active"),c[d].classList.remove("is-active"),c[a].classList.add("is-active"),d=a)},h=0;h<a.length;h++)a[h].classList.remove("no-js");for(var j,k=0;k<b.length;k++)j=b[k],f(j,k)})();
//# sourceMappingURL=tabs.js.map

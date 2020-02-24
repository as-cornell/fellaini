"use strict";// UNCOMMENT IF DRUPAL - see components/_meta/_01-foot.twig for attachBehaviors
// Drupal.behaviors.accordion = {
//   attach: function (context, settings) {
(function(){// REMOVE IF DRUPAL
'use strict';// Set 'document' to 'context' if Drupal
// If javascript, hide accordion definition on load
function a(){for(var a=0;a<c.length;a++)c[a].classList?(c[a].classList.add("active"),c[0].previousElementSibling.classList.add("is-active")):(c[a].className+=" active",c[0].previousElementSibling.classList.add("is-active"))}var b=document.querySelectorAll(".accordion-term"),c=document.querySelectorAll(".accordion-def");a();// Accordion Toggle
// Mobile Click Menu Transition
for(var d=0;d<b.length;d++)b[d].addEventListener("click",function(a){// Add is-active class
if(this.classList)this.classList.toggle("is-active");else{var b=this.className.split(" "),c=b.indexOf("is-active");0<=c?b.splice(c,1):b.push("is-active"),this.className=b.join(" ")}a.preventDefault()})})();
//# sourceMappingURL=accordion-item.js.map

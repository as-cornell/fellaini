"use strict";carousel=function(){function a(a){// current.classList.remove('butter');
j.setAttribute("aria-hidden","true"),f+=a,-1===a&&0>f&&(f=h-1),1!==a||g[f]||(f=0),j=g[f],j.setAttribute("aria-hidden","false")}if(!document.querySelector||!("classList"in document.body))return!1;// add .active to show buttons
// if (amount > 1) {
//     box.classList.add('slider--active');
// }
for(var b=document.querySelector(".ptWrapper--slider"),c=b.querySelector(".navigation"),d=b.querySelector(".next"),e=b.querySelector(".prev"),f=0,g=b.querySelectorAll(".photoText"),h=g.length,j=g[0],k=0;k<g.length;k++)g[k].setAttribute("aria-hidden","true");1<h&&b.classList.add("slider--active"),d.addEventListener("click",function(){a(1)}),e.addEventListener("click",function(){a(-1)}),a(0)}();
//# sourceMappingURL=photo-text-carousel.js.map

jQuery(".otpNav").first().first().addClass("active");const targets=document.querySelectorAll(".pcWrapper--page-section"),navOptions={threshold:0,rootMargin:"-200px"},navObserver=new IntersectionObserver((e,t)=>{e.forEach(e=>{if(e.isIntersecting){document.querySelector(".active").classList.remove("active");var t=e.target.getAttribute("id");document.querySelector(`[href="#${t}"]`).classList.add("active")}})},navOptions);targets.forEach(e=>{navObserver.observe(e)});const pageTitle=document.querySelector(".basicSidebar .title"),mainContainer=document.querySelector(".main"),otpNavOptions={threshold:0},otpNavObserver=new IntersectionObserver((function(e,t){e.forEach(e=>{e.isIntersecting?mainContainer.classList.remove("otpStuck"):mainContainer.classList.add("otpStuck")})}),otpNavOptions);otpNavObserver.observe(pageTitle);
console.log("observers");const asideNav=document.querySelector(".asideNavWrapper"),sectionOne=document.querySelector(".title"),sectionOneOptions={rootMargin:"100px 0px 0px 0px"},sectionOneObserver=new IntersectionObserver((function(e,s){e.forEach(e=>{console.log(e.target),e.isIntersecting?asideNav.classList.remove("stuck"):asideNav.classList.add("stuck")})}),sectionOneOptions);sectionOneObserver.observe(sectionOne);
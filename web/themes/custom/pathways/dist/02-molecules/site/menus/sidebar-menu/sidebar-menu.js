"use strict";// document is ready to go... or is it
(function(a){// add active class to current item
a(function(){a(".nav-1 > li > a[href^=\"/"+location.pathname.split("/")[1]+"\"]").addClass("active")})})(jQuery);
//# sourceMappingURL=sidebar-menu.js.map

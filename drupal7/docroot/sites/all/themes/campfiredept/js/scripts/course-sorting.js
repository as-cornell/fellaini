jQuery(document).ready(function ($) {
  var $targets = $('.card');

  $('.searchbox').on('input', function () {
    $targets.show();

    var text = $(this).val().toLowerCase();
    if (text) {
      $targets.filter(':visible').each(function () {
        var $target = $(this);
        var $matches = 0;
        // Search only in targeted element
        $target.find('h2, h3, h4, p').add($target).each(function () {
          if ($(this).text().toLowerCase().indexOf("" + text + "") !== -1) {
            $matches++;
          }
        });
        if ($matches === 0) {
          $target.hide();
        }
      });
    }

  });
});

/*

	How to use:
	1)	Copy this jQuery to your project
	2)	Add [data-search] to search input
	3)	Add [data-filter-item] to the items that should be filtered
	4)	Add [data-filter-name="SEARCH TERM"] to the filter-items


console.log('booyah');
jQuery(document).ready(function ($) {
  $('[data-search]').on('keyup', function () {
    var searchVal = $(this).val();
    console.log(searchVal);
    var filterItems = $('[data-filter-item]');

    if (searchVal != '') {
      filterItems.addClass('hidden');
      $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
    } else {
      filterItems.removeClass('hidden');
    }
  });
});
*/


// jQuery(document).ready(function ($) {
//   if ($("#coursesListing").length){
//   var options = {
//     valueNames: ['course__title', 'course__professor', 'course__description', 'course__number', 'course__semester', 'course__crossListed']
//   };
//   var coursesList = new List('coursesListing', options);
//   var updateList = function() {

//   var course__semester = new Array();


//   $("input:checkbox[name=course__semester]:checked").each(function() {
//     if ($(this).val().indexOf('|') > 0) {
//       var arr = $(this).val().split('|');
//      // var arrayLength = arr.length;
//       course__semester = course__semester.concat(arr);
//     } else {
//       course__semester.push($(this).val());
//     }
//   });



//   var values_course__semester = course__semester.length > 0 ? course__semester : null;

//     coursesList.filter(function(item) {


//       var course__semesterTest;

//       if (item.values().course__semester.indexOf('|') > 0) {
//         var course__semesterArr = item.values().course__semester.split('|');
//         for (var i = 0; i < course__semesterArr.length; i++) {
//           if (_(values_course__semester).contains(course__semesterArr[i])) {
//             course__semesterTest = true;
//           }
//         }
//       }



//       return (_(values_course__semester).contains(item.values().course__semester) || !values_course__semester || course__semesterTest);
//     });
//   };

//   var all_course__semester = [];

//   updateList();

//   _(coursesList.items).each(function(item) {
//     // course__semester
//     if (item.values().course__semester.indexOf('|') > 0) {
//       var arr = item.values().course__semester.split('|');
//       all_course__semester = all_course__semester.concat(arr);
//       } else {
//       all_course__semester.push(item.values().course__semester);
//     }

//   });


//   _(all_course__semester).uniq().each(function(item) {
//     $(".course__semestersContainer").append('<label><input type="checkbox" name="course__semester" value="' + item + '">' + item + '</label>');
//   });


// $(document).off("change", "input:checkbox[name=course__semester]");
// $(document).on("change", "input:checkbox[name=course__semester]", updateList);
// }
// });

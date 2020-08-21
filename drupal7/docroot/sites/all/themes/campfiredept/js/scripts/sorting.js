jQuery(document).ready(function ($) {
  if($("#facultyListing").length){
  var options = {
    valueNames: ['name', 'region', 'difficulty', 'research', 'type']
  };
  var filterList = new List('facultyListing', options);
  var updateList = function() {

  var region = new Array();
  var research = new Array();
  var type = new Array();

  $("input:checkbox[name=region]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
     // var arrayLength = arr.length;
      region = region.concat(arr);
    } else {
      region.push($(this).val());
    }
  });

  $("input:checkbox[name=research]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
      research = research.concat(arr);
    } else {
      research.push($(this).val());
    }
  });

  $("input:checkbox[name=type]:checked").each(function() {
    if ($(this).val().indexOf('|') > 0) {
      var arr = $(this).val().split('|');
      type = type.concat(arr);
    } else {
      type.push($(this).val());
    }
  });

  var values_research = research.length > 0 ? research : null;
  var values_region = region.length > 0 ? region : null;
  var values_type = type.length > 0 ? type : null;

    filterList.filter(function(item) {

      var researchTest;
      var regionTest;
      var typeTest;

      if (item.values().region.indexOf('|') > 0) {
        var regionArr = item.values().region.split('|');
        for (var i = 0; i < regionArr.length; i++) {
          if (_(values_region).contains(regionArr[i])) {
            regionTest = true;
          }
        }
      }

      if (item.values().research.indexOf('|') > 0) {
        var researchArr = item.values().research.split('|');
        for (var n = 0; n < researchArr.length; n++) {
          if (_(values_research).contains(researchArr[n])) {
            researchTest = true;
          }
        }
      }

      if (item.values().type.indexOf('|') > 0) {
        var typeArr = item.values().type.split('|');
        for (var n = 0; n < typeArr.length; n++) {
          if (_(values_type).contains(typeArr[n])) {
            typeTest = true;
          }
        }
      }

      return (_(values_region).contains(item.values().region) || !values_region || regionTest) &&
        (_(values_research).contains(item.values().research) || !values_research || researchTest)
         &&(_(values_type).contains(item.values().type) || !values_type || typeTest);
    });
  };

  filterList.on("updated", function() {
    $('.sort').each(function() {
      if ($(this).hasClass("asc")) {
        $(this).find(".fa").addClass("fa-sort-alpha-asc").removeClass("fa-sort-alpha-desc").show();
      } else if ($(this).hasClass("desc")) {
        $(this).find(".fa").addClass("fa-sort-alpha-desc").removeClass("fa-sort-alpha-asc").show();
      } else {
        $(this).find(".fa").hide();
      }
    });
  });

  var all_research = [];
  var all_region = [];
  var all_type = [];

  updateList();

  _(filterList.items).each(function(item) {
    // region
    if (item.values().region.indexOf('|') > 0) {
      var arr = item.values().region.split('|');
      all_region = all_region.concat(arr);
      } else {
      all_region.push(item.values().region);
    }
    // research
    if (item.values().research.indexOf('|') > 0) {
      var arr = item.values().research.split('|');
      all_research = all_research.concat(arr);
      } else {
      all_research.push(item.values().research);
    }
    // type
    if (item.values().type.indexOf('|') > 0) {
      var arr = item.values().type.split('|');
      all_type = all_type.concat(arr);
      } else {
      all_type.push(item.values().type);
    }
  });

  _(all_research).uniq().each(function(item) {
    $(".subdisciplinesContainer").append('<label><input type="checkbox" name="research" value="' + item + '">' + item + '</label>');
  });

  _(all_region).uniq().each(function(item) {
    $(".regionsContainer").append('<label><input type="checkbox" name="region" value="' + item + '">' + item + '</label>');
  });

  _(all_type).uniq().each(function(item) {
    $(".sliceanddiceContainer").append('<label><input type="checkbox" name="type" value="' + item + '">' + item + '</label>');
  });

$(document).off("change", "input:checkbox[name=research]");
$(document).on("change", "input:checkbox[name=research]", updateList);

$(document).off("change", "input:checkbox[name=region]");
$(document).on("change", "input:checkbox[name=region]", updateList);

$(document).off("change", "input:checkbox[name=type]");
$(document).on("change", "input:checkbox[name=type]", updateList);
}
});

// jQuery(document).ready(function($) {
// 	$('.thumbnail-gallery').magnificPopup({
// 		delegate: 'a',
// 		type: 'image',
// 		tLoading: 'Loading image #%curr%...',
// 		mainClass: 'mfp-img-mobile',
// 		gallery: {
// 			enabled: true,
// 			navigateByImgClick: true,
// 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
// 		},
// 		image: {
// 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
// 			titleSrc: function(item) {
// 				return item.el.children().attr('title');
// 			}
// 		}
// 	});
// });

jQuery(document).ready(function($){
	$('.thumbnail-gallery').magnificPopup({
		delegate: 'a',
		// type: 'image',
		tLoading: 'Loading image #%curr%...',
		// mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		}
		// image: {
		// 	tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		// 	titleSrc: function(item) {
		// 		return item.el.children().attr('title');
		// 	}
		// }
	});
    $('.magnific').magnificPopup({
      type:'inline',
      removalDelay: 300,
      mainClass: 'mfp-fade',
      midClick: true}
  );
    $('.magnificTwo').magnificPopup({
      type:'inline',
      removalDelay: 300,
      mainClass: 'mfp-fade',
      midClick: true,
      delegate: 'div'}
    );
  $('.popLink').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
    $('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',
		// When elemenet is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});

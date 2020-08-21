//magnific



// Tiny Carousels

jQuery(document).ready(function($){https://www.parasoft.com/sites/default/files/map_marker.png
	
	// set tabindex of links in popups to -1
	// $('.mfp-hide a').attr('tabindex', '-1');
	
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

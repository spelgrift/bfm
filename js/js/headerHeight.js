var $ = require('jquery');

$(function() {
	var minHeight = 600; // Set to adjust minimum height!
	var correction = -30; 
	var $header = $('header');
	var $footer = $('footer');
	var $lastSection = $('section.last-section');

	setHeaderHeight();
	setFooterSpacer();

	$( window ).resize(function(){
		setHeaderHeight();
	});

	function setHeaderHeight(){
		// Disable if small screen
		if(window.innerWidth <= 768){
			$header.css('min-height', '');
			return;
		}
		var height = window.innerHeight + correction;
		if(height <= minHeight){
			height = minHeight;
		}
		$header.css('min-height', height);
	}

	function setFooterSpacer(){
		var footerHeight = $footer.css('height') + 'px';
		$lastSection.css({'margin-bottom': footerHeight});
	}
});

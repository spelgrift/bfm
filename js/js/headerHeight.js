var $ = require('jquery');

$(function() {
	var minHeight = 600; // Set to adjust minimum height!
	var correction = -30; 

	setHeaderHeight();

	$( window ).resize(function(){
		setHeaderHeight();
	});

	function setHeaderHeight(){
		// Disable if small screen
		if(window.innerWidth <= 768){
			return;
		}
		var height = window.innerHeight + correction;
		if(height <= minHeight){
			height = minHeight;
		}
		$('header').css('min-height', height);
	}
});

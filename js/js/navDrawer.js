var $ = require('jquery');
$(function() {
	var $menuButton = $('#mainNavButton'),
	$menuDrawer = $('#menuDrawer');

	$menuButton.click(function(ev) {
		ev.preventDefault();
		toggle();
	});

	$menuDrawer.click(function(){
		if($(this).hasClass('open')){
			toggle();
		}
	});

	$(window).on('scroll', function() {
		// console.log(window.pageYOffset);
		if(window.pageYOffset >= 666) {
			$menuButton.addClass('scrolled');
		} else {
			$menuButton.removeClass('scrolled');
		}
	});

	function toggle(){
		$menuButton.toggleClass('open');
		$menuDrawer.toggleClass('open');
	}
});
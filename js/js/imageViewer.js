var $ = require('jquery');
require('../libs/flex-images.js'); // Collage view

$(function(){
	var flexConfig = {
		rowHeight:400
	};

	var $viewers = $('.full-screen'),
	$showButtons = $('.show-pictures'),
	$closeButton = $('.close-icon');

	$showButtons.click(showViewer);
	$closeButton.click(closeViewer);

	initFlex();

	function showViewer(ev){
		ev.preventDefault();
		$('body').addClass('noScroll');
		var targetID = $(this).attr('data-id'),
		$target = $('#' + targetID),
		$images = $target.find('.collageImage');
		$target.addClass('active');
		$images.hide();
		$images.each(function(i) {
			$(this).delay(i * 100).fadeIn(500);
		});
	}

	function closeViewer(ev){
		ev.preventDefault();
		$('.full-screen.active').removeClass('active');
		$('body').removeClass('noScroll');
	}

	function initFlex(){
		$viewers.each(function(){
			$(this).find('.photo-collage').flexImages({rowHeight:400});
		});
	}



	//$('body').addClass('noScroll');



});
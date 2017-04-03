var $ = require('jquery');
require('../libs/slideMan.js'); // Image slider

$(function() {
	var $slideshow = $('header'),
	$slides = $slideshow.find('.slides');

	loadSlides();

	function loadSlides() {
		$.ajax({
			url: baseURL + 'index/loadSlides/',
			success: function(data) {
				$slides.append(data);
				$slideshow.slideMan({
					speed : 1000,
					slideDuration : 5000
				});
			}
		});
	}
});
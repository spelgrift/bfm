var $ = require('jquery');
require('../libs/jquery.easing.js');
// require('../libs/scrollspy.js');

$(function() {
   // Page Scroll Navbars
   var $scrollNav = $('#scrollNav');
   var scrollNav_visible;
   var $pageScrollLinks = $('a.page-scroll');
   var correction = 15;

   // Show scroll nav on page load if already scrolled!
   if(window.pageYOffset > (window.innerHeight - 1)){
      showScrollNav();
   }

   // Show scroll nav when user scrolls below window height
   $( window ).on('scroll', function(){
      if(window.pageYOffset > (window.innerHeight - 1) && !scrollNav_visible ) {
         showScrollNav();
      }
   });

   // Hide scroll nav when user scrolls above window height
   $( window ).on('scroll', function(){
      if(window.pageYOffset < window.innerHeight && scrollNav_visible ) {
         hideScrollNav();
      }
   });

   // Scroll to selected section on click
   $pageScrollLinks.click(scrollPage);

   function showScrollNav(){
   	$scrollNav.addClass('open');
      scrollNav_visible = true;
   }

   function hideScrollNav(){
   	$scrollNav.removeClass('open');
      scrollNav_visible = false;
   }

   function scrollPage(ev){
      ev.preventDefault();
      var offset = $($(this).attr('href')).offset().top,
      thisCorrection;
      if($(this).attr('href') == '#walkaround'){
         thisCorrection = -50;
      } else {
         thisCorrection = correction;
      }
      $('html, body').stop().animate({
         scrollTop: offset + thisCorrection
      }, 1500, 'easeInOutExpo', function(){});
   }

});
var $ = require('jquery');
$(function() {
   // Page Scroll Navbars
   var $scrollNav = $('#scrollNav');
   var scrollNav_visible;

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

   function showScrollNav(){
   	$scrollNav.addClass('open');
      scrollNav_visible = true;
   }

   function hideScrollNav(){
   	$scrollNav.removeClass('open');
      scrollNav_visible = false;
   }
});
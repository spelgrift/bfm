var $ = require('jquery');
$(function() {
	if($('#error').length){
		setTimeout(function(){
			window.location.replace(baseURL);
		}, 3000);
	}
});
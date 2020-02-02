var $ = require('jquery');
var _ = require('../libs/helperFunctions.js');
$(function() {
	// Cache DOM
	var $form = $('#contactForm'),
	$inputs = $form.find('input'),
	$nameInput = $form.find('#nameInput'),
	$emailInput = $form.find('#emailInput'),
	$phoneInput = $form.find('#phoneInput'),
	$dateInput = $form.find('#dateInput'),
	$servicesInput = $form.find('#servicesInput'),
	$locationInput = $form.find('#locationInput'),
	$attendeesInput = $form.find('#attendeesInput'),
	$ageInput = $form.find('#ageInput'),
	$submit = $form.find('#submitContact'),
	$msg = $form.find('#contactMsg'),
	$processing = $form.find('#contactLoader');

	// On defocus, if input has value, continue to show the label
	$inputs.focusout(showLabel);

	// Submit
	$submit.click(submitForm);

	function submitForm(ev){
		ev.preventDefault();
		var data = {
			'name' : $nameInput.val(),
			'email' : $emailInput.val(),
			'phone' : $phoneInput.val(),
			'date' : $dateInput.val(),
			'location' : $locationInput.val(),
			'services' : $servicesInput.val(),
			'attendees' : $attendeesInput.val(),
			'age' : $ageInput.val(),
		};

		// Error check
		if(hasError(data)) {
			return;
		}

		$submit.hide();
		$processing.show();
		var url = baseURL + 'index/submitContact';
		_.post(url, data, submitSuccess, submitError);
	}

	function submitSuccess(data) {
		$processing.hide();
		$submit.show();
		$msg.html("Message Sent! We'll get back to you as soon as we can!");
		_.clearMsg($msg);
		resetForm();
	}

	function submitError(data) {
		$processing.hide();
		$submit.show();
		_.error(data.error_msg, $msg, $nameInput);
	}

	function resetForm() {
		$nameInput.val('').removeClass('hasValue');
		$emailInput.val('').removeClass('hasValue');
		$phoneInput.val('').removeClass('hasValue');
		$dateInput.val('').removeClass('hasValue');
		$locationInput.val('').removeClass('hasValue');
		$servicesInput.val('').removeClass('hasValue');
		$attendeesInput.val('').removeClass('hasValue');
		$ageInput.val('').removeClass('hasValue');
	}

	function hasError(data) {
		if(data.name.length < 1) {
			_.error("Please enter your name", $msg, $nameInput);
			return true;
		}
		if(data.email.length < 1) {
			_.error("Please enter your email address", $msg, $emailInput);
			return true;
		}
		if(!isEmail(data.email)) {
			_.error("Please enter a valid email address", $msg, $emailInput);
			return true;
		}
		if(data.date.length < 1) {
			_.error("Please enter a date and time", $msg, $dateInput);
			return true;
		}
		if(data.phone.length < 1) {
			_.error("Please enter your phone number", $msg, $phoneInput);
			return true;
		}
		if(data.location.length < 1) {
			_.error("Please enter the location of your event", $msg, $locationInput);
			return true;
		}
		if(data.services.length < 1) {
			_.error("Please enter the services you need from us", $msg, $servicesInput);
			return true;
		}
		return false;
	}

	function showLabel(){
		var $thisInput = $(this);
		if($thisInput.val() === '') {
			$thisInput.removeClass('hasValue');
			return;
		}
		$thisInput.addClass('hasValue');
	}

	function isEmail(email){
		return /^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/.test( email );
	}





});
<?php

class Index_Model extends Model {

	function __construct()
	{
		parent::__construct();
	}

	function loadImages($gal) {
		$directory = 'public/images/'.$gal;
		$files = glob($directory . "/*.jpg");
		$images = array();

		foreach($files as $image) {
			$dimensions = getimagesize($image);
			$images[] = array(
				'path' => $image,
				'width' => $dimensions[0],
				'height' => $dimensions[1]
			);
		}
		return $images;
	}

	function submitContact() {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
		$location = $_POST['location'];
		$services = $_POST['services'];
		$attendees = $_POST['attendees'];
		$age = $_POST['age'];

		if($name == "") {
			return $this->error("Please enter your name");
		}
		if($email == "") {
			return $this->error("Please enter your email address");
		}
		if(!$this->isValidEmail($email)) {
			return $this->error("Please enter a valid email address");
		}
		if($phone == "") {
			return $this->error("Please enter your phone number");
		}
		if($date == "") {
			return $this->error("Please enter the date and time for your event");
		}
		if($location == "") {
			return $this->error("Please enter the location of your event");
		}
		if($services == "") {
			return $this->error("Please enter the services your require");
		}

		$emailto = SENDTO;
		$emailfrom = $email;
		$fromname = $name;
		$subject = 'Quote request from '.$name;
		$headers = 
			'Return-Path: ' . $emailfrom . "\r\n" . 
			'From: <' . $emailfrom . '>' . "\r\n" . 
			'X-Priority: 3' . "\r\n" . 
			'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
			'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" . 
			'Content-Transfer-Encoding: 8bit' . "\r\n" . 
			'Content-Type: text/plain; charset=UTF-8' . "\r\n";
		$messagebody = 'Hi Kristen! '."\n\n" .
			$name.' at '.$email.', ('.$phone.') has requested a quote. Here are the details:'."\n\n".
			'Date and time: '.$date."\n\n".
			'Location: '.$location."\n\n".
			'Services: '.$services."\n\n".
			'Number of attendees: '.$attendees."\n\n".
			'Age of birthday child: '.$age."\n\n".
			"Love,\nYour Website :)";
		if(mail($emailto, $subject, $messagebody, $headers)){
			echo json_encode(array(
				'error' => false,
			));
		} else {
			return $this->error('Unknown Error');
		}
	}

	function error($message) {
		$results = array(
			'error' => true,
			'error_msg' => $message
		);
		echo json_encode($results);
		return false;
	}

	function isValidEmail($email) {
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

}

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

}

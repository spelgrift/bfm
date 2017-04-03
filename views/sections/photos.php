<?php 
	foreach($this->galleries as $gal => $images) {
		echo "<div id='".$gal."-photos' class='full-screen'>";
		require "views/components/closeBar.php";
		echo "<div class='photo-collage'>";
		foreach($images as $image) {
			$path = URL.$image['path'];
			$w = $image['width'];
			$h = $image['height'];

			echo "<div class='item collageImage' data-w='$w' data-h='$h'><img data-src='$path' src='".URL."public/images/blank.gif'></div>";
		}
		echo "</div></div>";
	}
?>


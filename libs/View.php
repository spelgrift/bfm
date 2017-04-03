<?php

class View {

		function __construct(){
			// echo 'The view.<br>';
		}

		public function render($name, $includeHeaders = true){
			if($includeHeaders) require 'views/inc/globalHeader.php';
			require 'views/' . $name . '.php';
			if($includeHeaders) require 'views/inc/globalFooter.php';
		}
}

?>
<?php

class Controller {

	function __construct(){
		$this->view = new View();
		Session::init();
	}

	public function loadModel($name){
		$path = 'models/'.$name.'_model.php';

		if(file_exists($path)){
			require $path;
			$modelName = $name . '_Model';
			$this->model = new $modelName;
		}
	}
}

?>
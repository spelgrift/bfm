<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();	

		$this->view->pageTitle = 'Slim Chance Circus';	
	}

	function index(){
		$this->view->galleries = array(
			'vshow' => $this->model->loadImages('vshow'),
			'walkaround' => $this->model->loadImages('walkaround'),
			'childrens' => $this->model->loadImages('childrens'),
		);
		$this->view->render('index/index');
	}

	function loadSlides(){
		// if($_SERVER['HTTP_ORIGIN'] == "http://www.barrelfullofmonkeys.com/"){
		// 	header('Access-Control-Allow-Origin: http://www.barrelfullofmonkeys.com/');
		// } 
		$headerURL = rtrim(URL, '/');
		header('Access-Control-Allow-Origin: '.$headerURL, false); 
		$this->view->render('inc/headerSlides', false);
	}

	function submitContact(){
		$headerURL = rtrim(URL, '/');
		header('Access-Control-Allow-Origin: '.$headerURL, false); 
		// if($_SERVER['HTTP_ORIGIN'] == "http://www.barrelfullofmonkeys.com/"){
		// 	header('Access-Control-Allow-Origin: http://www.barrelfullofmonkeys.com/');
		// }
		$this->model->submitContact();
	}

}
?>
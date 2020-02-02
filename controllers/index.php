<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();	

		$this->view->pageTitle = 'Barrel Full of Monkeys Entertainment';	
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
		$headerURL = rtrim(URL, '/');
		header('Access-Control-Allow-Origin: '.$headerURL, false); 
		$this->view->render('inc/headerSlides', false);
	}

	function submitContact(){
		$headerURL = rtrim(URL, '/');
		header('Access-Control-Allow-Origin: '.$headerURL, false); 
		$this->model->submitContact();
	}
}
?>
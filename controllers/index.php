<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();	

		$this->view->pageTitle = 'Barrel Full of Monkeys Entertainment';	
	}

	function index(){
		$this->view->render('index/index');
	}
}
?>
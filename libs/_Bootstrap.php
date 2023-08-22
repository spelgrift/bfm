<?php

class Bootstrap 
{

	private $_url = null;
	private $_controller = null;
	/**
	 *  __construct - Loads controller based on URL input
	 */
	function __construct(){}


	/**
	 *  init - Starts the bootstrap
	 */
	public function init()
	{
		// Sets the protected $_url
		$this->_getUrl();

		// Load default controller if no URL is set
		if (empty($this->_url[0]))
		{
			$this->_loadDefaultController();
			return false;
		}

		// Load existing controller if there is one
		$this->_loadController();

		// Call method on controller if there is one
		$this->_callControllerMethod();
	}


	/**
	 * Fetches the $_GET from the URL
	 */
	private function _getUrl()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim( $url, '/' );
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$this->_url = explode( '/', $url );
	}


	/**
	 *  Loads the default controller if no URL entered
	 */
	private function _loadDefaultController()
	{
		require 'controllers/index.php';
		$this->_controller = new Index();
		$this->_controller->loadModel('index');
		$this->_controller->index();
	}


	/**
	 *  Loads the given controller if one exists
	 */
	private function _loadController()
	{
		$file = 'controllers/' . $this->_url[0] . '.php';
		if(file_exists( $file ))
		{
			require $file;
			$this->_controller = new $this->_url[0];
			$this->_controller->loadModel($this->_url[0]);
		}
		else
		{
			$this->_error();
			return false;
		}
	}

	/**
	 *  Calls method on controller
	 */
	private function _callControllerMethod()
	{
		if(count($this->_url) > 1)
		{
			if(!method_exists($this->_controller, $this->_url[1]))
			{
				$this->_error();
			}
			$params = $this->_url;
			unset($params[0]); // removing controller
			unset($params[1]); // removing method

			call_user_func_array(array($this->_controller, $this->_url[1]), $params);
		}
		else
		{
			$this->_controller->index();
		}
	}



	private function _error()
	{
		require 'controllers/error.php';
		$this->_controller = new Error();
		$this->_controller->index();
		exit;
	}

}

?>
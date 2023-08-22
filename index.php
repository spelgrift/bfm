<?php

require 'config.php';

function autoloader($class){
	require LIBS . $class. ".php";
}

spl_autoload_register('autoloader');

$bootstrap =  new Bootstrap();
$bootstrap->init();

?>



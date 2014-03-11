<?php

// Config
require 'config.php';

// Set frontpage file
if(empty($_GET['url']))
	$_GET['url'] = 'frontpage';

// Create filename for controller
$filename = 'controller/'.$_GET['url'] . '.php';

// Check if controller exists
if(!file_exists($filename))
	die("File doesn\'t exist!" );

// Require controller
require $filename;

// Header
require 'view/header.php';

// Initiate controller
$classname = $_GET['url'];
$controller = new $classname();
echo $controller->showPage();

// Footer
require 'view/footer.php';

?>
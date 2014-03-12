<?php
session_start();

// Config
require 'config.php';

// Models
require 'model/user.php';
require 'model/activity.php';
require 'model/miscelaneous.php';

// User authentication/authorization
$userClass = new User();
if(isset($_POST['login'])) {
	if($userClass->authenticateUser($_POST['email'], $_POST['password'])) {
	}
}

// Log out
if(isset($_POST['logout'])) {
	$userClass->logOut();
}

// Set frontpage file
$parameters = array("", 0);
if(empty($_GET['url']))
	$parameters[0] = 'frontpage';
else {
	$parameters = explode('/', $_GET['url']);
	if($parameters[0] == 'selection' || $parameters[0] == 'activity') {
		$parameters[0] .= 'controller';
	}
}

// Create filename for controller
$filename = 'controller/'.$parameters[0].'.php';

// Check if controller exists
if(!file_exists($filename))
	die('File doesn\'t exist!');

// Require controller
require $filename;

// Header
require 'view/header.php';

// Initiate controller
$classname = $parameters[0];
$controller = new $classname();
echo $controller->showPage();

// Footer
require 'view/footer.php';

?>
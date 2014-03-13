<!DOCTYPE html>
<html>
<head>
	<title><?=PAGE_TITLE?></title>
	<link rel="stylesheet" type="text/css" href="/PJ2100-37.git/prototype/public/css/stylesheet.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h1><?=PAGE_TITLE?></h1>
	</header>
<?php
if(isset($message)) {
	echo '<div id="message"><p>'.$message.'</p></div>';
}
?>
	<div id="horizon">
		<div id="wrap">
			<section id="userbox">
<?php
// Initiate controller for user box
require 'controller/userbox.php';
$controller = new UserBox;
echo $controller->showUserBox();
?>
			</section>
			<section id="content">



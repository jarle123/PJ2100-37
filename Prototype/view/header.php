<!DOCTYPE html>
<html>
<head>
	<title><?=PAGE_TITLE?></title>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lato:300);

* {
	padding: 0; margin: 0; border: 0;
}

h2 {
	padding-bottom: 5px; margin-bottom: 20px; border-bottom: 2px solid #eeeeee; font:1.8em 'Lato';
}

ul {
	list-style-type: none;
}

label {
	display: none;
}

input, button {
	height: 35px; padding: 0 10px; border-radius: 5px; font:0.9em 'Lato';
}

input {
	margin-bottom: 10px; background: #eeeeee; color: #5d5d5d; text-shadow: 1px 1px #ffffff;
}

button {
	background: #b7e4ef; color: #ffffff; font-weight: bold; text-shadow: 1px 1px 0 #a5bfc5;
}

ul.selections li {
	margin: 0 1px 1px 0; float: left;
}

ul.selections li:nth-child(4), ul.selections li:nth-child(8), ul.selections li:nth-child(12) {
	margin-right: 0;
}

ul.selections li a {
	width: 100px; height: 100px; display: block; background: #b7e4ef; opacity: 0.5;
	-webkit-transition: opacity 1s;
}

ul.selections li a:hover {
	opacity: 1.0;
}

html {
	background: #e6e6e6; font: 1.0em Arial, Verdana, Tahoma; color: #5d5d5d;
}

header {
	display: none;
}

#horizon {
	width: 100%; height: 0; position: absolute; top: 50%; background: #ffffff;
}

#wrap {
	width: 1063px; height: 500px; margin: -250px 0 0 -532px; position: absolute; left: 50%;
}

section {
height: 460px; padding: 20px; float: left; background: #ffffff; box-shadow: 3px 3px 4px #d6d6d6;
}

#user, #content {
	margin-right: 20px;
}

#user {
	width: 200px;
}

#content {
	width: 403px;
}

#activities {
	width: 300px;
}

footer {
	display: none;
}
</style>
</head>
<body>
	<header>
		<h1><?=PAGE_TITLE?></h1>
	</header>
	<div id="horizon">
		<div id="wrap">
			<section id="user">
<?php
// Initiate controller for user box
require 'controller/userbox.php';
$controller = new UserBox;
echo $controller->showUserBox();
?>
			</section>
			<section id="content">


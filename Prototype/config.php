<?php

// Declare necessary constants
define("PAGE_TITLE", 'Westerdals Utvalg');
define("ROOT", '/PJ2100-37.git/prototype/');

// DB-connection
$db_host = "localhost";
$db_name = "test";
$db_user = "root";
$db_pass = "";

$database = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

?>
<?php

class UserBox
{
	function showUserBox() {
		global $userClass;
		global $user; 
		echo '<h2>Din bruker</h2>';

		if($userClass->isAuthorized()) {
			$user = $userClass->getUser($_SESSION['userId']);
			require 'view/_userloggedin.php';
		} else {
			require 'view/_loginform.php';
		}
	}
}

?>
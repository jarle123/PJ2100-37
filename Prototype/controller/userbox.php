<?php

class UserBox
{
	function showUserBox() {
		global $userClass;
		echo '<h2>Din bruker</h2>';

		if($userClass->isAuthorized()) {
			require 'view/_userloggedin.php';
		} else {
			require 'view/_loginform.php';
		}
	}
}

?>
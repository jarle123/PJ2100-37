<?php

class UserBox
{
	function showUserBox() {
		echo '<h2>Din bruker</h2>';
		require 'view/_loginform.php';
	}
}

?>
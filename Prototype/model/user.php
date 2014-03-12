<?php

class User
{
	function authenticateUser($email, $password) {
		global $database;
		$sql = $database->prepare("
			SELECT * FROM user 
			WHERE email = :email
			AND password = :password
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute(array("email" => $email, "password" => $password));

		if($sql->rowCount() > 0) {
			$this->authorizeUser($email);
			return true;
		}

		return false;
	}

	function authorizeUser($email) {
		$_SESSION['email'] = $email; 
	}

	function isAuthorized() {
		if(isset($_SESSION['email'])) {
			return true;
		}

		return false;
	}

	function logOut() {
		unset($_SESSION);
		session_destroy();

		return true;
	}
}

?>
<?php

class User
{
	function getUser($userId) {
		global $database;
		$sql = $database->prepare("
			SELECT * FROM user WHERE id = $userId
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetch();

		return $data;
	}

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
			$data = $sql->fetch();
			$this->authorizeUser($data->id);
			return true;
		}

		return false;
	}

	function authorizeUser($userId) {
		$_SESSION['userId'] = $userId; 
	}

	function isAuthorized() {
		if(isset($_SESSION['userId'])) {
			return true;
		}

		return false;
	}

	function logOut() {
		unset($_SESSION);
		session_destroy();

		return true;
	}

	function getUsersSelections($userId) {
		global $database;
		$sql = $database->prepare("
			SELECT selection.name, selection.id
			FROM user_selection
			JOIN user ON user_selection.user_id = user.id
			JOIN selection ON user_selection.selection_id = selection.id
			WHERE user_selection.user_id = $userId;
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		if($sql)

		$data = $sql->fetchAll();

		return $data;
	}

	function getUsersActivities($userId) {
		global $database;
		$sql = $database->prepare("
			SELECT activity.name, activity.id
			FROM user_activity
			JOIN user ON user_activity.user_id = user.id
			JOIN activity ON user_activity.activity_id = activity.id
			WHERE user_activity.user_id = $userId;
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		if($sql)

		$data = $sql->fetchAll();

		return $data;
	}
}

?>
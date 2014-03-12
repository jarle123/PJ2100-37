<?php

class Activity
{

	function getActivity($id = null) {
		global $database;
		$sql = $database->prepare("
			SELECT * FROM activity WHERE id = $id
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetch();

		return $data;
	}

	// Returns 
	function getActivities() {
		global $database;
		$sql = $database->prepare("
			SELECT activity.*, selection.name AS selection_name, selection.logo AS selection_logo 
			FROM activity
			JOIN selection ON activity.selection_id = selection.id
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetchAll();

		return $data;
	}
}

?>
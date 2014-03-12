<?php

class Selection
{
	function getSelection($id = null) {
		global $database;
		$sql = $database->prepare("
			SELECT * FROM selection WHERE id = $id
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetch();

		return $data;
	}

	function getSelections() {
		global $database;
		$sql = $database->prepare("
			SELECT * FROM selection
		");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetchAll();

		return $data;
	}
}

?>
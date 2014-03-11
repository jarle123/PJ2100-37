<?php

class Selection
{
	// Returns 
	function getSelections() {
		global $database;
		$sql = $database->prepare("SELECT * FROM selection");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();

		$data = $sql->fetchAll();

		return $data;
	}
}

?>
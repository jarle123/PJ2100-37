<?php

class Selection
{
	// Returns 
	function getSelections() {
$database = new PDO("mysql:host=localhost;dbname=test", 'root', '');
		$sql = $database->prepare("SELECT * FROM selections");
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$sql->execute();
		
		$data = $sql->fetch();

		return $data;
	}
}

?>
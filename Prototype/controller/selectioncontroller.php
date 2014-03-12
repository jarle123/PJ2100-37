<?php

class selectioncontroller
{
	function showPage()
	{
		global $parameters;

		// Get models
		require 'model/selection.php';

		// Create object
		$selectionClass = new Selection();

		$selection = $selectionClass->getSelection($parameters[1]);

		// Head
		echo '<h2>'.$selection->name.'</h2>';
		echo '<p>'.$selection->description.'</p>';
	}
}

?>
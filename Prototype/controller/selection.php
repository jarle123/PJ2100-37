<?php

class SelectionController
{
	function showPage()
	{
		// Get models
		require 'model/selection.php';

		// Head
		echo '<h2>lala</h2>';

		// Create object
		$selectionClass = new Selection();

		$selection = $selectionClass->getSelection();

		print_r($selection);
	}
}

?>
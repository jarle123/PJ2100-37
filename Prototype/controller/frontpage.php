<?php

class frontpage
{
	function showPage()
	{
		// Get models
		require 'model/selection.php';

		// Head
		echo '<h2>Utvalg</h2>';

		// Create object
		$selectionClass = new Selection();

		echo '<ul class="selections">';
		$selections = $selectionClass->getSelections();
		foreach ($selections as &$selection) {
			require 'view/_selection.php';
		}
		echo '</ul>';
	}
}

?>
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
		$selection = new Selection();

		echo '<ul class="selections">';
		$posts = $selection->getSelections();

		foreach ($posts as &$post) {
			require 'view/_selection.php';
		}
		echo '</ul>';
	}
}

?>
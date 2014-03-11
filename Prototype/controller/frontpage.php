<?php

class frontpage
{
	function showPage()
	{
		// Head
		echo '<h2>Utvalg</h2>';

		// Get models
		require 'model/selection.php';

		// Create object
		$selection = new Selection();

		$posts = $selection->getSelections();

		$properties = get_object_vars($posts);
		echo $properties['name'];
	}
}

?>
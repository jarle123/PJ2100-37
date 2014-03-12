<?php

class activitycontroller
{
	function showPage()
	{
		global $parameters;

		// Create object
		$activityClass = new Activity();

		$activity = $activityClass->getActivity($parameters[1]);

		// Head
		echo '<h2>'.$activity->name.'</h2>';
		echo '<p>'.$activity->description.'</p>';
	}
}

?>
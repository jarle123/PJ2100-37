<?php

class ActivityBox
{
	function showActivityBox() {
		// Get models
		require 'model/activity.php';

		// Head
		echo '<h2>Aktiviteter</h2>';

		// Create object
		$activityClass = new Activity();

		echo '<table>
				<tr>
					<th>Utvalg</th>
					<th>Aktivitet</th>
					<th>Tidspunkt</th>
				</tr>';
		$activities = $activityClass->getActivities();
		foreach ($activities as &$activity) {
			require 'view/_activity.php';
		}
		echo '</table>';
	}
}

?>
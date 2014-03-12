<?php

function timeFormat($datetime) {
	// Duplicate the time value
	$duplicate = $datetime;

	// Replace weekdays
	$replace = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
	$replaceWith = array("Mandag", "Tirsdag", "Onsdag", "Torsdag", "Fredag", "Lørdag", "Søndag");
	$strDay = date("D", strtotime($duplicate));	
	$strDay = str_replace($replace, $replaceWith, $strDay);

	// Format time
	$datetime = date("d.m H:i", strtotime($datetime));

	return $strDay." ".$datetime;
}

?>
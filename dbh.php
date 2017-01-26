<?php
	// Create connection
	$conn = mysql_connect("localhost", "root", "");

	// Check connection
	if (!$conn) {
    	die("Connection failed.");
		} 
?>
<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	//include("file_with_errors.php");


	if (!isset($_POST['data'])) {
		echo "No data";

	} else {

		// Store data
		$json = $_POST['data'];

		// Write JSON to file
		if (file_put_contents("data.json", $json))
		    echo "JSON file created successfully...";
		else 
		    echo "Oops! Error creating json file...";
	}
?>
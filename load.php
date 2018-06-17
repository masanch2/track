<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);


	$str_data = file_get_contents("data.json");

	echo $str_data;
?>
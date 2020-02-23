<?php
/* 
 * 
 * 
 * Regards, David.
 */
header('Content-Type: application/json');
include 'fizzbuzz.php';

$fb = $_GET["fb"];

if(!is_numeric($fb)){
	echo json_encode("");
}else{
	$results = [];
	for($i = 1; $i <= $fb; $i++){
		$results[] = fizzbuzz($i);
	}
	echo json_encode($results);
}
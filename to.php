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
}else if($fb > 10000){
	echo json_encode("You're kind of overdoing it...");
}else{
	$results = [];
	for($i = 1; $i <= $fb; $i++){
		$results[] = fizzbuzz($i);
	}
	echo json_encode($results);
}
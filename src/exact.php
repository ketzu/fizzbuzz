<?php
header('Content-Type: application/json');
include 'fizzbuzz.php';

$fb = $_GET["fb"];

if(!is_numeric($fb)){
	echo json_encode("");
}else{
	echo json_encode(fizzbuzz($fb));
}
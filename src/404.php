<?php
header('Content-Type: application/json');

$response = array('errorcode' => 404, 'error' => true, 'description' => 'Resource Not Found');
echo json_encode($response);
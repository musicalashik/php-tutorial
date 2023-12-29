<?php
/* 
php://input is a read-only stream that allows you to read raw data from the request body. In the context of PHP, 
when you're dealing with POST requests that send data in the request body (such as JSON data), 
you can use php://input to access that raw data directly.
Get the raw POST data from the request body
$inputData = file_get_contents('php://input');
*/



$inputData = json_decode(file_get_contents('php://input'), true);

// Simulate processing and preparing JSON response
$responseData = array(
    'title' => 'Sample Title',
    'completed' => true,
    'received_data' => $inputData
);

// Set the content type to JSON
header('Content-Type: application/json');

// Encode the data as JSON and echo it
echo json_encode($responseData);
?>

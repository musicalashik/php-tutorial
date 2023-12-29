<?php
// Simulate fetching data from a database or an API
$data = array(
    'title' => 'Sample Title',
    'completed' => true
);

// Set the content type to JSON
header('Content-Type: application/json');

// Encode the data as JSON and echo it
echo json_encode($data);
?>

<?php

// API endpoint URL
$url = 'http://api.isportsapi.com/sport/football/livescores?api_key=XJBWx9OO98m8Nsvp';

// Initialize cURL session
$curl = curl_init();

// Set cURL options
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'Authorization: XJBWx9OO98m8Nsvp',
        'Content-Type: application/json'
    )
));

// Execute the cURL request
$response = curl_exec($curl);

// Check for errors
if (curl_error($curl)) {
    $error_msg = curl_error($curl);
    // Handle error
    echo 'cURL Error: ' . $error_msg;
}

// Close cURL session
curl_close($curl);

// Process the response
if ($response) {
    $data = json_decode($response, true);
    // Process the retrieved data here
    var_dump($data);
} else {
    // Handle error
    echo 'Failed to retrieve data from API';
}

?>
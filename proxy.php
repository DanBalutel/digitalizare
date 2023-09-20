<?php

// Specify the target IP or domain.
$targetUrl = 'http://3.67.38.226:3000/';

// Enable CORS headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

// Respond to preflights
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

// Forward the request
$ch = curl_init();

// Set up CURL options
$options = array(
    CURLOPT_URL => $targetUrl . $_GET['path'], // Assuming you'll send the path as a query param, e.g., ?path=jspdf/generate-pdf
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => $_SERVER['REQUEST_METHOD'],
    CURLOPT_POSTFIELDS => file_get_contents('php://input'),
    CURLOPT_HTTPHEADER => getallheaders() // Forward the headers received
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Handle CURL errors
if (curl_errno($ch)) {
    http_response_code(500);
    echo 'Proxy server encountered an error: ' . curl_error($ch);
} else {
    http_response_code($httpCode);
    echo $response;
}

curl_close($ch);
?>

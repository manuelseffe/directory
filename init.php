<?php
require_once __DIR__ . '/config/config.php';

// Start session if needed
session_start();

// Get the requested URI
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove leading and trailing slashes
$request_uri = trim($request_uri, '/');

// Default to 'home' if no specific page is requested
if (empty($request_uri)) {
    $request_uri = 'home';
}

// Include the requested page dynamically
include_page($request_uri);
?>

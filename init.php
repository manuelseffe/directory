<?php

include "config/config.php";
include "config/initializer.php";



// Directory where your pages are stored
$pages_dir = 'pages/';

// Get the requested page from the URL, default to 'home' if not set
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Whitelist of allowed pages to prevent directory traversal attacks
$allowed_pages = ['home', 'about', 'contact'];

// Check if the requested page is allowed, else default to 'home'
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Construct the full path to the page
$page_path = $pages_dir . $page . '.php';

// Include the requested page if it exists
if (file_exists($page_path)) {
    include($page_path);
} else {
    // Optionally, include a 404 error page
    include($pages_dir . '404.php');
}
?>
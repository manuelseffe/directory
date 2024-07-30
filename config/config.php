<?php
// Define a base directory constant
define('BASE_DIR', dirname(__DIR__) . '/');

// Function to include files dynamically
function include_page($page) {
    $file = BASE_DIR . 'pages/' . $page . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        include BASE_DIR . 'pages/404.php';
    }
}
?>

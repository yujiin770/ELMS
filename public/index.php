<?php

// Define the base URL for your project (Important for XAMPP)
define('BASE_URL', '/elms/public/');

// This is the ONLY page we need to load.
$page = __DIR__ . '/../src/Views/pages/auth-container.php';

// Include the layout file, which will render everything.
include __DIR__ . '/../src/Views/layouts/auth.php';

?>
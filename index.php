<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove base folder name if you're running under a subfolder (like /itsmytvmunofficial)
$base = '/itsmytvmunofficial';
$uri = substr($uri, strlen($base));

// Trim trailing slash
$uri = rtrim($uri, '/');

// Routing
switch ($uri) {
    case '':
    //case '/home':
        include 'views/home.php';
        break;
    case '/explore':
        include 'views/explore.php';
        break;
    case '/contribute':
        include 'views/contribute.php';
        break;
    case '/about':
        include 'views/about.php';
        break;
    default:
        http_response_code(404);
        echo "<h1>404 Not Found</h1>";
        break;
}
?>

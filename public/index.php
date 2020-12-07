<?php

session_start();

$baseDir = dirname(__DIR__) . DIRECTORY_SEPARATOR;
$appDir = $baseDir . 'app' . DIRECTORY_SEPARATOR;
$controllersDir = $appDir . 'controllers' . DIRECTORY_SEPARATOR;
$modelsDir = $appDir . 'models' . DIRECTORY_SEPARATOR;
$viewsDir = $appDir . 'views' . DIRECTORY_SEPARATOR;

$routes = [
    'get@auth.login' => $controllersDir . 'auth' . DIRECTORY_SEPARATOR . 'login.php',
    'post@auth.login' => $controllersDir . 'auth' . DIRECTORY_SEPARATOR . 'login.php',
    'get@auth.show' => $controllersDir . 'auth' . DIRECTORY_SEPARATOR . 'show.php',
    'get@auth.logout' => $controllersDir . 'auth' . DIRECTORY_SEPARATOR . 'logout.php',
    'get@post.index' => $controllersDir . 'post' . DIRECTORY_SEPARATOR . 'index.php',
    'get@post.show' => $controllersDir . 'post' . DIRECTORY_SEPARATOR . 'show.php',
    'get@post.create' => $controllersDir . 'post' . DIRECTORY_SEPARATOR . 'create.php',
    'post@post.store' => $controllersDir . 'post' . DIRECTORY_SEPARATOR . 'store.php',
];

$route = strtolower($_SERVER['REQUEST_METHOD']) . '@' . $_REQUEST['route'];

if (isset($routes[$route])) {
    $filename = $routes[$route];

    if (file_exists($filename)) {
        require $filename;
        exit(0);
    }
}

header('HTTP/1.1 404');
echo '404 - Not Found!';

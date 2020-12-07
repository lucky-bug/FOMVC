<?php

if (!isset($_SESSION['user'])) {
    header('Location: /?route=auth.login');
    exit();
}

$user = $_SESSION['user'];

var_dump($user);

global $viewsDir;

include $viewsDir . 'auth' . DIRECTORY_SEPARATOR . 'show.php';

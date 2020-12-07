<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    global $viewsDir;

    include $viewsDir . 'auth' . DIRECTORY_SEPARATOR . 'login.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require $modelsDir . 'user' . DIRECTORY_SEPARATOR . 'select.php';

    if (isset($user)) {
        $_SESSION['user'] = $user;
        header('Location: /?route=auth.show');
    } else {
        header('Location: /?route=auth.login');
    }
}

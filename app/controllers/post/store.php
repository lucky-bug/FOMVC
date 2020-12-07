<?php

$post = [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => $_POST['user_id'],
];

global $modelsDir;

require $modelsDir . 'post' . DIRECTORY_SEPARATOR . 'insert.php';

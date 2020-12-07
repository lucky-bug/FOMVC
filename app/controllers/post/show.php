<?php

global $modelsDir;

$postId = 3;

require $modelsDir . 'post' . DIRECTORY_SEPARATOR . 'select.php';

$title = $post['title'];
$body = $post['body'];

include $viewsDir . 'post' . DIRECTORY_SEPARATOR . 'show.php';

<?php

session_destroy();

header('Location: /?route=auth.login');

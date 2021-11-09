<?php


spl_autoload_register(function ($class) {

    // convert \ to / to become a path to file
    $class = str_replace('\\', '/', $class);
    if (file_exists(__DIR__ . '/' . $class . '.php')) {
        require __DIR__ . '/' . $class . '.php';
    }
});

use app\core\App;
$DOC_ROOT = $_SERVER['SERVER_NAME'];

$app = new App();

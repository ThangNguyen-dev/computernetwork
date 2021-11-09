<?php


spl_autoload_register(function ($class) {

    // convert \ to / to become a path to file
    $class = str_replace('\\', '/', $class);
    if (file_exists(__DIR__ . '/' . $class . '.php')) {
        require __DIR__ . '/' . $class . '.php';
    }
});
use app\core\App;

// require_once __DIR__ . '/app/core/App.php';
// require_once __DIR__ . '/config/Database.php';
// require_once __DIR__ . '/app/core/Controller.php';
// require_once __DIR__ . '/app/controllers/HomeController.php';
// require_once __DIR__ . '/app/core/asset.php';
// require_once __DIR__ . '/app/core/Model.php';
// require_once __DIR__ . '/app/models/User.php';
// require_once __DIR__ . '/app/models/Post.php';

$app = new App();

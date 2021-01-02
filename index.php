<?php

require_once realpath(__DIR__ . '/core/vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);

$dotenv->load();

spl_autoload_register(function ($class) {
    $model = explode("\\", $class);
    require_once __DIR__ . '/Models/' . $model[0] . '.php';
});

require_once __DIR__ . '/core/Database.php';

require_once __DIR__ . '/core/DB.php';

require_once __DIR__ . '/core/Response.php';

require_once __DIR__ . '/core/Request.php';

require_once __DIR__ . '/core/Helpers.php';

require_once __DIR__ . '/core/Controller.php';

require_once __DIR__ . '/Models/Auth.php';

require_once __DIR__ . '/core/Route.php';

require_once __DIR__ . '/start/routes.php';

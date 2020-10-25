<?php

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once realpath(__DIR__.'/core/vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);

$dotenv->load();

spl_autoload_register(function ($class) {
    require_once __DIR__.'/Models/'.$class.'.php';
});

require_once __DIR__.'/core/Database.php';

require_once __DIR__.'/core/DB.php';

require_once __DIR__.'/core/Response.php';

require_once __DIR__.'/core/Request.php';

require_once __DIR__.'/core/Helpers.php';

require_once __DIR__.'/core/Controller.php';

require_once __DIR__.'/Models/Auth.php';

require_once __DIR__.'/core/Route.php';

require_once __DIR__.'/start/routes.php';

?>
<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// You can check database connection after Laravel is bootstrapped
// if ($app->bound('db')) {
//     try {
//         \Illuminate\Support\Facades\DB::connection()->getPdo();
//         echo "Connected to database " . \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
//     } catch (\Exception $e) {
//         echo "Could not connect to the database. Error: " . $e->getMessage();
//     }
// }

$kernel = $app->make(\Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

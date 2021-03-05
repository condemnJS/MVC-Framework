<?php
// Application Start
use core\Application;
// Autoload Classes
require_once '../autoload.php';
require_once __DIR__ . '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        'table' => $_ENV['DB_DATABASE'],
    ]
];
$app = new Application(dirname(__DIR__), $config);

// ------- Routes -------
require_once '../routes/web.php';

$app->run();

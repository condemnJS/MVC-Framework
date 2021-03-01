<?php
// Application Start

// Autoload Classes
require_once '../autoload.php';

use vendor\core\Application;
$app = new Application(dirname(__DIR__));

// ------- Routes -------
require_once '../routes/web.php';

$app->run();

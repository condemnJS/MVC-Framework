<?php
// Application Start

// Autoload Classes
require_once '../autoload.php';

use vendor\core\Application;

$app = new Application();

// ------- Routes -------
require_once '../routes/web.php';

$app->run();

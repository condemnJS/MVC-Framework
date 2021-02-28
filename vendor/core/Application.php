<?php


namespace vendor\core;

use vendor\core\Route;
use vendor\core\Request;

class Application
{
    public Route $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Route($this->request);
    }

    public function run() :void
    {
        $this->router->resolve();
    }
}

<?php


namespace vendor\core;

use vendor\core\Route;
use vendor\core\Request;

class Application
{
    public static string $ROOT_DIR;
    public Route $router;
    public Request $request;
    public Response $response;
    public static Application $app;

    public function __construct(string $dirname)
    {
        self::$ROOT_DIR = $dirname;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Route($this->request, $this->response);
    }

    public function run()
    {
        $this->router->resolve();
    }

    public static function debug($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
}

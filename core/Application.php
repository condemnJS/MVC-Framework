<?php


namespace core;

use core\Route;
use core\Request;

class Application
{
    public static string $ROOT_DIR;
    public Route $router;
    public Request $request;
    public Response $response;
    public DB $db;
    public static Application $app;
    public Session $session;

    public function __construct(string $dirname, array $config)
    {
        self::$ROOT_DIR = $dirname;
        self::$app = $this;
        $this->db = new DB($config['db']);
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
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

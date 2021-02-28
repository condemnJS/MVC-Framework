<?php

namespace vendor\core;

use http\Params;
use vendor\core\Request;

class Route
{
    public Request $request;

    protected static array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public static function get($path, $callback)
    {
        self::$routes['get'][$path] = $callback;
    }

    public static function post()
    {

    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $callback = self::$routes[$method][$path] ?? false;
        if (!$callback) {
            echo 'Not Found';
            exit;
        }
        if(is_array($callback)) {
            return $this->render($callback);
        }
        call_user_func($callback);
    }

    public function render($callback)
    {
        call_user_func($callback);
    }
}

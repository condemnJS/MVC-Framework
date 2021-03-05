<?php

namespace core;

use core\Request;

class Route
{
    public Request $request;
    public Response $response;

    protected static array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public static function get(string $path, $callback)
    {
        self::$routes['get'][$path] = $callback;
    }

    public static function post(string $path, $callback)
    {
        self::$routes['post'][$path] = $callback;
    }

    public static function match(array $params, string $path, $callback)
    {
        foreach ($params as $param) {
            self::$routes[$param][$path] = $callback;
        }
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $callback = self::$routes[$method][$path] ?? false;
        if (!$callback) {
            $this->response->setStatusCode(404);
            return "Not Found";
        }
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }
        return call_user_func($callback, $this->request);
    }

    public function render($callback)
    {
        $layoutContent = $this->layout();
        $renderView = $this->renderOnlyView($callback[1]);
        return str_replace('{{content}}', $renderView, $layoutContent);
    }

    protected function layout()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/app/views/layouts/main.php";
        return ob_get_clean();
    }

    public function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/app/views/$view.php";
        return ob_get_clean();
    }
}

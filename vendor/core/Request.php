<?php


namespace vendor\core;


class Request
{
    public function path(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}

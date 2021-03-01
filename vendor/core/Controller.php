<?php


namespace vendor\core;


class Controller
{
    public function view(string $path, array $params)
    {
        foreach ($params as $key => $param) {
            $$key = $param;
        }
//        var_dump($tatar);
        $path = $this->rebuildPath($path);
        require_once Application::$ROOT_DIR . "/app/views" . "/$path" . ".php";
    }

    protected function rebuildPath(string $path)
    {
        $pathArr = explode('.', $path);
        $new_path = '';
        foreach ($pathArr as $key => $item) {
            if ($key === count($pathArr) - 1) {
                $new_path .= $item;
            } else {
                $new_path .= $item . '/';
            }
        }
        return $new_path;
    }
}

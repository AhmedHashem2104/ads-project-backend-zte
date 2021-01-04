<?php

class Route
{
    public static function get($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $path_info = $_SERVER['REQUEST_URI'];
            $path_info_test = explode('/', $path_info);
            if ($path != '/') {
                $path_test = explode('/', $path);
                $checked_path = '';
                foreach ($path_test as $key => $value) {
                    if (empty($value)) {
                        continue;
                    } else if (strstr($value, ':')) {
                        $one_path = str_replace(':', '', $path_test[$key]);
                        @$_GET[$one_path] = $path_info_test[$key];
                        $checked_path .= "/" . $_GET[$one_path];
                    } else {
                        $checked_path .= "/" . $path_test[$key];
                    }
                }
                if ($path_info == $checked_path) {
                    if (strpos($controller, ".")) {
                        $orb = explode('.', $controller);
                        $func = $orb[1];
                        require_once dirname(dirname(__FILE__)) . '/App/Controllers/' . $orb[0] . '.php';
                        $controllerName = ucfirst($orb[0]);

                        $controllerName = explode('/', $controllerName);
                        if (sizeof(($controllerName)) >= 1) {
                            $lastController = sizeof(($controllerName)) - 1;
                            $controllerObj  = new $controllerName[$lastController]();
                        } else {
                            $controllerObj  = new $controllerName();
                        }

                        echo $controllerObj->$func(new Response(false), new Request(false), new Auth(false));
                    } else {
                        echo $controller;
                    }
                }
            }
        }
    }
    public static function post($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $path_info = $_SERVER['REQUEST_URI'];
            $path_info_test = explode('/', $path_info);
            if ($path != '/') {
                $path_test = explode('/', $path);
                $checked_path = '';
                foreach ($path_test as $key => $value) {
                    if (empty($value)) {
                        continue;
                    } else if (strstr($value, ':')) {
                        $one_path = str_replace(':', '', $path_test[$key]);
                        @$_GET[$one_path] = $path_info_test[$key];
                        $checked_path .= "/" . $_GET[$one_path];
                    } else {
                        $checked_path .= "/" . $path_test[$key];
                    }
                }
                if ($path_info == $checked_path) {
                    if (strpos($controller, ".")) {
                        $orb = explode('.', $controller);
                        $func = $orb[1];
                        require_once dirname(dirname(__FILE__)) . '/App/Controllers/' . $orb[0] . '.php';
                        $controllerName = ucfirst($orb[0]);

                        $controllerName = explode('/', $controllerName);
                        if (sizeof(($controllerName)) >= 1) {
                            $lastController = sizeof(($controllerName)) - 1;
                            $controllerObj  = new $controllerName[$lastController]();
                        } else {
                            $controllerObj  = new $controllerName();
                        }

                        echo $controllerObj->$func(new Response(false), new Request(false), new Auth(false));
                    } else {
                        echo $controller;
                    }
                }
            }
        }
    }
    public static function put($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "PUT") {
            $path_info = $_SERVER['REQUEST_URI'];
            $path_info_test = explode('/', $path_info);
            if ($path != '/') {
                $path_test = explode('/', $path);
                $checked_path = '';
                foreach ($path_test as $key => $value) {
                    if (empty($value)) {
                        continue;
                    } else if (strstr($value, ':')) {
                        $one_path = str_replace(':', '', $path_test[$key]);
                        @$_GET[$one_path] = $path_info_test[$key];
                        $checked_path .= "/" . $_GET[$one_path];
                    } else {
                        $checked_path .= "/" . $path_test[$key];
                    }
                }
                if ($path_info == $checked_path) {
                    if (strpos($controller, ".")) {
                        $orb = explode('.', $controller);
                        $func = $orb[1];
                        require_once dirname(dirname(__FILE__)) . '/App/Controllers/' . $orb[0] . '.php';
                        $controllerName = ucfirst($orb[0]);

                        $controllerName = explode('/', $controllerName);
                        if (sizeof(($controllerName)) >= 1) {
                            $lastController = sizeof(($controllerName)) - 1;
                            $controllerObj  = new $controllerName[$lastController]();
                        } else {
                            $controllerObj  = new $controllerName();
                        }

                        echo $controllerObj->$func(new Response(false), new Request(false), new Auth(false));
                    } else {
                        echo $controller;
                    }
                }
            }
        }
    }
    public static function patch($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "PATCH") {
            $path_info = $_SERVER['REQUEST_URI'];
            $path_info_test = explode('/', $path_info);
            if ($path != '/') {
                $path_test = explode('/', $path);
                $checked_path = '';
                foreach ($path_test as $key => $value) {
                    if (empty($value)) {
                        continue;
                    } else if (strstr($value, ':')) {
                        $one_path = str_replace(':', '', $path_test[$key]);
                        @$_GET[$one_path] = $path_info_test[$key];
                        $checked_path .= "/" . $_GET[$one_path];
                    } else {
                        $checked_path .= "/" . $path_test[$key];
                    }
                }
                if ($path_info == $checked_path) {
                    if (strpos($controller, ".")) {
                        $orb = explode('.', $controller);
                        $func = $orb[1];
                        require_once dirname(dirname(__FILE__)) . '/App/Controllers/' . $orb[0] . '.php';
                        $controllerName = ucfirst($orb[0]);

                        $controllerName = explode('/', $controllerName);
                        if (sizeof(($controllerName)) >= 1) {
                            $lastController = sizeof(($controllerName)) - 1;
                            $controllerObj  = new $controllerName[$lastController]();
                        } else {
                            $controllerObj  = new $controllerName();
                        }

                        echo $controllerObj->$func(new Response(false), new Request(false), new Auth(false));
                    } else {
                        echo $controller;
                    }
                }
            }
        }
    }
    public static function delete($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
            $path_info = $_SERVER['REQUEST_URI'];
            $path_info_test = explode('/', $path_info);
            if ($path != '/') {
                $path_test = explode('/', $path);
                $checked_path = '';
                foreach ($path_test as $key => $value) {
                    if (empty($value)) {
                        continue;
                    } else if (strstr($value, ':')) {
                        $one_path = str_replace(':', '', $path_test[$key]);
                        @$_GET[$one_path] = $path_info_test[$key];
                        $checked_path .= "/" . $_GET[$one_path];
                    } else {
                        $checked_path .= "/" . $path_test[$key];
                    }
                }
                if ($path_info == $checked_path) {
                    if (strpos($controller, ".")) {
                        $orb = explode('.', $controller);
                        $func = $orb[1];
                        require_once dirname(dirname(__FILE__)) . '/App/Controllers/' . $orb[0] . '.php';
                        $controllerName = ucfirst($orb[0]);

                        $controllerName = explode('/', $controllerName);
                        if (sizeof(($controllerName)) >= 1) {
                            $lastController = sizeof(($controllerName)) - 1;
                            $controllerObj  = new $controllerName[$lastController]();
                        } else {
                            $controllerObj  = new $controllerName();
                        }

                        echo $controllerObj->$func(new Response(false), new Request(false), new Auth(false));
                    } else {
                        echo $controller;
                    }
                }
            }
        }
    }


    public static function resource($path, $controller)
    {
        Route::get($path, $controller . '.index');
        Route::get($path . '/:id', $controller . '.show');
        Route::post($path, $controller . '.store');
        Route::put($path . '/:id', $controller . '.update');
        Route::delete($path . '/:id', $controller . '.destroy');
        return true;
    }
}

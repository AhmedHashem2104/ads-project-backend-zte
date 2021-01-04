<?php

class Route
{
    public static function get($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET" or $_SERVER['REQUEST_METHOD'] == "get") {
            $path_info = $_SERVER['REQUEST_URI'];
            if ($path_info[-1] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 0, -1);
            }
            if ($path_info[0] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 1);
            }

            if ($path[-1] == '/' && $path != '/') {
                $path = substr($path, 0, -1);
            }

            if ($path[0] == '/' && $path != '/') {
                $path = substr($path, 1) ? substr($path, 1) : '';
            }
            if ($path_info != '/') {
                $path_info_test = explode('/', $path_info);
            } else {
                $path_info_test = $path_info;
            }
            if ($path != '/') {
                $path_test = explode('/', $path);
            } else {
                $path_test = array($path);
            }
            $checked_path = '';
            foreach ($path_test as $key => $pt) {
                if (strstr($pt, ':')) {
                    $path_test_new = str_replace(':', '', $path_test[$key]);
                    @$_GET[$path_test_new] = $path_info_test[$key];
                    if (next($path_test) != true)
                        @$checked_path .= $path_info_test[$key];
                    else
                        $checked_path .= $pt . '/';
                } else {
                    if (next($path_test) != true)
                        $checked_path .= $path_test[$key];
                    else
                        $checked_path .= $pt . '/';
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
        return true;
    }
    public static function post($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" or $_SERVER['REQUEST_METHOD'] == "post") {
            $path_info = $_SERVER['REQUEST_URI'];
            if ($path_info[-1] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 0, -1);
            }
            if ($path_info[0] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 1);
            }
            if ($path[-1] == '/' && $path != '/') {
                $path = substr($path, 0, -1);
            }
            if ($path[0] == '/' && $path != '/') {
                $path = substr($path, 1) ? substr($path, 1) : '';
            }
            $path_info_test = explode('/', $path_info);
            $path_test = explode('/', $path);
            $checked_path = '';
            foreach ($path_test as $key => $pt) {
                if (strstr($pt, ':')) {
                    $path_test_new = str_replace(':', '', $path_test[$key]);
                    @$_GET[$path_test_new] = $path_info_test[$key];
                    if (next($path_test) != true)
                        $checked_path .= $path_info_test[$key];
                    else
                        $checked_path .= $pt . '/';
                } else {
                    if (next($path_test) != true)
                        $checked_path .= $path_test[$key];
                    else
                        $checked_path .= $pt . '/';
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
        return true;
    }
    public static function put($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "PUT" or $_SERVER['REQUEST_METHOD'] == "put") {
            $path_info = $_SERVER['REQUEST_URI'];
            if ($path_info[-1] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 0, -1);
            }
            if ($path_info[0] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 1);
            }
            if ($path[-1] == '/' && $path != '/') {
                $path = substr($path, 0, -1);
            }
            if ($path[0] == '/' && $path != '/') {
                $path = substr($path, 1) ? substr($path, 1) : '';
            }
            $path_info_test = explode('/', $path_info);
            $path_test = explode('/', $path);
            $checked_path = '';
            foreach ($path_test as $key => $pt) {
                if (strstr($pt, ':')) {
                    $path_test_new = str_replace(':', '', $path_test[$key]);
                    @$_GET[$path_test_new] = $path_info_test[$key];
                    if (next($path_test) != true)
                        $checked_path .= $path_info_test[$key];
                    else
                        $checked_path .= $pt . '/';
                } else {
                    if (next($path_test) != true)
                        $checked_path .= $path_test[$key];
                    else
                        $checked_path .= $pt . '/';
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
        return true;
    }
    public static function patch($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "PATCH" or $_SERVER['REQUEST_METHOD'] == "patch") {
            $path_info = $_SERVER['REQUEST_URI'];
            if ($path_info[-1] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 0, -1);
            }
            if ($path_info[0] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 1);
            }
            if ($path[-1] == '/' && $path != '/') {
                $path = substr($path, 0, -1);
            }
            if ($path[0] == '/' && $path != '/') {
                $path = substr($path, 1) ? substr($path, 1) : '';
            }
            $path_info_test = explode('/', $path_info);
            $path_test = explode('/', $path);
            $checked_path = '';
            foreach ($path_test as $key => $pt) {
                if (strstr($pt, ':')) {
                    $path_test_new = str_replace(':', '', $path_test[$key]);
                    @$_GET[$path_test_new] = $path_info_test[$key];
                    if (next($path_test) != true)
                        $checked_path .= $path_info_test[$key];
                    else
                        $checked_path .= $pt . '/';
                } else {
                    if (next($path_test) != true)
                        $checked_path .= $path_test[$key];
                    else
                        $checked_path .= $pt . '/';
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
        return true;
    }
    public static function delete($path, $controller)
    {
        if ($_SERVER['REQUEST_METHOD'] == "DELETE" or $_SERVER['REQUEST_METHOD'] == "delete") {
            $path_info = $_SERVER['REQUEST_URI'];
            if ($path_info[-1] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 0, -1);
            }
            if ($path_info[0] == '/' && $path_info != '/') {
                $path_info = substr($path_info, 1);
            }
            if ($path[-1] == '/' && $path != '/') {
                $path = substr($path, 0, -1);
            }
            if ($path[0] == '/' && $path != '/') {
                $path = substr($path, 1) ? substr($path, 1) : '';
            }
            $path_info_test = explode('/', $path_info);
            $path_test = explode('/', $path);
            $checked_path = '';
            foreach ($path_test as $key => $pt) {
                if (strstr($pt, ':')) {
                    $path_test_new = str_replace(':', '', $path_test[$key]);
                    @$_GET[$path_test_new] = $path_info_test[$key];
                    if (next($path_test) != true)
                        $checked_path .= $path_info_test[$key];
                    else
                        $checked_path .= $pt . '/';
                } else {
                    if (next($path_test) != true)
                        $checked_path .= $path_test[$key];
                    else
                        $checked_path .= $pt . '/';
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
        return true;
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

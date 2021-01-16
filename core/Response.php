<?php

use Jenssegers\Blade\Blade;

class Response
{
    public static function view($parm, $data = array(false))
    {
        if (file_exists(dirname(dirname(__FILE__)) . '/views/' . $parm . '.blade.php')) {
            // header("Location: /contact-us");
            $blade = new Blade('views', 'cache');
            if ($data) {
                echo $blade->render($parm, $data);
            } else {
                echo $blade->render($parm);
            }
        }
    }

    public static function back()
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public static function status($statusCode)
    {
        http_response_code($statusCode);
        $self = new self;
        return $self;
    }

    public static function json($string)
    {
        header("Access-Control-Allow-Origin: *");

        header("Content-Type: application/json; charset=UTF-8");

        header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

        header("Access-Control-Max-Age: 3600");

        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        if (is_array($string) or is_object($string)) {
            return json_encode($string, JSON_UNESCAPED_UNICODE);
        }
        return $string;
    }

    public static function view_error()
    {
        header('HTTP/1.1 404 Not Found');
        require_once dirname(dirname(__FILE__)) . '/core/errors.php';
    }

    public static function access_denied()
    {
        header('HTTP/1.1 503 Not Found');
        require_once dirname(dirname(__FILE__)) . '/core/access_denied.php';
    }
}

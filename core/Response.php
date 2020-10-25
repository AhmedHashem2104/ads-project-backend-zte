<?php 

class Response
{

    public function view($parm, $data = false)
    {

        if (file_exists(dirname(dirname(__FILE__)) . '/views/' . $parm . '.native.php')) {

            require_once dirname(dirname(__FILE__)) . '/views/' . $parm . '.native.php';

        }

    }

    public function json($string)
    {
        if (is_array($string) or is_object($string)) {

            return json_encode($string , JSON_UNESCAPED_UNICODE);

        } 

    }

    public function view_error()
    {

        header('HTTP/1.1 404 Not Found');

        require_once dirname(dirname(__FILE__)) . '/core/errors.php';

    }

    public function access_denied()
    {

        header('HTTP/1.1 503 Not Found');

        require_once dirname(dirname(__FILE__)) . '/core/access_denied.php';

    }

}

?>
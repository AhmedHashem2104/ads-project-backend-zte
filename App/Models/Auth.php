<?php

class Auth extends Controller
{

    public function table()
    {
        return "users";
    }

    public static function hash($data)
    {

        $password = password_hash($data, PASSWORD_DEFAULT);

        return $password;
    }

    public static function invoke($email, $password)
    {

        $data = DB::rawOneQuery("SELECT * FROM users WHERE email = '$email' LIMIT 1");

        if ($data) {

            $id = $data['id'];

            $password_check = $data['password'];

            $verify = password_verify($password, $password_check);

            if ($verify) {

                $token = password_hash($email, PASSWORD_DEFAULT) . '!' . password_hash($email, PASSWORD_DEFAULT);

                $query = DB::updateQuery("UPDATE users SET token = '$token' WHERE email = '$email' and id = '$id' and password = '$password_check'");

                if ($query) {

                    return array('Type' => 'Bearer', 'Token' => $token);
                } else {
                    http_response_code(401);
                    die(Response::json(array('message' => 'Fail')));
                }
            }
        }

        http_response_code(400);
        die(Response::json(array('message' => 'Wrong Email or Password')));
    }

    public static function authenticate()
    {

        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }

        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                $token = $matches[1];

                $data = DB::rawOneQuery("SELECT * FROM users WHERE token = '$token'");
                if (!is_array($data)) {
                    http_response_code(401);
                    die(Response::json(array('Access' => 'Failed', 'Token' => 'Invalid Personal API Token')));
                }

                return (object)$data;
            }
        }
        http_response_code(401);
        die(Response::json(array('Access' => 'Failed', 'Token' => 'Requied Personal API')));
    }

    public static function revoke()
    {

        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }

        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                $token = $matches[1];

                $data = DB::rawQuery("SELECT * FROM users WHERE token = '$token'");

                if (!is_array($data)) {
                    http_response_code(400);
                    die(Response::json(array('Access' => 'Failed', 'Token' => 'Invalid Personal API Token')));
                }
                $email = $data[0]['email'];
                $id = $data[0]['id'];

                $query = DB::updateQuery("UPDATE users SET token = NULL WHERE email = '$email' and id = '$id' and token = '$token'");

                if ($query) {
                    return true;
                }
                return false;
            }
        }
        http_response_code(401);
        die(Response::json(array('Access' => 'Failed', 'Token' => 'Requied Personal API')));
    }
}

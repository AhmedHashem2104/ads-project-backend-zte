<?php

class Request
{

  private static $errors = array();

  public static $file;

  public static function validate($src, $rules = [])
  {

    if (is_object($src)) {
      $src = json_decode(json_encode($src), true);
    }

    $state = false;

    foreach ($rules as $item => $item_value) {

      $data = explode('|', $item_value);

      foreach ($data as $value) {

        $new_data = explode(':', $value);

        if (is_array($new_data) and sizeof($new_data) > 1) {

          if ($new_data[0] == 'min' and isset($src[$item]) and !empty($src[$item]) and strlen($src[$item]) < $new_data[1]) {

            $state = true;

            self::addError($item, $item . ' should be minimum ' . $new_data[1] . ' characters');
          } else if ($new_data[0] == 'max' and isset($src[$item]) and !empty($src[$item]) and strlen($src[$item]) > $new_data[1]) {

            $state = true;

            self::addError($item, $item . ' should be maximum ' . $new_data[1] . ' characters');
          } else if ($new_data[0] == 'unique' and isset($src[$item]) and !empty($src[$item])) {

            $query = DB::rawQuery("SELECT * FROM " . $new_data[1] . " WHERE " . $item . " = '$src[$item]'");

            if ($query) {
              self::addError($item, $item . ' should be unique.');
            }
          }
        } else {

          if ($value == 'required' and (!isset($src[$item]) or empty($src[$item]))) {

            $state = true;

            self::addError($item, $item . ' is required');
          } else if ($value == 'slug') {
            $src[$item] = str_replace(' ', '-', $src[$item]);
          } else if ($value == 'int' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_INT)) {

            self::addError($item, $item . ' should be integer');
          } else if ($value == 'float' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_FLOAT)) {

            self::addError($item, $item . ' should be float');
          } else if ($value == 'string' and (isset($src[$item]) or !empty($src[$item])) and intval($src[$item]) != 0) {

            self::addError($item, $item . ' should be string');
          } else if ($value == 'email' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_EMAIL)) {

            $state = true;

            self::addError($item, $item . ' should be valid email');
          }
        }
      }

      if ($state) {

        break;
      }
    }
  }

  public static function validateAll($src, $rules = [])
  {

    if (is_object($src)) {
      $src = (array) json_decode(json_encode($src), true);
    }


    foreach ($rules as $item => $item_value) {
      $data = explode('|', $item_value);
      foreach ($data as $value) {
        $new_data = explode(':', $value);

        if (is_array($new_data) and sizeof($new_data) > 1) {

          if ($new_data[0] == 'min' and isset($src[$item]) and !empty($src[$item]) and strlen($src[$item]) < $new_data[1]) {
            self::addError($item, $item . ' should be minimum ' . $new_data[1] . ' characters');
          }

          if ($new_data[0] == 'max' and isset($src[$item]) and !empty($src[$item]) and strlen($src[$item]) > $new_data[1]) {
            self::addError($item, $item . ' should be maximum ' . $new_data[1] . ' characters');
          }
          if ($new_data[0] == 'unique' and isset($src[$item]) and !empty($src[$item])) {

            $query = DB::rawQuery("SELECT * FROM " . $new_data[1] . " WHERE " . $item . " = '$src[$item]'");

            if ($query) {

              self::addError($item, $item . ' should be unique.');
            }
          }
        } else {
          if ($value == 'required' and (!isset($src[$item]) or empty($src[$item]))) {
            self::addError($item, $item . ' is required');
          }
          if ($value == 'slug') {

            $src[$item] = str_replace(' ', '-', $src[$item]);
          }
          if ($value == 'int' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_INT)) {

            self::addError($item, $item . ' should be integer');
          }
          if ($value == 'float' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_FLOAT)) {

            self::addError($item, $item . ' should be float');
          }
          if ($value == 'string' and (isset($src[$item]) or !empty($src[$item])) and intval($src[$item]) != 0) {

            self::addError($item, $item . ' should be string');
          }
          if ($value == 'email' and (isset($src[$item]) or !empty($src[$item])) and !filter_var($src[$item], FILTER_VALIDATE_EMAIL)) {

            self::addError($item, $item . ' should be valid email');
          }
        }
      }
    }

    return (object)$src;
  }

  public static function addError($item, $error)
  {
    array_push(self::$errors, array('field' => $item, 'message' => $error));
  }


  public static function errors()
  {
    if (empty(self::$errors)) return false;
    http_response_code(400);
    return Response::json(self::$errors);
  }

  public static function only(array $arr)
  {

    $all = (object)[];

    // Make sure Content-Type is application/json

    $content_type = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';

    if (stripos($content_type, 'application/json') === false) {

      @header("Access-Control-Allow-Origin: *");

      @header("Content-Type: application/json; charset=UTF-8");

      @header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

      @header("Access-Control-Max-Age: 3600");

      @header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    }

    // Read the input stream

    $input = file_get_contents('php://input');



    @preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);

    if ($matches) {

      $boundary = $matches[1];

      $a_blocks = preg_split("/-+$boundary/", $input);

      array_pop($a_blocks);
    } else {

      parse_str($input, $a_blocks);
    }

    foreach ($a_blocks as $id => $block) {

      if (empty($block) or strpos($block, "Content-Type: image"))

        continue;


      if (strpos($block, 'application/octet-stream') !== FALSE) {

        preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
      } else {

        preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
      }
      if ($matches) {

        $all->{$matches[1]} = $matches[2];
      } else {

        $all->{$id} = $block;
      }
    }

    // Decode the JSON object

    $object = json_decode($input, true);

    // Throw an exception if decoding failed

    if (is_array($object)) {

      foreach ($arr as $a) {

        foreach ($object as $key => $value) {

          if ($key === $a) {
            $value = json_encode($value, JSON_UNESCAPED_UNICODE);
            $all->{$key} = $value;

            break;
          } else {

            $all->{$a} = '';
          }
        }
      }
    }

    if (isset($_POST) and !empty($_POST)) {
      foreach ($arr as $a) {

        foreach ($_POST as $key => $value) {

          if ($key === $a) {
            $all->$key = $value;

            break;
          }
        }
      }
    }

    if (isset($_GET) and !empty($_GET)) {

      foreach ($arr as $a) {

        foreach ($_GET as $key => $value) {

          if ($key === $a) {

            $all->{$key} = $value;

            break;
          }
        }
      }
    }

    return $all;
  }

  public static function file($name, $rules = array(false))
  {
    $main_file_name = $name;
    $type = false;
    $collectionTypes = "[";
    if ($_SERVER['REQUEST_METHOD'] == "POST" or $_SERVER['REQUEST_METHOD'] == "GET") {
      if (isset($_FILES) and !empty($_FILES)) {
        if (isset($_FILES[$name])) {
          if (isset($rules['size']) && $rules['size']  < $_FILES[$name]['size']) {
            die(Response::status(400)->json(['message' => $name . " size is bigger than " . $rules['size'] . " ."]));
          } else if (isset($rules['type'])) {
            $imgType = explode("/", $_FILES[$name]['type']);
            foreach ((array)$rules['type'] as $key => $value) {
              if ($value === $imgType[1]) {
                $type = true;
                break;
              }
              if ($key !== sizeof($rules['type']) - 1)
                $collectionTypes .= " " . $value . " ,";
              else
                $collectionTypes .= " " . $value . " ]";
            }
            if (!$type) {
              die(Response::status(400)->json(['message' => $name . " type ( " . $imgType[1] . " ) is not from these extensions " . $collectionTypes . " ."]));
            }
          }
          return (object) $_FILES[$name];
        }
        die(Response::status(400)->json(['message' => $main_file_name . " does not exists."]));
      }
    } else {
      /* PUT data comes in on the stdin stream */
      $putdata = fopen("php://input", "r");

      /* Open a file for writing */
      // $fp = fopen("myputfile.ext", "w");

      $raw_data = '';

      /* Read the data 1 KB at a time
       and write to the file */
      while ($chunk = fread($putdata, 1024))
        $raw_data .= $chunk;

      /* Close the streams */
      fclose($putdata);

      // Fetch content and determine boundary
      $boundary = substr($raw_data, 0, strpos($raw_data, "\r\n"));

      // Fetch each part
      $parts = array_slice(explode($boundary, $raw_data), 1);

      foreach ($parts as $part) {
        // If this is the last part, break
        if ($part == "--\r\n") break;

        // Separate content from headers
        $part = ltrim($part, "\r\n");
        list($raw_headers, $body) = explode("\r\n\r\n", $part, 2);

        // Parse the headers list
        $raw_headers = explode("\r\n", $raw_headers);
        $headers = array();
        foreach ($raw_headers as $header) {
          list($name, $value) = explode(':', $header);
          $headers[strtolower($name)] = ltrim($value, ' ');
        }

        // Parse the Content-Disposition to get the field name, etc.
        if (isset($headers['content-disposition'])) {
          $filename = null;
          $tmp_name = null;
          preg_match(
            '/^(.+); *name="([^"]+)"(; *filename="([^"]+)")?/',
            $headers['content-disposition'],
            $matches
          );
          list(,, $name) = $matches;

          //Parse File
          if (isset($matches[4])) {
            //if labeled the same as previous, skip
            if (isset($_FILES[$matches[2]])) {
              continue;
            }
            //get filename
            $filename = $matches[4];

            //get tmp name
            $filename_parts = pathinfo($filename);
            $tmp_name = tempnam(ini_get('upload_tmp_dir'), $filename_parts['filename']);
            //populate $_FILES with information, size may be off in multibyte situation
            $_FILES[$matches[2]] = array(
              'error' => 0,
              'name' => $filename,
              'tmp_name' => $tmp_name,
              'size' => strlen($body),
              'type' => $value
            );

            //place in temporary directory
            file_put_contents($tmp_name, $body);
          }
          //Parse Field
          // else {
          //   $data[$name] = substr($body, 0, strlen($body) - 2);
          // }
        }
      }

      if (!isset($_FILES[$name]))
        die(Response::status(400)->json(['message' => $main_file_name . " does not exists."]));

      return (object)$_FILES[$name];
    }
  }

  public static function all()
  {

    $all = (object)[];

    // Make sure Content-Type is application/json

    $content_type = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';

    if (stripos($content_type, 'application/json') === false) {

      @header("Access-Control-Allow-Origin: *");

      @header("Content-Type: application/json; charset=UTF-8");

      @header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

      @header("Access-Control-Max-Age: 3600");

      @header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    }

    // Read the input stream

    $input = file_get_contents('php://input');

    @preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);

    if ($matches) {

      $boundary = $matches[1];

      $a_blocks = preg_split("/-+$boundary/", $input);

      array_pop($a_blocks);
    } else {

      parse_str($input, $a_blocks);
    }

    foreach ($a_blocks as $id => $block) {

      if (empty($block) or strpos($block, "Content-Type: image"))

        continue;


      if (strpos($block, 'application/octet-stream') !== FALSE) {

        preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
      } else {

        preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
      }

      if ($matches) {

        $all->{$matches[1]} = $matches[2];
      } else {

        $all->{$id} = $block;
      }
    }

    // Decode the JSON object

    $object = json_decode($input, true);

    // Throw an exception if decoding failed

    if (is_array($object)) {

      foreach ($object as $key => $value) {
        $value = json_encode($value, JSON_UNESCAPED_UNICODE);
        $all->{$key} = $value;
      }
    }

    if (isset($_POST) and !empty($_POST)) {

      foreach ($_POST as $key => $value) {
        $all->{$key} =  $value;
      }
    }

    if (isset($_GET) and !empty($_GET)) {

      foreach ($_GET as $key => $value) {
        $all->{$key} = $value;
      }
    }

    return $all;
  }

  public static function input($data)
  {

    if (isset($_POST[$data])) {
      return $_POST[$data];
    } else if (isset($_GET[$data])) {
      return $_GET[$data];
    } else if ($_SERVER['REQUEST_METHOD'] == "PUT" or $_SERVER['REQUEST_METHOD'] == "put" or $_SERVER['REQUEST_METHOD'] == "DELETE" or $_SERVER['REQUEST_METHOD'] == "delete") {

      $put_data = (object)[];

      $input = file_get_contents('php://input');

      preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);

      if ($matches) {

        $boundary = $matches[1];

        $a_blocks = preg_split("/-+$boundary/", $input);

        array_pop($a_blocks);
      } else {

        parse_str($input, $a_blocks);
      }

      foreach ($a_blocks as $id => $block) {

        if (empty($block))

          continue;


        if (strpos($block, 'application/octet-stream') !== FALSE) {

          preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
        } else {

          preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
        }

        if ($matches) {

          $put_data->{$matches[1]} = $matches[2];
        } else {

          $put_data->{$id} = $block;
        }
      }

      $put_data = (array) $put_data;

      foreach ($put_data as $key => $value) {

        if ($key == $data) {

          return $put_data[$key];
        }
      }
    }
  }


  public static function post($data = false)
  {

    $all = (object)[];

    if (isset($_POST) and !empty($_POST)) {

      if ($data) {

        return $_POST[$data];
      }

      foreach ($_POST as $key => $value) {

        $all->{$key} = $value;
      }
    }

    return $all;
  }

  public static function get($data = false)
  {
    $all = (object)[];

    if (isset($_GET) and !empty($_GET)) {

      if ($data) {
        return $_GET[$data];
      } else {
        foreach ($_GET as $key => $value) {

          $all->{$key} = $value;
        }
      }
    }

    return $all;
  }

  public static function except($exception)
  {

    $all = (object)[];

    // Make sure Content-Type is application/json

    $content_type = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';

    if (stripos($content_type, 'application/json') === false) {

      @header("Access-Control-Allow-Origin: *");

      @header("Content-Type: application/json; charset=UTF-8");

      @header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

      @header("Access-Control-Max-Age: 3600");

      @header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    }

    // Read the input stream

    $input = file_get_contents('php://input');

    @preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);

    if ($matches) {

      $boundary = $matches[1];

      $a_blocks = preg_split("/-+$boundary/", $input);

      array_pop($a_blocks);
    } else {

      parse_str($input, $a_blocks);
    }

    foreach ($a_blocks as $id => $block) {

      if (empty($block) or strpos($block, "Content-Type: image"))

        continue;


      if (strpos($block, 'application/octet-stream') !== FALSE) {

        preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s", $block, $matches);
      } else {

        preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s', $block, $matches);
      }

      if ($matches) {

        $all->{$matches[1]} = $matches[2];
      } else {

        $all->{$id} = $block;
      }
    }

    // Decode the JSON object

    $object = json_decode($input, true);

    // Throw an exception if decoding failed

    if (is_array($object)) {

      foreach ($object as $key => $value) {
        $value = json_encode($value, JSON_UNESCAPED_UNICODE);
        $all->{$key} = $value;
      }
    }

    if (isset($_POST) and !empty($_POST)) {

      foreach ($_POST as $key => $value) {
        $all->{$key} =  $value;
      }
    }

    if (isset($_GET) and !empty($_GET)) {

      foreach ($_GET as $key => $value) {
        $all->{$key} = $value;
      }
    }

    foreach ($exception as $value)
      unset($all->{$value});

    return $all;
  }

  public static function htmlMail($from, $to, $subject, $message, $cc = false)
  {

    $mail_to = $to;

    $mail_subject = $subject;

    $headers = "From: " . strip_tags($from) . "\r\n";

    if ($cc) {
      $headers .= "CC: " . $cc . "\r\n";
    }

    $headers .= "MIME-Version: 1.0\r\n";

    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mail_message = $message;

    if (mail($mail_to, $mail_subject, $mail_message, $headers)) {
      return true;
    }
    return false;
  }

  public static function Mail($from, $to, $subject, $message, $cc = false)
  {

    $mail_to = $to;

    $mail_subject = $subject;

    $mail_message = $message;

    if ($cc) {

      $headers = "From: " . $from . "\r\n" .
        "CC: " . $cc;
    } else {

      $headers = "From: " . $from;
    }

    if (mail($mail_to, $mail_subject, $mail_message, $headers)) {
      return true;
    }
    return false;
  }

  public function uuid()
  {
    return sprintf(
      '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      // 32 bits for "time_low"
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff),

      // 16 bits for "time_mid"
      mt_rand(0, 0xffff),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand(0, 0x0fff) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand(0, 0x3fff) | 0x8000,

      // 48 bits for "node"
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff),
      mt_rand(0, 0xffff)
    );
  }
}

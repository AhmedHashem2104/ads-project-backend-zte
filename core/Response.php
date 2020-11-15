<?php 

class Response{

public function render($parm , $data){

$GLOBALS['data'] = array($parm => $data);

}

public function view($parm, $data = false){

if (file_exists(dirname(dirname(__FILE__)) . '/views/' . $parm . '.zte.html')) {

$loader = new \Twig\Loader\FilesystemLoader('views');

$twig = new \Twig\Environment($loader);

$lexer = new \Twig\Lexer($twig, [
'tag_comment'  => ['{*', '*}'],
'tag_block'    => ['{%', '%}'],
'tag_variable' => ['{{', '}}'],
]);

$twig->setLexer($lexer);

if (!$data){

if (!empty($GLOBALS['data'])){

echo $twig->render($parm.'.zte.html' , $GLOBALS['data'][$parm]);

}

else{

echo $twig->render($parm.'.zte.html');

}

}
else{

echo $twig->render($parm.'.zte.html' , $data);

}

}

}

public function json($string)
{

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: GET , POST , PUT , PATCH , DELETE");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

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
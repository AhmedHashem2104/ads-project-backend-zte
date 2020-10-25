<?php
class Route {
public function get($path , $controller){
if ($_SERVER['REQUEST_METHOD'] == "GET" or $_SERVER['REQUEST_METHOD'] == "get"){
$path_info = $_SERVER['REQUEST_URI'];
if ($path_info[-1] == '/'){
$path_info = substr($path_info , 0 , -1);
}
if ($path_info[0] == '/'){
$path_info = substr($path_info , 1);
}
if ($path[-1] == '/'){
$path = substr($path , 0 , -1);
}
if ($path[0] == '/'){
$path = substr($path , 1);
}
$path_info_test = explode('/', $path_info);
$path_test = explode('/', $path);
$checked_path = '';
foreach($path_test as $key => $pt){
if (strstr($pt , ':')){
$path_test_new = str_replace(':', '', $path_test[$key]);
@$_GET[$path_test_new] = $path_info_test[$key];
if (next($path_test) != true)
$checked_path .= $path_info_test[$key];
else
$checked_path .= $pt.'/';
}
else{
if (next($path_test) != true)
$checked_path .= $path_test[$key];
else
$checked_path .= $pt.'/';
}
}
if ($path_info == $checked_path)
{
if (strpos($controller,".")){
$orb = explode('.' , $controller);
$func = $orb[1];
$model = explode('Controller' , $controller);
require_once dirname(dirname(__FILE__)).'/Controllers/'.$orb[0].'.php';
$controllerName = ucfirst($orb[0]);
$controllerObj  = new $controllerName();
echo $controllerObj->$func(new Response(false) , new Request(false) , new Auth(false));
}
else{
echo $controller;
}
die();
}
}
}
public function post($path , $controller){
if ($_SERVER['REQUEST_METHOD'] == "POST" or $_SERVER['REQUEST_METHOD'] == "post"){
$path_info = $_SERVER['REQUEST_URI'];
if ($path_info[-1] == '/'){
$path_info = substr($path_info , 0 , -1);
}
if ($path_info[0] == '/'){
$path_info = substr($path_info , 1);
}
if ($path[-1] == '/'){
$path = substr($path , 0 , -1);
}
if ($path[0] == '/'){
$path = substr($path , 1);
}
$path_info_test = explode('/', $path_info);
$path_test = explode('/', $path);
$checked_path = '';
foreach($path_test as $key => $pt){
if (strstr($pt , ':')){
$path_test_new = str_replace(':', '', $path_test[$key]);
@$_GET[$path_test_new] = $path_info_test[$key];
if (next($path_test) != true)
$checked_path .= $path_info_test[$key];
else
$checked_path .= $pt.'/';
}
else{
if (next($path_test) != true)
$checked_path .= $path_test[$key];
else
$checked_path .= $pt.'/';
}
}
if ($path_info == $checked_path)
{
if (strpos($controller,".")){
$orb = explode('.' , $controller);
$func = $orb[1];
$model = explode('Controller' , $controller);
require_once dirname(dirname(__FILE__)).'/Controllers/'.$orb[0].'.php';
$controllerName = ucfirst($orb[0]);
$controllerObj  = new $controllerName();
echo $controllerObj->$func(new Response(false) , new Request(false) , new Auth(false));
}
else{
echo $controller;
}
die();
}
}
}
public function put($path , $controller){
if ($_SERVER['REQUEST_METHOD'] == "PUT" or $_SERVER['REQUEST_METHOD'] == "put"){
$path_info = $_SERVER['REQUEST_URI'];
if ($path_info[-1] == '/'){
$path_info = substr($path_info , 0 , -1);
}
if ($path_info[0] == '/'){
$path_info = substr($path_info , 1);
}
if ($path[-1] == '/'){
$path = substr($path , 0 , -1);
}
if ($path[0] == '/'){
$path = substr($path , 1);
}
$path_info_test = explode('/', $path_info);
$path_test = explode('/', $path);
$checked_path = '';
foreach($path_test as $key => $pt){
if (strstr($pt , ':')){
$path_test_new = str_replace(':', '', $path_test[$key]);
@$_GET[$path_test_new] = $path_info_test[$key];
if (next($path_test) != true)
$checked_path .= $path_info_test[$key];
else
$checked_path .= $pt.'/';
}
else{
if (next($path_test) != true)
$checked_path .= $path_test[$key];
else
$checked_path .= $pt.'/';
}
}
if ($path_info == $checked_path)
{
if (strpos($controller,".")){
$orb = explode('.' , $controller);
$func = $orb[1];
$model = explode('Controller' , $controller);
require_once dirname(dirname(__FILE__)).'/Controllers/'.$orb[0].'.php';
$controllerName = ucfirst($orb[0]);
$controllerObj  = new $controllerName();
echo $controllerObj->$func(new Response(false) , new Request(false) , new Auth(false));
}
else{
echo $controller;
}
die();
}
}
}
public function patch($path , $controller){
if ($_SERVER['REQUEST_METHOD'] == "PATCH" or $_SERVER['REQUEST_METHOD'] == "patch"){
$path_info = $_SERVER['REQUEST_URI'];
if ($path_info[-1] == '/'){
$path_info = substr($path_info , 0 , -1);
}
if ($path_info[0] == '/'){
$path_info = substr($path_info , 1);
}
if ($path[-1] == '/'){
$path = substr($path , 0 , -1);
}
if ($path[0] == '/'){
$path = substr($path , 1);
}
$path_info_test = explode('/', $path_info);
$path_test = explode('/', $path);
$checked_path = '';
foreach($path_test as $key => $pt){
if (strstr($pt , ':')){
$path_test_new = str_replace(':', '', $path_test[$key]);
@$_GET[$path_test_new] = $path_info_test[$key];
if (next($path_test) != true)
$checked_path .= $path_info_test[$key];
else
$checked_path .= $pt.'/';
}
else{
if (next($path_test) != true)
$checked_path .= $path_test[$key];
else
$checked_path .= $pt.'/';
}
}
if ($path_info == $checked_path)
{
if (strpos($controller,".")){
$orb = explode('.' , $controller);
$func = $orb[1];
$model = explode('Controller' , $controller);
require_once dirname(dirname(__FILE__)).'/Controllers/'.$orb[0].'.php';
$controllerName = ucfirst($orb[0]);
$controllerObj  = new $controllerName();
echo $controllerObj->$func(new Response(false) , new Request(false) , new Auth(false));
}
else{
echo $controller;
}
die();
}
}
}
public function delete($path , $controller){
if ($_SERVER['REQUEST_METHOD'] == "DELETE" or $_SERVER['REQUEST_METHOD'] == "delete"){
$path_info = $_SERVER['REQUEST_URI'];
if ($path_info[-1] == '/'){
$path_info = substr($path_info , 0 , -1);
}
if ($path_info[0] == '/'){
$path_info = substr($path_info , 1);
}
if ($path[-1] == '/'){
$path = substr($path , 0 , -1);
}
if ($path[0] == '/'){
$path = substr($path , 1);
}
$path_info_test = explode('/', $path_info);
$path_test = explode('/', $path);
$checked_path = '';
foreach($path_test as $key => $pt){
if (strstr($pt , ':')){
$path_test_new = str_replace(':', '', $path_test[$key]);
@$_GET[$path_test_new] = $path_info_test[$key];
if (next($path_test) != true)
$checked_path .= $path_info_test[$key];
else
$checked_path .= $pt.'/';
}
else{
if (next($path_test) != true)
$checked_path .= $path_test[$key];
else
$checked_path .= $pt.'/';
}
}
if ($path_info == $checked_path)
{
if (strpos($controller,".")){
$orb = explode('.' , $controller);
$func = $orb[1];
$model = explode('Controller' , $controller);
require_once dirname(dirname(__FILE__)).'/Controllers/'.$orb[0].'.php';
$controllerName = ucfirst($orb[0]);
$controllerObj  = new $controllerName();
echo $controllerObj->$func(new Response(false) , new Request(false) , new Auth(false));
}
else{
echo $controller;
}
die();
}
}
}
}
?>
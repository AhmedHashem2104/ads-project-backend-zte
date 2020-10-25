<?php
class Controller extends DB{
// ZTE ORM Select All Data From Table.
public function all(){
$data = DB::query()->select($this->class()::table())->get();
if (!$data){
return array();
}
return $data;
}
// ZTE ORM Create New Row In Table.
public function createORM($promos){
$data = json_decode(json_encode($promos), true);
$data = DB::query()->creator($this->class()::table() , $data);
if ($data){
$data = DB::select($this->class()::table())->last();
return $data;
}
else{
return false;
}
}
// ZTE ORM Update One Or More Than One Row in Database.
public function updateORM($promos , $id , $value = false){
$data = json_decode(json_encode($promos), true);
unset($data['id']);
if (!$value){
$data = DB::query()->modify($this->class()::table() , $data , 'id' , $id);
}
else{
$data = DB::query()->modify($this->class()::table() , $data , $id , $value);
}
if ($data){
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id)->get();
if (!$data){
return false;
}
}
else{
return false;
}
return $data;
}
// Create Or Update One Or More Than One Row in Database.
public function save($id = false){
$promos = json_encode($this);
$data = json_decode($promos , true);
if ($id and !empty($id)){
$conn = $this->connect();
$data = DB::query()->modify($this->class()::table() , $data , 'id' , $id);
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id)->get();
}
else{
$data = DB::query()->creator($this->class()::table() , $data);
}
return $data;
}
// Select One Row From Database.
public function find($id){
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id)->first();
if ($data){
return $data;
}
else{
return false;
}
}
// Select Or Return Error.
public function findOrFail($id){
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id)->first();
if ($data){
return $data;
}
else{
return array('status' => 0 , 'message' => 'Not Found');
}
}
// Select Using Specific Row Using Any Coloumn.
public function findBy($id , $like , $value = false){
if (!$value){
$data = DB::query()->select($this->class()::table())->where($id , '=' , $like)->fetchAll();
}
else{
$data = DB::query()->select($this->class()::table())->where($id , $like , $value)->fetchAll();
}
if ($data){
return $data;
}
else{
return false;
}
}
// Delete One Row From Database.
public function deleteORM($id){
if (is_array($id)){
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id[0]['id'])->fetch();
if (!$data){
return false;
}
$tmpdata = $data;
$data = $this->remove($this->class()::table() , $id[0]['id']);
}
else{
$data = DB::query()->select($this->class()::table())->where('id' , '=' , $id)->fetch();
if (!$data){
return false;
}
$tmpdata = $data;
$data = $this->remove($this->class()::table() , $id);
}
return $tmpdata;
}
}
?>
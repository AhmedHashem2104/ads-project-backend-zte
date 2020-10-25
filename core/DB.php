<?php 
class DB extends Database{
private $id;
private $value;
private $table;
private $counter = 0;
// Select One Row.
public function rawOneQuery($sql){
$query = $this->connect()->query($sql);
if ($query){
if ($query->rowCount() == 1){
$row = $query->fetch(PDO::FETCH_ASSOC);
return $row;
}
return false;
}
else{
return false;
}
}
// Select One Or More Than One Row.
public function rawQuery($sql){
$query = $this->connect()->query($sql);
if ($query){
if ($query->rowCount() > 0){
while($row = $query->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;
}
return $data;
}
else{
return false;
}
}
else{
return false;
}
}
// Update Onr Or More Than One Row.
public function updateQuery($sql){
$query = $this->connect()->query($sql);
if ($query){
return true;
}
else{
return false;
}
}
// Delete Onr Or More Than One Row.
public function deleteQuery($sql){
$query = $this->connect()->query($sql);
if ($query){
return true;
}
else{
return false;
}
}
// Query Builder.
public function query(){
$query = "SELECT * FROM ".$this->class()::table();
$this->sql = $query;
return $this;
}
// Select All Data From Table.
public function select($table){
$query = "SELECT * FROM ".$table;
$this->sql = $query;
return $this;
}
// Where Conditions in SQL.
public function where($parameter , $operator , $value){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." " . $operator . " '" . $value . "'";
$this->counter++;
}
else{
  $this->sql .= " AND ".$parameter." " . $operator . " '" . $value . "'";    
}
return $this;
}
// orWhere Conditions in SQL.
public function orWhere($parameter , $operator , $value){
$this->sql .= " OR ".$parameter." " . $operator . " '" . $value . "'";
return $this;
}
// whereNot Conditions in SQL.
public function whereNot($parameter , $operator , $value){
if ($this->counter == 0){
$this->sql .= " WHERE NOT ".$parameter." " . $operator . " '" . $value . "'";
$this->counter++;
}
else{
$this->sql .= " AND NOT ".$parameter." " . $operator . " '" . $value . "'";
}
return $this;
}
// orWhereNot Conditions in SQL.
public function orWhereNot($parameter , $operator , $value){
$this->sql .= " OR NOT ".$parameter." " . $operator . " '" . $value . "'";
return $this;
}
// whereNull Conditions in SQL.
public function whereNull($parameter){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." IS NULL ";
$this->counter++;
}
else{
$this->sql .= " AND ".$parameter." IS NULL ";
}
return $this;
}
// whereNotNull Conditions in SQL.
public function whereNotNull($parameter){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." IS NOT NULL ";
$this->counter++;
}
else{
$this->sql .= " AND ".$parameter." IS NOT NULL ";
}
return $this;
}
// orWhereNull Conditions in SQL.
public function orWhereNull($parameter){
$this->sql .= " OR ".$parameter." IS NULL";
return $this;
}
// orWhereNotNull Condtions in SQL.
public function orWhereNotNull($parameter){
$this->sql .= " OR ".$parameter." IS NOT NULL";
return $this;
}
// whereLike Conditions in SQL.
public function whereLike($operator1 , $operator2){
if ($this->counter == 0){
$this->sql .= " WHERE ".$operator1." LIKE '" . $operator2 . "'";
$this->counter++;
}
else{
$this->sql .= " AND ".$operator1." LIKE '" . $operator2 . "'";
}
return $this;
}
// orWhereLike Conditions in SQL.
public function orWhereLike($operator1 , $operator2){
$this->sql .= " OR ".$operator1." LIKE '" . $operator2 . "'";
return $this;
}
// whereNotLike Conditions in SQL.
public function whereNotLike($operator1 , $operator2){
if ($this->counter == 0){
$this->sql .= " WHERE ".$operator1." NOT LIKE '" . $operator2 . "'";
$this->counter++;
}
else{
$this->sql .= " AND ".$operator1." NOT LIKE '" . $operator2 . "'";
}
return $this;
}
// orWhereNotLike Conditions in SQL.
public function orWhereNotLike($operator1 , $operator2){
$this->sql .= " OR ".$operator1." NOT LIKE '" . $operator2 . "'";
return $this;
}
// whereBetween Conditions in SQL.
public function whereBetween($parameter , $operator1 , $operator2){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
$this->counter++;
}
else{
$this->sql .= " AND ".$parameter." BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
}
return $this;
}
// orWhere Between Conditions in SQL.
public function orWhereBetween($parameter , $operator1 , $operator2){
$this->sql .= " OR ".$parameter." BETWEEN '" . $operator1 . "' AND '" . $operator2 . "'";
return $this;
}
// whereIn Conditions in SQL.
public function whereIn($parameter , $operators){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
$this->counter++;
}
else{
$this->sql .= " AND ".$parameter." IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
}
return $this;
}
// orWhereIn Conditions in SQL.
public function orWhereIn($parameter , $operators){
$this->sql .= " OR ".$parameter." IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
return $this;
}
// whereNotIn Conditions in SQL.
public function whereNotIn($parameter , $operators){
if ($this->counter == 0){
$this->sql .= " WHERE ".$parameter." NOT IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
$this->counter++;
}
else{
$this->sql = " AND ".$parameter." NOT IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
}
return $this;
}
// orWhereNotIn Conditions in SQL.
public function orWhereNotIn($parameter , $operators){
$this->sql .= " OR ".$parameter." NOT IN (";
foreach($operators as $operator){
if (!next($operators)){
$this->sql .= "'" . $operator . "'";
}
else{
$this->sql .= "'" . $operator . "' ,";
}
}
$this->sql .= ")";
return $this;
}
// Ordering in SQL.
public function orderBy($parameter , $type = false){
if ($type){
$this->sql .= " ORDER BY " . $parameter . " " . $type;
}
else{
$this->sql .= " ORDER BY " . $parameter;
}
return $this;
}
// Get All Data From Database.
public function get(){
$array = (array)$this;
$query = $this->connect()->query($array['sql']);
if (!$query){
return false;
}
if ($query->rowCount() > 0){
while($row = $query->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;
}
return $data;
}
else{
return array();
}
}
// Fetch All Data From Database.
public function fetch(){
$array = (array)$this;
$query = $this->connect()->query($array['sql']);
if (!$query){
return false;
}
if ($query->rowCount() > 0){
while($row = $query->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;
}
return $data;
}
else{
return array();
}
}
// Fetch All Data From Database.
public function fetchAll(){
$array = (array)$this;
$query = $this->connect()->query($array['sql']);
if (!$query){
return false;
}
if ($query->rowCount() > 0){
while($row = $query->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;
}
return $data;
}
else{
return array();
}
}
// Fetch One Row From Database.
public function fetchOne(){
$array = (array)$this;
$query = $this->connect()->query($array['sql'] . " LIMIT 1 ");
if (!$query){
return false;
}
if ($query->rowCount() == 1){
$row = $query->fetch(PDO::FETCH_ASSOC);
return $row;
}
else{
return array();
}
}
// Fetch First Row Data From Database.
public function first(){
$array = (array)$this;
$query = $this->connect()->query($array['sql'] . " LIMIT 1 ");
if (!$query){
return false;
}
if ($query->rowCount() == 1){
$row = $query->fetch(PDO::FETCH_ASSOC);
return $row;
}
else{
return array();
}
}
// Fetch Last Row Data From Database.
public function last(){
$array = (array)$this;
$query = $this->connect()->query($array['sql'] . " ORDER BY id DESC LIMIT 1 ");
if (!$query){
return false;
}
if ($query->rowCount() == 1){
$row = $query->fetch(PDO::FETCH_ASSOC);
return $row;
}
else{
return array();
}
}
//Create New Row In Database.
public function creator($table,$fields){
$this->table = $table;
$implodeFields=implode(',' , array_keys($fields));
$implodePlaceholder=implode(", :" , array_keys($fields));
try {
$sql="INSERT INTO ".$this->table." (".$implodeFields.") VALUES(:".$implodePlaceholder.")";
$stmt =$this->connect()->prepare($sql); 
foreach ($fields as $key=>$value) {
$stmt->bindValue(':'.$key,$value);
}
$stmt->execute();
}
catch(PDOException $e) {
return false;
}
return $fields;
}
//Delete One Or More Than One Row From Database.
public function remove($table , $id = false , $value = false){
$this->table = $table;
$this->id = $id;
$this->value = $value;
if ($this->id and !$this->value){
$sql="DELETE FROM ".$this->table." WHERE id = ".$this->id;
}
else if ($this->id and $this->value){
$sql="DELETE FROM ".$this->table." WHERE " . $this->id . " = ".$this->value;
}
else{
$sql="DELETE FROM ".$this->table;
}
$stmt=$this->connect()->prepare($sql);
$stmt->bindValue(":",$this->id);
$stmt->execute();
return $stmt;
}
//Update One Or More Than One Row In Database.
public function modify($table , $fields , $id = false , $value = false){
$this->table = $table;
$this->id = $id;
$this->value = $value;
$st="";
$counter=1;
$total_fields = count($fields);
foreach ($fields as $key => $value){
if($counter===$total_fields)
{
$set="$key = :".$key;
$st=$st.$set;
}
else
{
$set="$key = :".$key.", ";
$st=$st.$set;
$counter++;
}
}
$sql=" ";
$sql.="UPDATE ".$this->table." SET ".$st;
if ($this->id and !$this->value){
$sql.=" WHERE id = ".$this->id;
}
else if ($this->id and $this->value){
$sql.=" WHERE " . $this->id . " = ".$this->value;
}
else{
$sql.=" WHERE id = ".$this->id;
}
$stmt=$this->connect()->prepare($sql);
foreach ($fields as $key => $value){
$stmt->bindValue(':'.$key,$value);
}
$stmt->execute();
$string = "SELECT * FROM " . $table;
if (!$this->value){
$string .= " WHERE id = " . $this->id;
}
else{
$string .= " WHERE " . $this->id . " = " . $this->value;
}
$query = $this->connect()->query($string . " LIMIT 1 ");
if ($query->rowCount()>0){
while($row = $query->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;
}
return $data;
}
}
}
?>
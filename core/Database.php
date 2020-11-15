<?php 
class Database{
private $servername;
private $dbname;
private $username;
private $password;
private $conn;
private $options;
public function connect(){
$this->servername = $_ENV['HOST'];
$this->dbname = $_ENV['DB_NAME'];
$this->username = $_ENV['DB_USER'];
$this->password = $_ENV['DB_PASSWORD'];
$this->options = $_ENV['DB_OPTIONS'];
$this->dbport = $_ENV['DB_PORT'];
try {
$conn = new PDO("mysql:host=".$this->servername.";port=".$this->dbport.";dbname=".$this->dbname.";charset=".$this->options,$this->username,$this->password);
$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
return $conn;
} catch (Exception $e) {
echo "Database Error " . $e->getMessage();
}
}
}
?>
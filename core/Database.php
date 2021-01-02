<?php

namespace Database;

use PDO;
use Exception;

class Database
{
    public static function connect()
    {
        $servername = $_ENV['HOST'];
        $dbname = $_ENV['DB_NAME'];
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $options = $_ENV['DB_OPTIONS'];
        $dbport = $_ENV['DB_PORT'];
        try {
            $conn = new PDO("mysql:host=" . $servername . ";port=" . $dbport . ";dbname=" . $dbname . ";charset=" . $options, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            echo "Database Error " . $e->getMessage();
        }
    }
}

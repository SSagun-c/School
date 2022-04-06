<?php 

class DatabaseConnection {
    private $connection = NULL;

        function __construct() {
            $servername = "localhost";
            $username = "Colin";
            $password = "colin";

            $this->connection = new PDO("mysql:host=$servername;dbname=message", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        function getConnection() {
            return $this->connection;
        }
}

















?>
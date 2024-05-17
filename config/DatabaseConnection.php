<?php
class DatabaseConnection {
    public $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (!$this->conn) {
            die("<h1>Database connection Failed</h1>");
        }
    }
}

?>
<?php

class modelModel {
    private $conn;

    public function __construct() {
        require_once('./config/db_config.php');
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /**
     * methods that handle database operations
     * Examples:
     */

     public function getAllModels() {
        // SQL query to retrieve all records
        // Fetch and return records
    }

    public function getModelById($id) {
        // SQL query to retrieve a record by ID
        // Fetch and return record
    }

    public function createModel($data) {
        // SQL query to insert a new record
        // Execute query and return result
        
    }

    public function updateModel($id, $data) {
        // SQL query to update a record
        // Execute query and return result
    }

}
?>


<?php

class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "autism";
    private $connection;

    public function __construct() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function read($query) {
        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        } else {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function save($query, $params = [], $types = '') {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->connection->error);
        }

        if (!empty($params) && !empty($types)) {
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            return false;
        } else {
            return true;
        }
    }

    public function close() {
        $this->connection->close();
    }
}

?>

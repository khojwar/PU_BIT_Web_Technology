<?php

$conn = new mysqli("localhost", "root", "", "test_db");

$sql = "CREATE TABLE user (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
)";

if ($conn->query($sql) == TRUE) {
    echo "user table created successfully";
} else {
    echo "Error creating table". $conn->error;
}





?>
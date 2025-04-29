<?php

$conn = new mysqli("localhost", "root", "");

$sql = "CREATE DATABASE test_db";

if ($conn->query($sql) == TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database". $conn->error;
}

$conn->close();






?>
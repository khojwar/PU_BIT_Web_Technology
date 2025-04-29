<?php

$conn = new mysqli("localhost", "root", "", "test_db");

$sql = "INSERT INTO user (name, email) VALUES ('ram', 'ram@gmail.com')";

if ($conn->query($sql) == TRUE) {
    echo "New record successfully";
} else {
    echo "Error inserting". $conn->error;
}




?>
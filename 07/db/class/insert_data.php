<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Error connction". $conn->connect_error);
};

echo "connection successful";

$sql = "INSERT INTO student (name, email) VALUES ('Sujal', 'sujal@gmail.com')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted Successfully";
} else {
    echo "Error insert". $conn->error;
};


$conn->close();

?>
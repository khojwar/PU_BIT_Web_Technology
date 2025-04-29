<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Error connction". $conn->connect_error);
};

echo "connection successful";

$sql = "CREATE TABLE student (
id INT(11) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
email VARCHAR(255) UNIQUE
)";

if ($conn->query($sql) == TRUE) {
    echo "Table created Successfully";
} else {
    echo "Error table create". $conn->error;
};


$conn->close();

?>
<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Error connection: " . $conn->connect_error);
}

echo "Connection successful";

$sql = "UPDATE student SET email='sujal123@gmail.com' WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

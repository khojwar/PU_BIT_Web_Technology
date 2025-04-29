<?php

$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Error connection: " . $conn->connect_error);
}

echo "Connection successful";

$sql = "DELETE FROM student WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted successfully";
} else {
    echo "Error delete: " . $conn->error;
}

$conn->close();

?>

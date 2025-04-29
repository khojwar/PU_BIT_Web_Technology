<?php

$conn = new mysqli("localhost", "root", "", "test_db");

$sql = "DELETE FROM user WHERE id='2'";

if ($conn->query($sql) == TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error delete". $conn->error;
}




?>
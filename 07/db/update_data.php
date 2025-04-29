<?php

$conn = new mysqli("localhost", "root", "", "test_db");

$sql = "UPDATE user SET name='Tikaram' WHERE id='1'";

if ($conn->query($sql) == TRUE) {
    echo "record updated successfully";
} else {
    echo "Error update". $conn->error;
}




?>
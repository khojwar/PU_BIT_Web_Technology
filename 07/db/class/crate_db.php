<?php

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Error connction". $conn->connect_error);
};

echo "connection successful";

$sql = "CREATE DATABASE student_db";
$conn->query($sql);


$conn->close();

?>
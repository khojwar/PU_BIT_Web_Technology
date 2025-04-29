<?php
// config.php - Database connection
$host = 'localhost';
$dbname = 'myapp';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_errno) {
    die("Database connection failed: " . $mysqli->connect_error);
}

echo "Connection successful";


?>
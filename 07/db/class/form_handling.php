<form action="" method="POST">
    <input type="text" name="name" id="" placeholder="Enter Name">
    <input type="email" name="email" id="" placeholder="Enter Email">
    <input type="submit" value="Submit">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // echo "Name: $name";


    $conn = new mysqli("localhost", "root", "", "student_db");

    if ($conn->connect_error) {
        die("Error connction". $conn->connect_error);
    };

    echo "connection successful";

    $sql = "INSERT INTO student (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) == TRUE) {
        echo "New record inserted Successfully";
    } else {
        echo "Error insert". $conn->error;
    };

    $conn->close();

}

?>
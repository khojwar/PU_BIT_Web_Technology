<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label for="age">Age:</label><br>
    <input type="number" name="age"><br><br>

    <label for="course">Course:</label><br>
    <input type="text" name="course"><br><br>

    <input type="submit" value="Add Student">
</form>

</body>
</html>



<?php
$name = $email = $age = $course = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $age = $_POST["age"] ?? "";
    $course = $_POST["course"] ?? "";

echo $name;


$servername = "localhost";
$username = "trk";
$password = "1234";
$db_name = "bit_test";


$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Error: ". $conn->connect_error);
};

echo "DB connected Successfully";


$sql = "INSERT INTO student_table (name, email, age, course) 
        VALUES ('$name', '$email', $age, '$course')";


if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "error". $conn->error;
};

$conn->close();

}

?>

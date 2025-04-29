<?php

// $host_name = "localhost";
// $user_name = "root";
// $password = "";
// $db_name = "bit_db";

// $conn = new mysqli($host_name, $user_name, $password, $db_name);


// if ($conn->connect_error) {
//     die("Connection error". $conn->connect_error);
// }

// echo "Connction Successful";


?>
<h1>form</h1>

<form action="" method="GET">

    <input type="text" name="uinput" id="">
    <input type="submit" value="Submit">
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $uinput = $_GET["uinput"];

    echo "User INput: ". $uinput;
};



?>









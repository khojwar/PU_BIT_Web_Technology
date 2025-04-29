<?php

$conn = new mysqli("localhost", "root", "", "test_db");

$sql = "SELECT id, name, email FROM user";

$result = $conn->query($sql);

// print_r($result->fetch_assoc())

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>sn</th>
                <th>name</th>
                <th>email</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        // echo "name: ". $row["name"]. "<br>";
        echo "  <tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                </tr>";
    };

    echo "</table>";
}




?>
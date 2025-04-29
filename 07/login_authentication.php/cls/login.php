<?php

/**
 *  get data from form
 *  avoid empty data
 *  query to database 
 * *  check if username and password is correct
 * set session variable
 * *  if correct, redirect to dashboard.php 
 */


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
        // echo $error;
    } else {

        $conn = new mysqli("localhost", "root", "", "myapp");

        $result = $conn->query("SELECT id, username, password FROM users WHERE username = '$username' ");
        $users = $result->fetch_assoc();

        // print_r($users);

        // if ($password == $users['password']) {
        //     session_start();
        //     $_SESSION['username'] = $username;
            
        //     header("location: dashboard.php");
        //     // header("location: dashboard.php?username=$username");
        //     exit();
        // };

        if ($users && password_verify($password, $users['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            
            header("location: dashboard.php");
            exit();
        }

        $conn->close();
    }

 }

?>

<!-- HTML form for login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Login</h1>
    
    <?php if (isset($_GET['registered']) && $_GET['registered'] == 1): ?>
        <div class="success">Registration successful! Please log in.</div>
    <?php endif; ?>
    
    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="post" action="">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    
    <p>Don't have an account? <a href="register.php">Register</a></p>
</body>
</html>

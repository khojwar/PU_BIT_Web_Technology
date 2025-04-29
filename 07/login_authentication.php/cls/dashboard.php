<!-- dashboard.php - Protected page example -->
<?php

session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

// print_r($_SESSION); 


$username = $_SESSION["username"]; // Default username

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, <?php echo ucfirst($username); ?>!</p>
    
    <!-- Dashboard content here -->
    
    <a href="logout.php">Logout</a>
</body>
</html>
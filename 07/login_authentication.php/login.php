<?php
require './config.php';
session_start();

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Both fields are required";
    } else {
        // Get user from database using mysqli
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // print_r($user);
        
        // Verify password
        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true); // Prevent session fixation
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['last_activity'] = time();
            
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid username or password";
        }
        
        $stmt->close();
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

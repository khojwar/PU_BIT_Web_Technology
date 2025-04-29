<?php
// register.php - User registration

require './config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password']; // Raw password for hashing
    
    // Validate input
    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } elseif (strlen($password) < 8) {
        $error = "Password must be at least 8 characters";
    } else {
        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        // $stmt->execute([$username, $email]);
        $stmt->execute();
        $stmt->store_result(); // Store result to check number of rows
        
        if ($stmt->num_rows() > 0) {
            $error = "Username or email already exists";
        } else {
            // Hash password
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert user into database
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $passwordHash);

            $success = $stmt->execute([$username, $email, $passwordHash]);
            
            if ($success) {
                header("Location: login.php?registered=1");
                exit;
            } else {
                $error = "Registration failed";
            }
        }
    }
}
?>

<!-- HTML form for register.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    
    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="post" action="">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    
    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>

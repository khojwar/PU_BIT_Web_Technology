<?php

/**
 *  get values from form
 * validate data
 * check if username and email already exists
 * hash password
 * insert data into database
 * * redirect to login page or dashboard page
 */



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

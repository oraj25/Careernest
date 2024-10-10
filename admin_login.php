<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your database connection file __DIR__ will return the absolute path /var/www/html/project, where signup.php is located
    $mysqli = require __DIR__ . "/DBconnection.php";

    // Prepare the SQL query to avoid SQL injection
    $sql = "SELECT * FROM admin WHERE Email = ?";
    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    // Verify admin and password
    if ($admin) {
        // Use plain text comparison for now (not secure)
        if ($_POST["password"] === $admin["password"]) {
            session_start();
            session_regenerate_id(); // Regenerate session ID for security
            $_SESSION["admin_id"] = $admin["Admin_ID"];
    
            // Redirect to the admin dashboard
            header("Location: adminpage.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - CareerNest Job Portal</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <!-- Left Section -->
        <div class="left-section">
            <h1>Admin SIGN IN</h1>
        </div>

        <!-- Right Section with Form -->
        <div class="right-section">
            <div class="form">
                <?php if ($is_invalid): ?>
                    <em>Invalid login</em>
                <?php endif; ?>

                <form class="content" method="POST" action="admin_login.php">
					<h2>Admin Sign In</h2>
					<label>Email</label>
					<input type="email" class="area" name="email" placeholder="Enter your Email here..." required 
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
					<br />
					<label>Password</label>
					<input type="password" class="area" name="password" placeholder="Enter your Password here..." required />
					<br />	
					<input type="submit" class="button" value="SIGN IN" />
                    <div class="center-links">
                    <a href="signin.php">User</a>
                    <a href="signup.php">Sign-up</a>
                    </div>
				</form>
            </div>
        </div>
    </div>
</body>
</html>

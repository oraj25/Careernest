<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Include your database connection file
    $mysqli = require __DIR__ . "/DBconnection.php";

    // Get form input
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password for storage

    // Check if email already exists
    $check_sql = "SELECT * FROM user WHERE U_email = ?";
    $check_stmt = $mysqli->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows > 0) {
        $is_invalid = true; // Email already exists
    } else {
        // Proceed with insertion
        $insert_sql = "INSERT INTO user (U_email, password_hash) VALUES (?, ?)";
        $insert_stmt = $mysqli->prepare($insert_sql);
        $insert_stmt->bind_param("ss", $email, $hashed_password);

        if ($insert_stmt->execute()) {
            // User created successfully, redirect to sign in or home page
            header("Location: signin.php");
            exit;
        } else {
            // Handle insertion error
            $is_invalid = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal - Sign Up</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h1>SIGN UP</h1>
        </div>
        <div class="right-section">
            <div class="form">
                <?php if ($is_invalid): ?>
                    <em>Email already exists. Please try again.</em>
                <?php endif; ?>

                <form class="content" method="POST" action="signup.php">
                    <h2>Create Your Account</h2>
                    <label>Email</label>
                    <input type="email" class="area" name="email" placeholder="Enter your Email here..." required 
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    <br />
                    <label>Password</label>
                    <input type="password" class="area" name="password" placeholder="Enter your Password here..." required />
                    <br />
                    <br />
                    <input type="submit" class="button" value="SIGN UP" />
                    <div class="center-links">
                        <a href="signin.php">Already have an account? Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

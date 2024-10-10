<?php
session_start();
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/DBconnection.php";

    // Prepare the SQL query to avoid SQL injection
    $sql = "SELECT * FROM user WHERE U_email = ?";
    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_POST["email"]);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify user and password
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            session_regenerate_id(); // Regenerate session ID for security
            $_SESSION["user_id"] = $user["user_id"]; // Make sure to match your column name
            $_SESSION["user_email"] = $user["U_email"]; // Save email for further use

            // Redirect to the user home page
            header("Location: USER_HOME.php");
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
    <title>CareerNest Job Portal - Sign In</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h1>SIGN IN</h1>
        </div>
        <div class="right-section">
            <div class="form">
                <?php if ($is_invalid): ?>
                    <em>Invalid login credentials. Please try again.</em>
                <?php endif; ?>

                <form class="content" method="POST" action="signin.php">
                    <h2>Sign In to Your Account</h2>
                    <label>Email</label>
                    <input type="email" class="area" name="email" placeholder="Enter your Email here..." required 
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    <br />
                    <label>Password</label>
                    <input type="password" class="area" name="password" placeholder="Enter your Password here..." required />
                    <br />
                    <br />	
                    <input type="submit" class="button" value="SIGN IN" />
                    <div class="center-links">
                        <a href="admin_login.php">Admin</a>
                        <a href="signup.php">Sign-up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

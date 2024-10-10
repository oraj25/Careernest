<?php
session_start(); // Start the session
// Enable MySQLi exception handling
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Your DB connection logic
$con = require __DIR__ . "/DBconnection.php"; // Make sure DBconnection.php returns the connection object

try {
    // Hash the password
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $sql = "INSERT INTO user (U_email, password_hash) VALUES (?, ?)";
    
    $stmt = $con->stmt_init();
    
    if (!$stmt->prepare($sql)) {
        throw new Exception("SQL error: " . $con->error);
    }
    
    // Bind the parameters and execute the statement
    $stmt->bind_param("ss", $_POST["email"], $password_hash);
    $stmt->execute();
    
    // If successful, redirect to the success page
    header("Location: sign_up_successfull.php");
    exit;

} catch (mysqli_sql_exception $e) {
    // Handle duplicate email error
    if ($e->getCode() === 1062) {
        // Redirect with an error message
        header("Location: signup.php?error=email_taken");
        exit;
    } else {
        // Handle other database-related errors
        die("Database error: " . $e->getMessage());
    }
} catch (Exception $e) {
    // Handle other errors
    die("Error: " . $e->getMessage());
}

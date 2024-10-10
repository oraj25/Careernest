<?php 
session_start();
// Linking the configuration
require 'config.php';

if (isset($_POST['adminadd'])) {
    // Sanitize inputs to prevent SQL injection
    $AdminName = mysqli_real_escape_string($con, $_POST["Admin_name"]);
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    // Use the correct column names, assuming 'password' is the correct column name
    $sqluser = "INSERT INTO admin (Admin_name, Email, password) VALUES ('$AdminName', '$Email', '$password')";
    
    // Execute SQL query and check if the add(submit) was successful
    if ($con->query($sqluser)) {
        $_SESSION['message'] = "Admin Added Successfully";
        header("Location: admin_logins.php");
        exit(0);
    } else {
        echo "Error: " . $sqluser . "<br>" . $con->error;
    }
}

if (isset($_POST['delete'])) {
    // Sanitize inputs
    $Admin_ID = mysqli_real_escape_string($con, $_POST['delete']);

    // Delete query
    $query = "DELETE FROM admin WHERE Admin_ID='$Admin_ID'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin Deleted Successfully";
        header("Location: admin_logins.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin Not Deleted";
        header("Location: admin_logins.php");
        exit(0);
    }
}

if (isset($_POST['update'])) {
    // Sanitize inputs
    $Admin_ID = mysqli_real_escape_string($con, $_POST['Admin_ID']);  // Assuming id is sent via POST
    $AdminName = mysqli_real_escape_string($con, $_POST["Admin_name"]);
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    // Update query
    $query = "UPDATE admin SET Admin_name='$AdminName', Email='$Email', password='$password' WHERE Admin_ID='$Admin_ID'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Admin Updated Successfully";
        header("Location: admin_logins.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Admin Not Updated";
        header("Location: admin_logins.php");
        exit(0);
    }
}

// Close the database connection
$con->close();
?>

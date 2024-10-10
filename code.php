<?php
session_start();
include('dbcon.php');

// Create User
if(isset($_POST['save_user'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_DEFAULT); // Hashing password

    $query = "INSERT INTO user (U_email, password_hash) VALUES ('$email', '$password')";
    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: user-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "User Not Created";
        header("Location: user-create.php");
        exit(0);
    }
}

// Update User
if(isset($_POST['update_user'])) {
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_DEFAULT); // Hashing password

    $query = "UPDATE user SET U_email='$email', password_hash='$password' WHERE user_id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: userSignInDashbord.php");
        exit(0);
    } else {
        $_SESSION['message'] = "User Not Updated";
        header("Location: userSignInDashbord.php");
        exit(0);
    }
}

// Delete User
if(isset($_POST['delete_user'])) {
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user WHERE user_id='$user_id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: userSignInDashbord.php");
        exit(0);
    } else {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: userSignInDashbord.php");
        exit(0);
    }
}
?>
<?php 
session_start();
// Database connection
require 'config.php'; // Make sure this is the correct path

if (isset($_POST['delete_employer_profile_ft'])) {
    // Get employer ID from hidden input
    $employer_id = mysqli_real_escape_string($con, $_POST['employer_id']);

    // Prepare and run the delete query
    $query = "DELETE FROM employer_profiles WHERE id='$employer_id'";
    $query_run = mysqli_query($con, $query);

    // Check if the query was successful
    if ($query_run) {
        $_SESSION['message'] = "Profile Deleted Successfully";
        header("Location: Company profile .php");
        exit(0);
    } else {
        $_SESSION['message'] = "Profile Not Deleted";
        header("Location: Company profile .php");
        exit(0);
    }
}
?>
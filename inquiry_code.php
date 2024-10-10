<?php
session_start();
require 'inquiry_dbcon.php';

if(isset($_POST['delete_inquiry']))
{
    $inquiry_Inquiry_ID = mysqli_real_escape_string($con, $_POST['delete_inquiry']);

    $query = "DELETE FROM inquiry WHERE Inquiry_ID='$inquiry_Inquiry_ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['inquiry_message'] = "Inquiry Deleted Successfully";
        header("Location: inquiry.php");
        exit(0);
    }
    else
    {
        $_SESSION['inquiry_message'] = "Inquiry Not Deleted";
        header("Location: inquiry.php");
        exit(0);
    }
}

?>

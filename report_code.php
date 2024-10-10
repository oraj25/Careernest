<?php
session_start();
require 'report_dbcon.php';

if(isset($_POST['delete_report']))
{
    $report_Report_ID = mysqli_real_escape_string($con, $_POST['delete_report']);

    $query = "DELETE FROM report WHERE Report_ID='$report_Report_ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['report_message'] = "Report Deleted Successfully";
        header("Location: admin_report.php");
        exit(0);
    }
    else
    {
        $_SESSION['report_message'] = "Report Not Deleted";
        header("Location: admin_report.php");
        exit(0);
    }
}

if(isset($_POST['update_report']))
{
    $report_Report_ID = mysqli_real_escape_string($con, $_POST['Report_ID']);

    $Time_Period = mysqli_real_escape_string($con, $_POST['Time_Period']);
    $Report_Type = mysqli_real_escape_string($con, $_POST['Report_Type']);
    $Details = mysqli_real_escape_string($con, $_POST['Details']);

    $query = "UPDATE report SET Time_Period='$Time_Period', Report_Type='$Report_Type', Details='$Details' WHERE Report_ID='$report_Report_ID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['report_message'] = "Report updated Successfully";
        header("Location: admin_report.php");
        exit(0);
    }
    else
    {
        $_SESSION['report_message'] = "Report Not Updated";
        header("Location: admin_report.php");
        exit(0);
    }

}


if(isset($_POST['save_report']))
{
    $Time_Period = mysqli_real_escape_string($con, $_POST['Time_Period']);
    $Report_Type = mysqli_real_escape_string($con, $_POST['Report_Type']);
    $Details = mysqli_real_escape_string($con, $_POST['Details']);

    $query = "INSERT INTO report (Time_Period,Report_Type,Details) VALUES ('$Time_Period','$Report_Type','$Details')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['report_message'] = "Report Added Successfully";
        header("Location: admin_report.php");
        exit(0);
    }
    else
    {
        $_SESSION['report_message'] = "Report Not Added";
        header("Location: admin_report.php");
        exit(0);
    }
}

?>

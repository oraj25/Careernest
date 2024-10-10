<?php 
    session_start();
    //Linking the configuration 
    require 'config.php';

 
    if (isset($_POST['add']))
    {

     $Template = $_POST["Template"];
     $companyName = $_POST["company_name"];
     $location = $_POST["location"];
     $jobTitle = $_POST["job_title"];
     $jobType = $_POST["job_type"];
     $requirements = $_POST["requirements"];
     $salary = $_POST["salary"];
     $description = $_POST["description"];
     $contactNo = $_POST["contact_no"];
     $email = $_POST["email"];
     $deadLine = $_POST["deadline"];
     
     
      
     $sqluser = "INSERT INTO jobs
          (Template, company_name, location, job_title, job_type, requirements, salary, description, contact_no, email, deadline) 
          VALUES ('$Template','$companyName','$location','$jobTitle','$jobType','$requirements','$salary','$description','$contactNo','$email','$deadLine')";

     /* Execute SQL query and check if the add(submit) was successful */
     
     if ($con->query($sqluser))
     {
        $_SESSION['message'] = "Job Added Successfully";
        header("Location:jobpost.php");
        exit(0);
     } 
     else 
     {
         echo "Not Added";
     }
    }

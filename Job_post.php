<?php 
    session_start();
    //Linking the configuration 
    require 'config_job_post.php';

 
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
        header("Location: manage_job_posts.php");
        exit(0);
     } 
     else 
     {
         echo "Not Added";
     }
    }

    if(isset($_POST['delete']))
{
    $job_id = mysqli_real_escape_string($con, $_POST['delete']);

    $query = "DELETE FROM jobs WHERE id='$job_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Deleted Successfully";
        header("Location: manage_job_posts.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Deleted";
        header("Location: manage_job_posts.php");
        exit(0);
    }
}

if(isset($_POST['update']))
{
     $job_id = $_POST['id'];
     $Template = $_POST['Template'];
     $companyName = $_POST["company_name"];
     $location = $_POST["location"];
     $jobTitle = $_POST["job_title"];
     $jobType = $_POST["job_type"];
     $requirements = $_POST["requirements"];
     $salary = $_POST["salary"];
     $description = $_POST["description"];
     $contactNo = $_POST["contact_no"];
     $email = $_POST["email"];
     $deadline = $_POST["deadline"];

    $query = "UPDATE jobs SET Template='$Template', company_name='$companyName', location='$location', job_title='$jobTitle', job_type='$jobType',
                                 requirements='$requirements', salary='$salary', description='$description', contact_no='$contactNo',
                                 email='$email', deadline='$deadline' 
                                 WHERE id='$job_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Job Updated Successfully";
        header("Location: manage_job_posts.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Job Not Updated";
        header("Location: manage_job_posts.php");
        exit(0);
    }

}

    $con->close();

?>

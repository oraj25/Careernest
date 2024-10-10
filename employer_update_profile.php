<?php 
    session_start();
    //Linking the configuration 
    require 'config.php';
    
    if(isset($_POST['employer_profile_update']))
    {
    $employer_id=  mysqli_real_escape_string($con, $_POST['employer_id']);
    $companyName = mysqli_real_escape_string($con, $_POST['companyName']);
    $empFirstName = mysqli_real_escape_string($con, $_POST['Empfname']);
    $empLastName =mysqli_real_escape_string($con,  $_POST['Emplname']);
    $companyEmail = mysqli_real_escape_string($con, $_POST['Empcoemail']);
    $personalEmail = mysqli_real_escape_string($con, $_POST['Empperemail']);
    $companyPhone = mysqli_real_escape_string($con, $_POST['EmpCno']);
    $personalPhone =mysqli_real_escape_string($con,  $_POST['EmpPno']);
    $industry = $_POST['industry'];
    $country = mysqli_real_escape_string($con, $_POST['comploc']);
    $city = mysqli_real_escape_string($con, $_POST['comploccity']);
    $facebookLink =mysqli_real_escape_string($con,  $_POST['Socialfb']);
    $linkedinLink =mysqli_real_escape_string($con,  $_POST['Sociallinkedin']);
    $companyDetails = mysqli_real_escape_string($con, $_POST['Details']);
    $gender = $_POST['gender'];


    $query = "UPDATE employer_profiles SET  
                        company_name='$companyName',
                        employer_first_name='$empFirstName',
                        employer_last_name='$empLastName',
                        company_email='$companyEmail',
                        personal_email='$personalEmail',
                        company_phone='$companyPhone',
                        personal_phone='$personalPhone',
                        industry='$industry',
                        country='$country',
                        city='$city',
                        facebook_link='$facebookLink',
                        linkedin_link='$linkedinLink',
                        gender='$gender', 
                        company_details='$companyDetails' 
            WHERE id='$employer_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Profile Updated Successfully";
        header("Location: company_profiles.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Profile Not Updated";
        header("Location: company_profiles.php");
        exit(0);
    }

}
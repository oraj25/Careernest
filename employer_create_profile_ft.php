<?php 
    session_start();
    //Linking the configuration 
    require 'config.php';

    if(isset($_POST['employer_profile_Create']))
    {
         // Retrieve form data
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
        $gender = $_POST['gender'];
        $companyDetails = mysqli_real_escape_string($con, $_POST['Details']);
//mysqli_real_escape_string is a function in PHP that is used to escape special characters in a string before sending it to a MySQL database query. It helps prevent SQL injection attacks by making sure that special characters  in user input are properly escaped, thus preventing them from being treated as part of the SQL command.

    //quary to write data in the tablae
        $query = "INSERT INTO employer_profiles (company_name ,
                                                employer_first_name ,
                                                employer_last_name,
                                                company_email,
                                                personal_email,
                                                company_phone,
                                                personal_phone,
                                                industry,
                                                country,
                                                city,
                                                facebook_link,
                                                linkedin_link,
                                                gender,
                                                company_details) 
                VALUES ('$companyName',
                        '$empFirstName',
                        '$empLastName',
                        '$companyEmail',
                        '$personalEmail',
                        '$companyPhone', 
                        '$personalPhone', 
                        '$industry', 
                        '$country',
                        '$city',
                        '$facebookLink',
                        '$linkedinLink',
                        '$gender',
                        '$companyDetails')";
    
        $query_run = mysqli_query($con, $query);


        if($query_run)
        {
            $_SESSION['message'] = "profile Created Successfully";
            header("Location: USER_HOME.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "profile Not Created";
            header("Location: USER_HOME.php");
            exit(0);
        }
    }
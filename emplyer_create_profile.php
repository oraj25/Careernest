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
            header("Location: company_profiles.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "profile Not Created";
            header("Location: company_profiles.php");
            exit(0);
        }
    }

   






























































  /*  // SQL insert statement
    $sql = "INSERT INTO employer_Profile (

        Company_Name, 
        Employer_First_Name, 
        Employer_Last_Name, 
        Company_Email, 
        Personal_Email, 
        Company_Phone, 
        Personal_Phone, 
        Industry, 
        Country, 
        City, 
        Facebook_Link, 
        LinkedIn_Link, 
        Gender, 
        Company_Details
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssssssssss", 
        $companyName, 
        $empFirstName, 
        $empLastName, 
        $companyEmail, 
        $personalEmail, 
        $companyPhone, 
        $personalPhone, 
        $industry, 
        $country, 
        $city, 
        $facebookLink, 
        $linkedinLink, 
        $gender, 
        $companyDetails
    );

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "New employer and profile relation created successfully!";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Close the connection
    mysqli_close($conn);

    //Linking the configuration 
   /* require 'config.php';

    // Retrieve form data
    $companyName = $_POST['companyName'];
    $empFirstName = $_POST['Empfname'];
    $empLastName = $_POST['Emplname'];
    $companyEmail = $_POST['Empcoemail'];
    $personalEmail = $_POST['Empperemail'];
    $companyPhone = $_POST['EmpCno'];
    $personalPhone = $_POST['EmpPno'];

    // Check if 'industry' is an array, if not, handle accordingly
    if (isset($_POST['industry']) && is_array($_POST['industry'])) {
        $industry = implode(", ", $_POST['industry']); // Combine selected industries
    } else {
        $industry = $_POST['industry']; // Handle single industry selection
    }

    $country = $_POST['comploc'];
    $city = $_POST['comploccity'];
    $facebookLink = $_POST['Socialfb'];
    $linkedinLink = $_POST['Sociallinkedin'];
    $gender = $_POST['gender'];
    $companyDetails = $_POST['Details'];

    // Insert into Employer table
    $sqlEmployer = "INSERT INTO Employer (Email, Password, Company_Name, Industry, Social_Media, Position) VALUES (?, ?, ?, ?, ?, ?)";

    // Create prepared statement for Employer
    $stmtEmployer = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmtEmployer, $sqlEmployer)) {
        die(mysqli_error($conn));
    }

    // Assuming you're passing Password and Position (you can modify as needed)
    $password = "hashed_password"; // Hash password as needed
    $position = "CEO"; // Example position, modify as necessary

    mysqli_stmt_bind_param($stmtEmployer, "ssssss", 
        $companyEmail, 
        $password, 
        $companyName, 
        $industry, 
        $facebookLink, // Assuming social media is passed as Facebook here
        $position
    );

    // Execute the statement for Employer
    if (mysqli_stmt_execute($stmtEmployer)) {
        // Get the last inserted Employer_ID
        $employerID = mysqli_insert_id($conn);

        // Insert into Profile table (you can also modify as necessary)
        $sqlProfile = "INSERT INTO Profile (User_ID, First_Name, Last_Name, Email, Phone_Number, Gender, City, Country, Description) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmtProfile = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmtProfile, $sqlProfile)) {
            die(mysqli_error($conn));
        }

        // Bind and execute the statement for Profile
        mysqli_stmt_bind_param($stmtProfile, "issss", 
            $employerID, 
            $empFirstName, 
            $empLastName, 
            $personalEmail, 
            $personalPhone, 
            $gender, 
            $city, 
            $country, 
            $companyDetails
        );

        if (mysqli_stmt_execute($stmtProfile)) {
            $profileID = mysqli_insert_id($conn); // Get the Profile_ID

            // Insert into Employer_Profile_Relation
            $sqlRelation = "INSERT INTO Employer_Profile_Relation (Employer_ID, Profile_ID, Company_Name, Employer_First_Name, Employer_Last_Name) 
                            VALUES (?, ?, ?, ?, ?)";
            $stmtRelation = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmtRelation, $sqlRelation)) {
                die(mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmtRelation, "iisss", 
                $employerID, 
                $profileID, 
                $companyName, 
                $empFirstName, 
                $empLastName
            );

            if (mysqli_stmt_execute($stmtRelation)) {
                echo "New employer and profile relation created successfully!";
            } else {
                echo "Error inserting into Employer_Profile_Relation: " . mysqli_stmt_error($stmtRelation);
            }

        } else {
            echo "Error inserting into Profile: " . mysqli_stmt_error($stmtProfile);
        }

    } else {
        echo "Error inserting into Employer: " . mysqli_stmt_error($stmtEmployer);
    }

    // Close the connection
    mysqli_close($conn);*/




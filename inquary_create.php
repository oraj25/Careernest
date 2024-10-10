<?php 
    session_start();
    //Linking the configuration 
    require 'dbcon.php';

    if(isset($_POST['inquary_Create']))
    {
         // Retrieve form data
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
        $telephone =mysqli_real_escape_string($con,  $_POST['telephone']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
      
//mysqli_real_escape_string is a function in PHP that is used to escape special characters in a string before sending it to a MySQL database query. It helps prevent SQL injection attacks by making sure that special characters  in user input are properly escaped, thus preventing them from being treated as part of the SQL command.

    //quary to write data in the tablae
        $query = "INSERT INTO inquiry (User_Name ,
                                                User_Email ,
                                                Phone_Number,
                                                Message) 

                VALUES ('$firstName',
                        '$emailAddress',
                        '$telephone',
                        '$message')";
    
        $query_run = mysqli_query($con, $query);


        if($query_run)
        {
            $_SESSION['message'] = "Message send";
            header("Location: contact.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Message unsend";
            header("Location: contact.php");
            exit(0);
        }
    }
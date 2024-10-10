<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $job = $_POST["job"];
    $skill = $_POST["skill"];
    $experiance = $_POST["experiance"];

    $sql = "INSERT INTO employee (id, name, email, password, job, skill, experiance) VALUES ('$id', '$name', '$email', '$password', '$job', '$skill', '$experiance')";
 
    if ($con->query($sql)) {
        
        header("Location: display.php");
        exit;
    } else {
        echo "Error: " . $con->error;
    }
}


$con->close();

?>
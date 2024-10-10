<?php

$host = "localhost";
$dbname = "careernest";
$username = "root";
$password = "";

$con = mysqli_connect(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

return $con;
<?php
// Create connection
$con = new mysqli("localhost","root","","careernest");

// Check connection
if($con->connect_error)
{
    die("Connection Failed".$con->connect_error);
}

?>
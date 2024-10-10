<?php
// Create connection
$con = mysqli_connect('localhost', 'root', '', 'careernest');

// Check connection
if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>

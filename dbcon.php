<?php
$con = mysqli_connect("localhost", "root", "", "careernest");

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
<?php
session_start();
include('dbcon.php');

if(isset($_GET['id'])) {
    $user_id = mysqli_real_escape_string($con, $_GET['id']);
    $query = "SELECT * FROM user WHERE user_id='$user_id'";
    $query_run = mysqli_query($con, $query);
    $user = mysqli_fetch_array($query_run);
} else {
    echo "No user ID provided.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/Viewbord.css" rel="stylesheet">
    <title>View User</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>User Details</h4>
            <a href="userSignInDashbord.php" class="btn btn-danger float-end">BACK</a>
        </div>
        <div class="card-body">
            <div>
                <h5>Email</h5>
                <h5>Password Hash</h5>
            </div>
            <div>
                <p><?= $user['U_email']; ?></p>
                <p><?= $user['password_hash']; ?></p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
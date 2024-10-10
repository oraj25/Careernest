<?php
session_start();
include('dbcon.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/EditDAShbord.css" rel="stylesheet">
    <title>Create User</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/Message.css">
</head>
<body>
  
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Create User</h4>
            <a href="userSignInDashbord.php" class="btn btn-danger float-end">BACK</a>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="bt-3">
                    <button type="submit" name="save_user" class="btn btn-primary">Save User</button>
                </div>
                <?php include('message.php'); ?>
            </form>
        </div>
    </div>
</div>

</body>
</html>
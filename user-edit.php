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
    <link href="CSS/EditDAShbord.css" rel="stylesheet">
    <title>Edit User</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Edit User</h4>
            <a href="userSignInDashbord.php" class="btn btn-danger float-end">BACK</a>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST">
                <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $user['U_email']; ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="bt-3">
                    <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<?php
session_start();
include('dbcon.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>User List</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/Message.css">
    <link href="CSS/Dashbord.css" rel="stylesheet">

</head>
<body>

<div class="sidebar">
        <h2>CareerNest</h2>
        <ul>
            <li><a href="adminpage.php">Overview</a></li>
            <li><a href="admin_logins.php">Admin Logins</a></li>
            <li><a href="userSignInDashbord.php">User Log In</a></li>
            <li><a href="display.php">Job Seeker Profiles</a></li>
            <li><a href="company_profiles.php">Company Profiles</a></li>
            <li><a href="manage_job_posts.php">Manage Job Posts</a></li>
            <li><a href="admin_report.php">Reports</a></li>
            <li><a href="inquiry.php">Messages</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <button id="logoutBtn">Logout</button>
            
        </header>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class = "my_H4">User Details</h4>
                <a href="user-create.php" class="btn btn-primary">Add User</a> <!-- Retained the button style -->
            </div>
        <div class="card-body">
                <?php include('message.php'); ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM user";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0) {
                            foreach($query_run as $user) {
                                ?>
                                <tr>
                                    <td><?= $user['user_id']; ?></td>
                                    <td><?= $user['U_email']; ?></td>
                                    <td>
                                    <div class="btn-group">
                                        <a href="user-view.php?id=<?= $user['user_id']; ?>" class="btn btn-info btn-sm">View</a>
                                        <a href="user-edit.php?id=<?= $user['user_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_user" value="<?= $user['user_id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='3' class='text-center'>No Record Found</td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer>
    <p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy & Policy</a></p>
</footer>
    </div>
    <script src="JS/admin.js"></script>
</body>
</html>
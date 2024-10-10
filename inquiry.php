<?php
    session_start();
    require 'inquiry_dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="CSS/inquiry.css" rel="stylesheet">
    <link href="CSS/inquiry_message.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/admin.css">
    <link href="CSS/manage_job_posts.css" rel="stylesheet">

    <title>CareerNest</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
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
            <button id="logoutBtn"> <a href="sign_out.php">Logout</a></button>
            
        </header>
  
    <div class="container mt-4">

        <?php include('inquiry_message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Inquiry Details
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Inquiry ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM inquiry";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $inquiry)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $inquiry['Inquiry_ID']; ?></td>
                                                <td><?= $inquiry['User_Name']; ?></td>
                                                <td><?= $inquiry['User_Email']; ?></td>
                                                <td><?= $inquiry['Phone_Number']; ?></td>
                                                <td><?= $inquiry['Message']; ?></td>
                                                <td>
                                                    <a id="tx" href="inquiry_view.php?Inquiry_ID=<?= $inquiry['Inquiry_ID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <form id="tx" action="inquiry_code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_inquiry" value="<?=$inquiry['Inquiry_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
            <p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy & Policy</a></p>
        </footer>
    </div>

</body>
</html>
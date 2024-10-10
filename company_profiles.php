<?php
session_start();
// Create connection
require 'DBconnection.php';

// Turn on error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Company Profiles</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

    <link rel="stylesheet" href="CSS/admin.css">
    <link href="CSS/manage_job_posts.css" rel="stylesheet">
    <link href="CSS/alert.css" rel="stylesheet">
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
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Vacancy Details
                            <a id="tx" href="admin_company_Form.php" class="btn btn-primary float-end">Add Jobs</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php include('alert.php'); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Employer First Name</th>
                                    <th>Company Email</th>
                                    <th>Personal Email</th>
                                    <th>Company Phone</th>
                                    <th>Industry</th>
                                    <th>Facebook Link</th>
                                    <th>LinkedIn Link</th>
                                    <th>Company Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM employer_profiles";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $Employer) {
                                ?>
                                <tr>
                                    <td><?= $Employer['id']; ?></td>
                                    <td><?= $Employer['company_name']; ?></td>
                                    <td><?= $Employer['employer_first_name']; ?></td>
                                    <td><?= $Employer['company_email']; ?></td>
                                    <td><?= $Employer['personal_email']; ?></td>
                                    <td><?= $Employer['company_phone']; ?></td>
                                    <td><?= $Employer['industry']; ?></td>
                                    <td><?= $Employer['facebook_link']; ?></td>
                                    <td><?= $Employer['linkedin_link']; ?></td>
                                    <td><?= $Employer['company_details']; ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a id="tx" href="Employer_profile_view.php?id=<?= $Employer['id']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a id="tx" href="Employer_profile_form.php?id=<?= $Employer['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="emplyer_delete_profile.php" method="POST">
                                                <button type="submit" name="delete_employer_profile" value="<?= $Employer['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    } else {
                                        echo "<h5>No Record Found</h5>";
                                    }
                                ?>
                            </tbody>
                        </table> <!-- Moved here to close the table -->
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy & Policy</a></p>
        </footer>

    </div>            

    <script src="company_profiles.js"></script>
    <script src="JS/admin.js"></script>

</body>
</html>

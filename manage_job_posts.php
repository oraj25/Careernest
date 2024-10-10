<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Job Posts</title>
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

    <div class="container mt-4">
        <header>
            <h1>Manage Job Posts</h1>
            
                <button id ="logoutBtn"  name="logout" class="btn btn-danger float-end">Logout</button>
            
        </header>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Vacancy Details
                            <a id="tx" href="admin_Form.php" class="btn btn-primary float-end">Add Jobs</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php include('alert.php'); ?>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Template</th> <!-- Retained Template Column -->
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Job Title</th>
                                    <th>Job Type</th>
                                    <th>Requirements</th>
                                    <th>Salary</th>
                                    <th>Description</th>
                                    <th>Contact No</th>
                                    <th>Email</th>
                                    <th>Deadline</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM jobs";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $job) {
                                            ?>
                                            <tr>
                                                <td><?= htmlspecialchars($job['id']); ?></td>
                                                <td><?= htmlspecialchars($job['Template']); ?></td> <!-- Retained Template Data -->
                                                <td><?= htmlspecialchars($job['company_name']); ?></td>
                                                <td><?= htmlspecialchars($job['location']); ?></td>
                                                <td><?= htmlspecialchars($job['job_title']); ?></td>
                                                <td><?= htmlspecialchars($job['job_type']); ?></td>
                                                <td><?= htmlspecialchars($job['requirements']); ?></td>
                                                <td><?= htmlspecialchars($job['salary']); ?></td>
                                                <td><?= htmlspecialchars($job['description']); ?></td>
                                                <td><?= htmlspecialchars($job['contact_no']); ?></td>
                                                <td><?= htmlspecialchars($job['email']); ?></td>
                                                <td><?= htmlspecialchars($job['deadline']); ?></td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <a id="tx" href="view_job.php?id=<?= $job['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a id="tx" href="edit_job.php?id=<?= $job['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="job_post.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete" value="<?= $job['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
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

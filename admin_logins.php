<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Job Posts</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/admin.css">

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
            <h1>Manage Admins</h1>
            <button id="logoutBtn">Logout</button>
            
        </header>

        
        <?php
    session_start();
    require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/admin_logins.css" rel="stylesheet">
    <link href="CSS/alert.css" rel="stylesheet">

    <title>Admin CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('alert.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin logins Details
                            <a id="tx" href="add_admin.php" class="btn btn-primary float-end">Add Admin</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Admin_ID</th>
                                    <th>Admin Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM admin";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $admin)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $admin['Admin_ID']; ?></td>
                                                <td><?= $admin['Admin_name']; ?></td>
                                                <td><?= $admin['Email']; ?></td>
                                                <td><?= $admin['password']; ?></td>
                                                <td>
                                                <div class="action-buttons">
                                                    <a id="tx" href="view_admin_logins.php?Admin_ID=<?= $admin['Admin_ID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a id="tx" href="edit_admin_logins.php?Admin_ID=<?= $admin['Admin_ID']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="admin_logins_crud.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" value="<?=$admin['Admin_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                    </div>
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

    

</body>
</html>

        

        <footer>
            <p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy & Policy</a></p>
        </footer>
    </div>

    <script src="JS/admin.js"></script>
</body>
</html>

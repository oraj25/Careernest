<?php
session_start();
require 'config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/edit_admin_logins.css" rel="stylesheet">
    <link href="CSS/alert.css" rel="stylesheet">

    <title>Admin Edit</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('alert.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin Logins Edit 
                            <a id="tx" href="admin_logins.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['Admin_ID']))
                        {
                            $Admin_ID = mysqli_real_escape_string($con, $_GET['Admin_ID']);
                            $query = "SELECT * FROM admin WHERE Admin_ID='$Admin_ID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $admin = mysqli_fetch_array($query_run);
                                ?>
                                <form action="admin_logins_crud.php" method="POST">
                                    
                                    <input type="hidden" name="Admin_ID" value="<?= $admin['Admin_ID']; ?>">

                                    <div class="mb-3">
                                        <label>Admin name</label>
                                        <input type="text" name="Admin_name" value="<?=$admin['Admin_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="Email" value="<?=$admin['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?=$admin['password'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary"onclick="window.location.href='admin_logins_crud.php'">Update Admin </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
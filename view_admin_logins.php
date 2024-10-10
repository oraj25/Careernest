<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/view_admin_logins.css" rel="stylesheet">

    <title>Admin View</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin View Details 
                            <a id="txx" href="admin_logins.php" class="btn btn-danger float-end">BACK</a>
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
                                
                                    <div class="mb-3">
                                        <label>Admin Name</label>
                                        <p class="form-control">
                                            <?=$admin['Admin_name'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$admin['Email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <p class="form-control">
                                            <?=$admin['password'];?>
                                        </p>
                            </div>

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

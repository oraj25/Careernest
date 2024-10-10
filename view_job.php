<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/view_job.css" rel="stylesheet">

    <title>Job View</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Job View Details 
                            <a id="txx" href="manage_job_posts.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $job_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM jobs WHERE id='$job_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $job = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Template</label>
                                        <p class="form-control">
                                            <?=$job['Template'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Company Name</label>
                                        <p class="form-control">
                                            <?=$job['company_name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <p class="form-control">
                                            <?=$job['location'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Title</label>
                                        <p class="form-control">
                                            <?=$job['job_title'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Type</label>
                                        <p class="form-control">
                                            <?=$job['job_type'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Requirements</label>
                                        <p class="form-control">
                                            <?=$job['requirements'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary</label>
                                        <p class="form-control">
                                            <?=$job['salary'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <p class="form-control">
                                            <?=$job['description'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact No</label>
                                        <p class="form-control">
                                            <?=$job['contact_no'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$job['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Dead Line</label>
                                        <p class="form-control">
                                            <?=$job['deadline'];?>
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

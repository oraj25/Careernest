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

    <link href="CSS/edit_job.css" rel="stylesheet">
    <link href="CSS/alert.css" rel="stylesheet">

    <title>Job Edit</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('alert.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Vacancy Edit 
                            <a id="tx" href="manage_job_posts.php" class="btn btn-danger float-end">BACK</a>
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
                                <form action="Job_post.php" method="POST">
                                    
                                    <input type="hidden" name="id" value="<?= $job['id']; ?>">

                                    <div class="radio-group">
                                        <input type="radio" id="local" name="Template" value="Local">
                                        <label for="local">Local</label>

                                        <input type="radio" id="foreign" name="Template" value="Foreign">
                                        <label for="foreign">Foreign</label>

                                        <input type="radio" id="online" name="Template" value="Online">
                                        <label for="online">Online</label>
                                    </div>

                                    <div class="mb-3">
                                        <label>Company Name</label>
                                        <input type="text" name="company_name" value="<?=$job['company_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <input type="text" name="location" value="<?=$job['location'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Job Title</label>
                                        <input type="text" name="job_title" value="<?=$job['job_title'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">

                                    <label>Job Type</label>
                                    <select name="job_type" class="form-control">
                                        <option value="Full-Time" <?= $job['job_type'] == 'Full-Time' ? 'selected' : ''; ?>>Full-Time</option>
                                        <option value="Part-Time" <?= $job['job_type'] == 'Part-Time' ? 'selected' : ''; ?>>Part-Time</option>
                                        <option value="Internship" <?= $job['job_type'] == 'Internship' ? 'selected' : ''; ?>>Internship</option>
                                    </select>

                                    </div>
                                    <div class="mb-3">
                                        <label>Requirements</label>
                                        <select name="requirements" class="form-control">
                                        <option value="Bachelor Degree" <?= $job['requirements'] == 'Bachelor Degree' ? 'selected' : ''; ?>>Bachelor Degree</option>
                                        <option value="Master Degree" <?= $job['requirements'] == 'Master Degree' ? 'selected' : ''; ?>>Master Degree</option>
                                        <option value="phD" <?= $job['requirements'] == 'phD' ? 'selected' : ''; ?>>phD</option>
                                    </select>
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label>Salary</label>
                                        <input type="text" name="salary" value="<?=$job['salary'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <input type="text" name="description" value="<?=$job['description'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact No</label>
                                        <input type="text" name="contact_no" value="<?=$job['contact_no'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$job['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Dead Line</label>
                                        <input type="date" name="deadline" value="<?=$job['deadline'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary"onclick="window.location.href='job_post.php'">Update job vacancy</button>
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
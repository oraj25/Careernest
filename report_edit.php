<?php
session_start();
require 'report_dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--all page CSS -->
    <link href="CSS/report_edit.css" rel="stylesheet">

    <title>Report Edit</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

</head>
<body>
  
    <div class="container mt-5">

        <?php include('report_message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Report Edit 
                            <a href="admin_report.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['Report_ID']))
                        {
                            $report_Report_ID = mysqli_real_escape_string($con, $_GET['Report_ID']);
                            $query = "SELECT * FROM report WHERE Report_ID='$report_Report_ID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $report = mysqli_fetch_array($query_run);
                                ?>
                                <form action="report_code.php" method="POST">
                                    <input type="hidden" name="Report_ID" value="<?= $report['Report_ID']; ?>">

                                    <div class="mb-3">
                                        <label>Time Period</label>
                                        <input type="text" name="Time_Period" value="<?=$report['Time_Period'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Report Type</label>
                                        <input type="text" name="Report_Type" value="<?=$report['Report_Type'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Details</label>
                                        <input type="text" name="Details" value="<?=$report['Details'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_report" class="btn btn-primary">
                                            Update report
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Report Id Found</h4>";
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
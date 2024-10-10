<?php
require 'report_dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/report_view.css" rel="stylesheet">

    <title>Report View</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Report View Details 
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
                                
                                    <div class="mb-3">
                                        <label>Time Period</label>
                                        <p class="form-control">
                                            <?=$report['Time_Period'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Report Type</label>
                                        <p class="form-control">
                                            <?=$report['Report_Type'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Details</label>
                                        <p class="form-control">
                                            <?=$report['Details'];?>
                                        </p>
                                    </div>
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
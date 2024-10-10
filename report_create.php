<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/report_create.css" rel="stylesheet">

    <title>Report Create</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

</head>
<body>
  
    <div class="container mt-5">

        <?php include('report_message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Report Add 
                            <a href="admin_report.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="report_code.php" method="POST">

                            <div class="mb-3">
                                <label>Time Period</label>
                                <input type="text" name="Time_Period" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Report Type</label>
                                <input type="text" name="Report_Type" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Details</label>
                                <input type="text" name="Details" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_report" class="btn btn-primary">Save report</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

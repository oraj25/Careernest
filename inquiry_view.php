<?php
require 'inquiry_dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="CSS/inquiry_view.css" rel="stylesheet">

    <title>Inquiry View</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Inquiry View Details 
                            <a href="inquiry.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['Inquiry_ID']))
                        {
                            $inquiry_Inquiry_ID = mysqli_real_escape_string($con, $_GET['Inquiry_ID']);
                            $query = "SELECT * FROM inquiry WHERE Inquiry_ID='$inquiry_Inquiry_ID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $inquiry = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>User Name</label>
                                        <p class="form-control">
                                            <?=$inquiry['User_Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Email</label>
                                        <p class="form-control">
                                            <?=$inquiry['User_Email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <p class="form-control">
                                            <?=$inquiry['Phone_Number'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Message</label>
                                        <p class="form-control">
                                            <?=$inquiry['Message'];?>
                                        </p>
                                    </div>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Inquiry Id Found</h4>";
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
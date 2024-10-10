<?php 
    session_start();
    //Linking the configuration 
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile View Details</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/emp_form.css">
</head>
<body>

<div class="form-container">


    <h2>Employer Profile View Details</h2>
    <hr><br>
    <?php
        if(isset($_GET['id']))
        {
            $employer_id = mysqli_real_escape_string($con, $_GET['id']);
            $query = "SELECT * FROM employer_profiles WHERE id='$employer_id' ";
            $query_run = mysqli_query($con, $query);

             if(mysqli_num_rows($query_run) > 0)
            {
                  $employer = mysqli_fetch_array($query_run);
     ?>

                   

                        <input type="hidden" name="employer_id" value = "<?=$employer_id ?>">
        
                        <!-- Company Name -->
                        <div class="form-group">
                            <label for="companyName">Company Name:</label>
                            <p>
                                <?=$employer['company_name'] ?>
                            </p>
                        </div>

                        <!-- Employer Name -->
                        <div class="form-group">
                            <label for="EmployerFName">Employer First Name:</label>
                            
                            <p>
                                <?=$employer['employer_first_name'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="EmployerLName">Employer Last Name:</label>
                            <p>
                                <?=$employer['employer_last_name'] ?>
                            </p>
                        </div>

                        <!-- Contact Emails -->
                        <div class="form-group">
                            <label for="EmpcopcontactEmail">Company Email:</label>
                            <p>
                                <?=$employer['company_email'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="EmpcontactEmail">Personal Email:</label>
                            <p>
                                <?=$employer['personal_email'] ?>
                            </p>
                        </div>

                        <!-- Contact Numbers -->
                        <div class="form-group">
                            <label for="CompanycontactNo">Company Contact Number:</label>
                            <p>
                                <?=$employer['company_phone'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="PersonalcontactNo">Personal Contact Number:</label>
                            <p>
                                <?=$employer['personal_phone'] ?>
                            </p>
                        </div>

                        <label for="jobCategories">Industry</label>
                        <div id="jobCategories">
                            <p>
                                <?=$employer['industry'] ?>
                            </p>
                            
                        </div>
                        <!-- Location -->
                        <div class="form-group">
                            <label for="copmCountry">Country:</label>
                            <p>
                                <?=$employer['country'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="copmCity">City:</label>
                            <p>
                                <?=$employer['city'] ?>
                            </p>
                        </div>

                        <!-- Social Media -->
                        <div class="form-group">
                            <label for="SocialMediafb">Facebook Profile:</label>
                            <p>
                                <?=$employer['facebook_link'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="SocialMedialinkedin">LinkedIn Profile:</label>
                            <p>
                                <?=$employer['linkedin_link'] ?>
                            </p>
                        </div>

                        <div class="form-group">
                        <label for="gender">Gender:</label><br>
                            <p>
                                <?=$employer['gender'] ?>
                            </p>
     
                        </div>

                        
                        <!-- Company Details -->
                        <div class="form-group">
                            <label for="companyDetails">Company Details:</label>
                           
                            <p>
                                <?=$employer['company_details'] ?>
                            </p>
                        </div>
                        <button type="button" id="Cancel"  onclick="window.location.href='company_profiles.php'">back</button>

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


</body>
</html>

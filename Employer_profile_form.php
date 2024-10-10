<?php 
session_start();
// Linking the configuration 
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/emp_form.css">
    <title>Employer Profile Form</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>

<div class="form-container">

    <h2>Employer Profile Form</h2>
    <hr><br>
    <?php
    if (isset($_GET['id'])) {
        $employer_id = mysqli_real_escape_string($con, $_GET['id']);
        $query = "SELECT * FROM employer_profiles WHERE id='$employer_id' ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
            $employer = mysqli_fetch_array($query_run);
    ?>

            <form class="employer-form" action="employer_update_profile.php" method="post">

                <input type="hidden" name="employer_id" value="<?=$employer_id ?>">

                <!-- Company Name -->
                <div class="form-group">
                    <label for="companyName">Company Name:</label>
                    <input type="text" id="companyName" placeholder="Enter Company Name" name="companyName" value="<?=$employer['company_name'] ?>" required>
                </div>

                <!-- Employer Name -->
                <div class="form-group">
                    <label for="EmployerFName">Employer First Name:</label>
                    <input type="text" id="EmployerFName" placeholder="Enter Employer First Name" name="Empfname" value="<?=$employer['employer_first_name'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="EmployerLName">Employer Last Name:</label>
                    <input type="text" id="EmployerLName" placeholder="Enter Employer Last Name" name="Emplname" value="<?=$employer['employer_last_name'] ?>" required>
                </div>

                <!-- Contact Emails -->
                <div class="form-group">
                    <label for="EmpcopcontactEmail">Company Email:</label>
                    <input type="email" id="EmpcopcontactEmail" placeholder="Enter Company Email" name="Empcoemail" value="<?=$employer['company_email'] ?>"required>
                </div>

                <div class="form-group"  style="display: none;">
                    <label for="EmpcontactEmail">Personal Email:</label>
                    <input type="hidden" id="EmpcontactEmail" placeholder="Enter Personal Email" name="Empperemail" value="<?=$employer['personal_email'] ?>">
                </div>

                <!-- Contact Numbers -->
                <div class="form-group">
                    <label for="CompanycontactNo">Company Contact Number:</label>
                    <input type="text" id="CompanycontactNo" placeholder="Enter Company Contact Number" name="EmpCno" value="<?=$employer['company_phone'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="PersonalcontactNo">Personal Contact Number:</label>
                    <input type="text" id="PersonalcontactNo" placeholder="Enter Personal Contact Number" name="EmpPno" value="<?=$employer['personal_phone'] ?>">
                </div>

                <label for="jobCategories">Industry</label>
                <div id="jobCategories">
                    <label for="tech">Technology</label>
                    <input type="radio" id="tech" name="industry" value="tech" <?php echo ($employer['industry'] === 'tech') ? 'checked' : ''; ?> required><br>
                    
                    <label for="finance">Finance</label>
                    <input type="radio" id="finance" name="industry" value="finance" <?php echo ($employer['industry'] === 'finance') ? 'checked' : ''; ?>><br>
                    
                    <label for="healthcare">Healthcare</label>
                    <input type="radio" id="healthcare" name="industry" value="healthcare" <?php echo ($employer['industry'] === 'healthcare') ? 'checked' : ''; ?>><br>


                    <label for="education">Education</label>
                    <input type="radio" id="education" name="industry" value="education" <?php echo ($employer['industry'] === 'education') ? 'checked' : ''; ?>><br>

                    <label for="construction">Construction</label>
                    <input type="radio" id="construction" name="industry" value="construction" <?php echo ($employer['industry'] === 'construction') ? 'checked' : ''; ?>><br>

                    <label for="retail">Retail</label>
                    <input type="radio" id="retail" name="industry" value="retail" <?php echo ($employer['industry'] === 'retail') ? 'checked' : ''; ?>><br>

                    <label for="marketing">Marketing & Advertising</label>
                    <input type="radio" id="marketing" name="industry" value="marketing" <?php echo ($employer['industry'] === 'marketing') ? 'checked' : ''; ?>><br>

                    <label for="manufacturing">Manufacturing</label>
                    <input type="radio" id="manufacturing" name="industry" value="manufacturing" <?php echo ($employer['industry'] === 'manufacturing') ? 'checked' : ''; ?>><br>

                    <label for="logistics">Logistics</label>
                    <input type="radio" id="logistics" name="industry" value="logistics" <?php echo ($employer['industry'] === 'logistics') ? 'checked' : ''; ?>><br>

                    <label for="hospitality">Hospitality</label>
                    <input type="radio" id="hospitality" name="industry" value="hospitality" <?php echo ($employer['industry'] === 'hospitality') ? 'checked' : ''; ?>><br>

                    <label for="realestate">Real Estate</label>
                    <input type="radio" id="realestate" name="industry" value="realestate" <?php echo ($employer['industry'] === 'realestate') ? 'checked' : ''; ?>><br>

                    <label for="entertainment">Entertainment</label>
                    <input type="radio" id="entertainment" name="industry" value="entertainment" <?php echo ($employer['industry'] === 'entertainment') ? 'checked' : ''; ?>><br>

                    <label for="legal">Legal</label>
                    <input type="radio" id="legal" name="industry" value="legal" <?php echo ($employer['industry'] === 'legal') ? 'checked' : ''; ?>><br>

                    <label for="government">Government</label>
                    <input type="radio" id="government" name="industry" value="government" <?php echo ($employer['industry'] === 'government') ? 'checked' : ''; ?>><br>
                </div>

                <!-- Location -->
                <div class="form-group">
                    <label for="copmCountry">Country:</label>
                    <input type="text" id="copmCountry" placeholder="Enter Country" name="comploc" value="<?=$employer['country'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="copmCity">City:</label>
                    <input type="text" id="copmCity" placeholder="Enter City" name="comploccity" value="<?=$employer['city'] ?>" required>
                </div>

                <!-- Social Media -->
                <div class="form-group">
                    <label for="SocialMediafb">Facebook Profile:</label>
                    <input type="text" id="SocialMediafb" placeholder="Enter Facebook Profile" name="Socialfb" value="<?=$employer['facebook_link'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="SocialMedialinkedin">LinkedIn Profile:</label>
                    <input type="text" id="SocialMedialinkedin" placeholder="Enter LinkedIn Profile" name="Sociallinkedin" value="<?=$employer['linkedin_link'] ?>">
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label><br>
                    <label><input type="radio" name="gender" value="Male" <?php echo ($employer['gender'] === 'Male') ? 'checked' : ''; ?>> Male</label>
                    <label><input type="radio" name="gender" value="Female" <?php echo ($employer['gender'] === 'Female') ? 'checked' : ''; ?>> Female</label>
                </div>

                <!-- Company Details -->
                <div class="form-group">
                    <label for="companyDetails">Company Details:</label>
                    <textarea id="companyDetails" placeholder="Briefly describe your company" name="Details"><?=$employer['company_details'] ?></textarea>
                </div>

                <div class="form-group">
                    <!-- Submit Button -->
                    <input type="submit" id="submitUpdate" name="employer_profile_update" value="Update">

                    <!-- Cancel Button -->
                    <button type="button" id="Cancel" onclick="window.location.href='company_profiles.php'">Back</button>
                </div>
            </form>
    <?php
        } else {
            echo "<h4>No Such Id Found</h4>";
        }
    }
    ?>
    
</div>

</body>
</html>

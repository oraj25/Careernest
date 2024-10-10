<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile Form</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/Company_profile_form.css">
   
    <link rel="stylesheet" href="CSS/alert.css">
</head>
<body>
    <div class="form-container">
        <?php include('alert.php'); ?>
        <h1>Company Profile Form</h1>

        <form class="employer-form" action="emplyer_create_profile.php" method="post">

        <input type="hidden" name="employer_id" value = "<?=$employer_id ?>">

        <!-- Company Name -->
        <div class="form-group">
            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" placeholder="Enter Company Name" name="companyName" required>
        </div>

        <!-- Employer Name -->
        <div class="form-group">
            <label for="EmployerFName">Employer First Name:</label>
            <input type="text" id="EmployerFName" placeholder="Enter Employer First Name" name="Empfname" required>
        </div>

        <div class="form-group">
            <label for="EmployerLName">Employer Last Name:</label>
            <input type="text" id="EmployerLName" placeholder="Enter Employer Last Name" name="Emplname"  required>
        </div>

        <!-- Contact Emails -->
        <div class="form-group">
            <label for="EmpcopcontactEmail">Company Email:</label>
            <input type="email" id="EmpcopcontactEmail" placeholder="Enter Company Email" name="Empcoemail"  required>
        </div>

        <div class="form-group">
            <label for="EmpcontactEmail">Personal Email:</label>
            <input type="email" id="EmpcontactEmail" placeholder="Enter Personal Email" name="Empperemail" >
        </div>

        <!-- Contact Numbers -->
        <div class="form-group">
            <label for="CompanycontactNo">Company Contact Number:</label>
            <input type="text" id="CompanycontactNo" placeholder="Enter Company Contact Number" name="EmpCno" required>
        </div>

        <div class="form-group">
            <label for="PersonalcontactNo">Personal Contact Number:</label>
            <input type="text" id="PersonalcontactNo" placeholder="Enter Personal Contact Number" name="EmpPno" >
        </div>

        <label for="jobCategories">Industry</label>
        <div id="jobCategories">
        <label for="tech">Technology</label>
                <input type="radio" id="tech" name="industry" value="tech" required>
                <label for="finance">Finance</label>
                <input type="radio" id="finance" name="industry" value="finance" required>
                <label for="healthcare">Healthcare</label>
                <input type="radio" id="healthcare" name="industry" value="healthcare" required>
                <label for="education">Education</label>
                <input type="radio" id="education" name="industry" value="education" required>
                <label for="construction">Construction</label>
                <input type="radio" id="construction" name="industry" value="construction" required>
                <label for="retail">Retail</label>
                <input type="radio" id="retail" name="industry" value="retail" required>
                <label for="marketing">Marketing & Advertising</label>
                <input type="radio" id="marketing" name="industry" value="marketing" required>
                <label for="manufacturing">Manufacturing</label>
                <input type="radio" id="manufacturing" name="industry" value="manufacturing" required>
                <label for="logistics">Logistics</label>
                <input type="radio" id="logistics" name="industry" value="logistics" required>
                <label for="hospitality">Hospitality</label>
                <input type="radio" id="hospitality" name="industry" value="hospitality" required>
                <label for="realestate">Real Estate</label>
                <input type="radio" id="realestate" name="industry" value="realestate" required>
                <label for="entertainment">Entertainment</label>
                <input type="radio" id="entertainment" name="industry" value="entertainment" required>
                <label for="legal">Legal</label>
                <input type="radio" id="legal" name="industry" value="legal" required>
                <label for="government">Government</label>
                <input type="radio" id="government" name="industry" value="government" required>
        </div>


        <!-- Location -->
        <div class="form-group">
            <label for="copmCountry">Country:</label>
            <input type="text" id="copmCountry" placeholder="Enter Country" name="comploc" required>
        </div>

        <div class="form-group">
            <label for="copmCity">City:</label>
            <input type="text" id="copmCity" placeholder="Enter City" name="comploccity" required>
        </div>

        <!-- Social Media -->
        <div class="form-group">
            <label for="SocialMediafb">Facebook Profile:</label>
            <input type="text" id="SocialMediafb" placeholder="Enter Facebook Profile" name="Socialfb"  required>
        </div>

        <div class="form-group">
            <label for="SocialMedialinkedin">LinkedIn Profile:</label>
            <input type="text" id="SocialMedialinkedin" placeholder="Enter LinkedIn Profile" name="Sociallinkedin">
        </div>

        <div class="form-group">
        <label for="gender">Gender:</label><br>
        <label><input type="radio" name="gender" value="Male" checked> Male</label>
        <label><input type="radio" name="gender" value="Female"> Female</label>
        </div>


        <!-- Company Details -->
        <div class="form-group">
            <label for="companyDetails">Company Details:</label>
            <textarea id="companyDetails" placeholder="Briefly describe your company" name="Details"></textarea>
        </div>

        <div class="form-group">
        <!-- Submit Button -->
        <input type="submit" id="submitUpdate" name="employer_profile_Create" value="Update">

        <!-- Cancel Button -->
        <button type="button" id="Cancel"  onclick="window.location.href='company_profiles.php'">back</button>
        </div>
        </form>
    </div>
</body>
</html>

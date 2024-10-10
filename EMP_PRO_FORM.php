<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile Form</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/EMP_PRO_FORM.css"> <!-- Link to your CSS file -->
    
</head>
<body>

    <div class="Employer-popup" id="EmployerPOPUP">
        <h2>Profile Form (Employer)</h2>
        <hr>

        <form class="job-posting-form" action="employer_create_profile_ft.php" method="post">
            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" placeholder="Company Name" name="companyName" required>

            <label for="EmployerFName">Employer First Name:</label>
            <input type="text" id="EmployerFName" placeholder="Employer First Name" name="Empfname" required>

            <label for="EmployerLName">Employer Last Name:</label>
            <input type="text" id="EmployerLName" placeholder="Employer Last Name" name="Emplname" required>

            <label for="EmpcopcontactEmail">Contact Email:</label>
            <input type="email" id="EmpcopcontactEmail" placeholder="Companymail@example.com" name="Empcoemail"  required>
            <input type="email" id="EmpcontactEmail" placeholder="PLEACE ENTER THE SAME EMAIL YOU USE FOR LOG IN" name="Empperemail" required>

            <label for="CompanycontactNo">Company Contact Number:</label>
            <input type="text" id="CompanycontactNo" placeholder="Company Contact Number" name="EmpCno" required>

            <label for="PersonalcontactNo">Personal Contact Number:</label>
            <input type="text" id="PersonalcontactNo" placeholder="Personal Contact Number" name="EmpPno">

            <label for="jobCategories">Industry:</label>
            <div id="jobCategories" class="industry-options">

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

            <label for="copmCountry">Country:</label>
            <input type="text" id="copmCountry" placeholder="The Country Company Located in" name="comploc" required>

            <label for="copmCity">City:</label>
            <input type="text" id="copmCity" placeholder="The City Company Located in" name="comploccity" required>

            <label for="SocialMediafb">Facebook Link:</label>
            <input type="text" id="SocialMediafb" placeholder="facebook@example.com" name="Socialfb" required>

            <label for="SocialMedialinkedin">LinkedIn Link:</label>
            <input type="text" id="SocialMedialinkedin" placeholder="linkedin@example.com" name="Sociallinkedin">

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" checked> Male
            <input type="radio" name="gender" value="Female"> Female

            <label for="companyDetails">Company Details:</label>
            <textarea id="companyDetails" placeholder="Briefly describe your company" name="Details" required></textarea>

            

            <input type="submit" id="submitCreate" name="employer_profile_Create" value="Submit" >
            <button type="button" id="Cancel" ><a href = "USER_HOME.PHP">Cancel</a></button>
        </form>
    </div>

    
</body>
</html>

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
    <title>Job Submission Form</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS\Local_Form.css">
    <link rel="stylesheet" href="CSS\alert.css">

</head>
<body>
    <div class="form-container">

    <?php 
			include ('alert.php');
		?>

        <h1>LOCAL JOB SUBMISSION FORM</h1>
        <form action="Job_post_ft.php" method="post">
            <div class="radio-group">
                <input type="radio" id="Local" name="Template" value="Local" checked>
                <label for="Local">Local</label>
            </div>
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text"  name="company_name" placeholder="Enter company name" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text"  name="location" placeholder="Enter location" required>
            </div>
            <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text"  name="job_title" placeholder="Enter job title" required>
            </div>
            <div class="form-group">
                <label for="job-type">Job Type</label>
                <select name="job_type">
                    <option>Select job type</option>
                    <option>Full-Time</option>
                    <option>Part-Time</option>
                    <option>Internship</option>
                </select>
            </div>
            <div class="form-group">
                <label for="requirements">Requirements</label>
                <select  name="requirements">
                    <option>Select requirements</option>
                    <option>Bachelor Degree</option>
                    <option>Master Degree</option>
                    <option>PhD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text"  name="salary" placeholder="Enter salary" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  name="description" rows="4" placeholder="Enter job description"required></textarea>
            </div>
            <div class="form-group">
                <label for="contact-no">Contact No</label>
                <input type="text" name="contact_no" placeholder="Enter contact number" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date"  name="deadline" required>
            </div>
            <div class="form-buttons">
                <button type="Submit" name="add" class="submit-btn">Submit</button>
                <button type="Submit" name="cancel" class="cancel-btn" onclick="window.location.href='jobpost.php'">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>

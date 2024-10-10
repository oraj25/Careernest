<?php
session_start();
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Submission Form</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/admin_Form.css">
    <link rel="stylesheet" href="CSS/alert.css">
</head>
<body>
    <div class="form-container">
        <?php include('alert.php'); ?>
        <h1>Job Submission Form</h1>

        <form action="Job_post.php" method="post">
            <div class="radio-group">
                <input type="radio" id="local" name="Template" value="Local" checked> 
                <label for="local">Local</label>

                <input type="radio" id="foreign" name="Template" value="Foreign" checked>
                <label for="foreign">Foreign</label>

                <input type="radio" id="online" name="Template" value="Online" checked>
                <label for="online">Online</label>
            </div>

            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" name="company_name" placeholder="Enter company name" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" placeholder="Enter location">
            </div>
            <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" name="job_title" placeholder="Enter job title">
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
                <select name="requirements">
                    <option>Select requirements</option>
                    <option>Bachelor Degree</option>
                    <option>Master Degree</option>
                    <option>PhD</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" name="salary" placeholder="Enter salary">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="4" placeholder="Enter job description"></textarea>
            </div>
            <div class="form-group">
                <label for="contact-no">Contact No</label>
                <input type="text" name="contact_no" placeholder="Enter contact number">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline">
            </div>
            <div class="form-buttons">
                <button type="submit" name="add" class="submit-btn" onclick="window.location.href='manage_job_posts.php';">Submit</button>
                <button type="button" name="cancel" class="cancel-btn" onclick="window.location.href='manage_job_posts.php';">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>

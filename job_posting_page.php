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
    <title>CareerNest</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="css\job_posting_page.css">
    <link rel="stylesheet" href="css\H_F.css">
    <link rel="stylesheet" href="CSS\alert.css">
</head>
<body>
     <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="images\logo(8).png" alt="CareerNest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="USER_HOME.PHP">HOME</a></li>
                <li><a href="#About_Us.php">ABOUT</a></li>
                <li><a href="News_feed.php">NEWS</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">JOBS</a>
					<div class="dropdown-content">
						<a href="job pages.php">Find Jobs</a>
						<a href="#">Post a Job</a>
					</div>	
                </li>
            </ul>
        </nav>
        <div class="profile">
            <img src="images\profile.png" alt="User Profile">
        </div>
    </header>

        <!-- Main Section -->
    <main>
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Let's Post Your Job !</h1>
                    <p>First step towards finding the perfect candidate who can bring valuable skills, experience, and fresh perspectives to your team.</p>
                </div>
                <div class="right-content">
                    <img src="images\vacancy.jpg" alt="Main logo">
                </div>
            </div>
        </section>

        <?php 
			include ('alert.php'); 
		?>

        <section class="job-templates">
            <div class="template">
                <div class="template-left">
                    <h2><a href="Local_Form.php">Local Job Vacancy</a></h2>
                    <p>This template is specifically crafted for businesses seeking to hire talent within their immediate geographical area.Ideal for companies in industries like retail, hospitality, and local services, where understanding the community is crucial for success.</p>
                </div>
                <div class="template-right">
                    <img src="images\local Template.jpg" alt="Template 1">
                </div>
            </div>

            <div class="template">
                <div class="template-middleleft">
                    <img src="images\local.jpg" alt="Template 1">
                </div>
                <div class="template-middleright">
                    <h2><a href="foreign_Form.php">Foreign Job Vacancy</a></h2>
                    <p>This template caters to organizations that are expanding their reach beyond national borders. It targets candidates willing to relocate or work remotely from different countries, emphasizing international opportunities and diverse workplace cultures. Perfect for companies aiming to attract global talent.</p>
                </div>
            </div>

            <div class="template">
                <div class="template-left">
                    <h2><a href="online_Form.php">Online Job Vacancy</a></h2>
                    <p>This template is tailored for positions that offer complete flexibility in terms of work location, allowing candidates to work remotely from anywhere in the world.Perfect for companies in the tech sector, startups, and organizations embracing the future of work, where the emphasis is on results rather than physical presence.</p>
                </div>
                <div class="template-right">
                    <img src="images\local.jpg" alt="Template 1">
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <div class="footer-content">
            <p>CareerNest</p>
            <a href="#">Terms & Conditions</a> |
            <a>© 2024 CareerNest. All rights reserved.</a> |
            <a href="privacy&policy.php">Privacy & Policy</a>
            <a href="q&a.php">Q & A</a> |
            <a href="contact.php">Contact Us</a>
        </div>
    </footer>
    
    <script src="JS\H_F_js.js"></script>
    
</body>
</html>

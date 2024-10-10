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
    <link rel="stylesheet" href="css/postjoppage.css">
    <link rel="stylesheet" href="CSS/alert.css">
    <link rel="stylesheet" href="footer and header\CSS\H_F.css">
    <link rel="stylesheet" href="CSS\profile_drop_down.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="footer and header\images\logo(8).png" alt="CareerNest Logo">
        </div>
        <nav>
        <ul>
                <li><a href="USER_HOME.PHP">HOME</a></li>
                <li><a href="User_About_Us.php">ABOUT</a></li>
                <li><a href="User_News_feed.php">NEWS</a></li>
                <li class="dropdown">
                    <a href="#">PROFILE</a>
                    <div class="dropdown-content">
                        <a href="Company profile .php">Company Profile</a>
                        <a href="Profile_page.php">Job Seeker Profile</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">JOBS</a>
                    <div class="dropdown-content">
                        <a href="Job pages.php">Find a Job</a>
                        <a href="talentpool.php">Talent Pool</a>
                    </div>  
                </li>
            </ul>
        </nav>
        <div class="profile">
            <ul>
                <li class="dropdown-profile">
                    <a href="#" class="dropbtnprofile"><img src="footer and header/images/profile.png" alt="User Profile"></a>
                    <div class="dropdown-content-profile">
                        <a href="Company profile .php">Company Profile</a>
                        <a href="Profile_page.php">Job Seeker Profile</a>
                        <a href="sign_out.php">Sign Out</a>
                    </div>  
                </li>
            </ul>
        </div>
    </header>

    <!-- Main Section -->
    <main>
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Let's Post Your Job!</h1>
                    <p>First step towards finding the perfect candidate who can bring valuable skills, experience, and fresh perspectives to your team.</p>
                </div>
                <div class="right-content">
                    <img src="images/briefcase.png" alt="Main logo">
                </div>
            </div>
        </section>

        <?php 
        include ('alert.php'); 
        ?>

        <!--Start editing-->
        <section class="job-templates">
            <div class="template">
                <div class="template-content">
					<h1>Local Job Vacancy</h1>
                    <p>This template is specifically crafted for businesses seeking to hire talent within their immediate geographical area. Ideal for companies in industries like retail, hospitality, and local services, where understanding the community is crucial for success.</p>
                </div>
                <h2><a href="Local_Form.php">Go Now</a></h2>
            </div>

            <div class="template">
                <div class="template-content">
					<h1>Foreign Job Vacancy</h1>
                    <p>This template caters to organizations that are expanding their reach beyond national borders. It targets candidates willing to relocate or work remotely from different countries, emphasizing international opportunities and diverse workplace cultures. Perfect for companies aiming to attract global talent.</p>
                </div>
                <h2><a href="foreign_Form.php">Go Now</a></h2>
            </div>

            <div class="template">
                <div class="template-content">
					<h1>Online Job Vacancy</h1>
                    <p>This template is tailored for positions that offer complete flexibility in terms of work location, allowing candidates to work remotely from anywhere in the world. Perfect for companies in the tech sector, startups, and organizations embracing the future of work, where the emphasis is on results rather than physical presence.</p>
                </div>
                <h2><a href="online_Form.php">Go Now</a></h2>
            </div>
        </section>
        <!--STOP editing-->
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

    <script src="JS/H_F_js.js"></script>
</body>
</html>

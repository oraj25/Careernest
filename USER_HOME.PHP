<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php"); // Redirect to the login page
    exit; // Stop further execution
}

// Linking the configuration 
require 'DBconnection.php';
require 'config.php';

// Fetch jobs from the database
$jobs_query = "SELECT * FROM jobs LIMIT 5"; // Fetch top 5 jobs
$jobs_result = $con->query($jobs_query);

// Fetch job seekers from the database
$seekers_query = "SELECT * FROM job_seeker_profile LIMIT 5"; // Fetch top 5 job seekers
$seekers_result = $con->query($seekers_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/Home_page.css">
    <link rel="stylesheet" href="CSS/User_home.css">
    <link rel="stylesheet" href="CSS/popup.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/alert.css">
    <link rel="stylesheet" href="CSS/profile_drop_down.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="footer and header/images/logo(8).png" alt="CareerNest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
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

    <main>
        <!-- Main intro to page -->
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Home</h1>
                    <p>Welcome to CareerNest! Start your career journey with us by exploring various job opportunities.</p>
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <div class="right-content">
                    <img src="footer and header/images/logo(7).png" alt="Main logo">
                </div>
            </div>
        </section>

        <?php 
            include ('alert.php'); 
        ?>

        <!-- Feature cards -->
        <section class="features">
            <div class="feature-card-wrapper">
                <a href="Job pages.php" class="feature-card">
                    <img class="Cbackground-image" src="images/5.png" alt="Background Image">
                    <div class="feature-card-content">Find A Job</div>
                </a>
            </div>
            <!-- Feature card profile button -->
            <div class="feature-card-wrapper">
                <button type="submit" class="feature-card" onclick="openpopup()">
                    <img class="Cbackground-image" src="images/7.png" alt="Background Image">
                    <div class="feature-card-content">Create A Profile</div>
                </button>
            </div>
            <div class="feature-card-wrapper">
                <a href="jobpost.php" class="feature-card">
                    <img class="Cbackground-image" src="images/6.png" alt="Background Image">
                    <div class="feature-card-content">Post A Job</div>
                </a>
            </div>
        </section>

        <!-- Trending jobs, Job Seekers, Categories, Advertisers -->
        <section class="trending-jobs">
            <h2>Trending Jobs</h2>
            <div class="jobs">
                <?php while ($job = $jobs_result->fetch_assoc()): ?>
                    <div class="job">
                        <h3><?php echo htmlspecialchars($job['job_title']); ?></h3>
                        <p><?php echo htmlspecialchars($job['company_name']); ?></p>
                        <p><?php echo htmlspecialchars($job['location']); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>		
        </section>

        <section class="J-seekers">
            <h2>Job Seekers</h2>
            <div class="job-seekers">
                <?php while ($seeker = $seekers_result->fetch_assoc()): ?>
                    <div class="seeker">
                        <h3><?php echo htmlspecialchars($seeker['First_Name'] . ' ' . $seeker['Last_Name']); ?></h3>
                        <p><?php echo htmlspecialchars($seeker['Email']); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>		
        </section>

        <section class="top-categories">
            <h2>Top Categories</h2>
            <div class="categories">
                <div class="category">Marketing</div>
                <div class="category">Information Technology</div>
                <div class="category">Healthcare</div>
                <div class="category">Engineering</div>
                <div class="category">Biotechnology</div>
                <div class="category">Automobile</div>
                <div class="category">Design</div>
                <div class="category">Education</div>
            </div>
        </section>

        <section class="top-advertisers">
            <h2>Top Advertisers</h2>
            <div class="advertisers">
                <div class="advertiser">Alexander Davis</div>
                <div class="advertiser">Samuel Martinez</div>
                <div class="advertiser">Olivia Smith</div>
                <div class="advertiser">Sophia Rodriguez</div>
                <div class="advertiser">Ethan Wilson</div>
                <div class="advertiser">Isabella Lopez</div>
                <div class="advertiser">Aloka</div>
                <div class="advertiser">Noah Johnson</div>
            </div>
        </section>

        <!-- Sitemap and question sections -->
        <section class="Q-M">
            <div class="QM-wrapper">
                <div class="questions">
                    <h3>Questions?</h3>
                    <div class="contact"><a href="contact.php">Contact Us</a></div>
                    <div class="qa"><a href="q&a.php">Q & A</a></div>
                </div>
            </div>

            <div class="QM-wrapper">
                <div class="sitemap">
                    <h3>Site Map</h3>
                    <ul>
                        <li><a href="talentpool.php">TALENTPOOL</a></li>
                        <li><a href="Job pages.php">FIND YOUR JOB</a></li>
                        <li><a href="Company profile .php">COMPANY PROFILE</a></li>
                        <li><a href="Profile_page.php">JOB SEEKER PROFILE</a></li>
                        <li><a href="User_News_feed.php">NEWS</a></li>
                    </ul>
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

    <div class="p-popup" id="ProfilePOPUP">
        <h2>Creating a Profile</h2>
        <button type="submit" class="popup-btn"><a href="Employee.php">Find a Job</a></button>
        <button type="submit" class="popup-btn"><a href="EMP_PRO_FORM.php">Post a Job</a></button>
        <button type="submit" class="popup-btn" onclick="closepopup()">Close</button>
    </div>

    <!-- JS links -->
    <!--<script src="footer and header/JS/H_F_js.js"></script>-->
    <script src="JS/popups.js"></script>
    
</body>
</html>

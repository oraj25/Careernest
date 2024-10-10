<?php
// Start session and include database connection
session_start();
require 'DBconnection.php'; // Assuming this file contains the DB connection logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/Home_page.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/alert.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="footer and header/images/logo(8).png" alt="CareerNest Logo">
        </div>
        <nav>
            <ul>
                <li><a href="About_Us.php">ABOUT</a></li>
                <li><a href="signin.php">SIGN IN</a></li>
                <li><a href="News_feed.php">NEWS</a></li>
            </ul>
        </nav>
        <div class="profile">
            <a href="signin.php"><img src="footer and header/images/profile.png" alt="User Profile"></a>
        </div>
    </header>

    <main>
        <!-- Main intro section -->
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Welcome to CareerNest!</h1>
                    <p> Start your career journey with us by exploring various job opportunities.</p>
                </div>
                <div class="right-content">
                    <img src="footer and header/images/logo(7).png" alt="Main logo">
                </div>
            </div>
        </section>

        <!-- Alert section -->
        <?php include('alert.php'); ?>

        <!-- Trending Jobs Section -->
        <section class="trending-jobs">
            <h2>Trending Jobs</h2>
            <div class="jobs">
                <?php
                // Query to fetch jobs from the database
                $query = "SELECT job_title, company_name, location FROM jobs LIMIT 5";
                $result = mysqli_query($con, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="job">
                            <i class="icon fas fa-briefcase"></i>
                            <div class="job-details">
                                <h3>' . htmlspecialchars($row['job_title']) . '</h3>
                                <p>' . htmlspecialchars($row['company_name']) . ' - ' . htmlspecialchars($row['location']) . '</p>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p>No jobs found at the moment.</p>';
                }
                ?>
            </div>
        </section>

        <!-- Job Seekers Section -->
        <section class="J-seekers">
            <h2>Job Seekers</h2>
            <div class="job-seekers">
                <?php
                // Query to fetch job seekers from the database
                $seeker_query = "SELECT First_Name, Last_Name, Job_Category FROM job_seeker_profile LIMIT 5";
                $seeker_result = mysqli_query($con, $seeker_query);

                if ($seeker_result && mysqli_num_rows($seeker_result) > 0) {
                    while ($seeker = mysqli_fetch_assoc($seeker_result)) {
                        echo '
                        <div class="seeker">
                            <i class="icon fas fa-user-tie"></i>
                            <div class="seeker-details">
                                <h3>' . htmlspecialchars($seeker['First_Name'] . ' ' . $seeker['Last_Name']) . '</h3>
                                <p>' . htmlspecialchars($seeker['Job_Category']) . '</p>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p>No job seekers found at the moment.</p>';
                }
                ?>
            </div>
        </section>

        <!-- Additional sections like Top Categories and Advertisers -->
        <section class="top-categories">
            <h2>Top Categories</h2>
            <div class="categories">
                <div class="category">
                    <i class="icon fas fa-laptop-code"></i> Technology
                </div>
                <div class="category">
                    <i class="icon fas fa-chart-line"></i> Finance
                </div>
                <div class="category">
                    <i class="icon fas fa-heartbeat"></i> Healthcare
                </div>
                <div class="category">
                    <i class="icon fas fa-chalkboard-teacher"></i> Education
                </div>
            </div>
        </section>

        <section class="top-advertisers">
            <h2>Top Advertisers</h2>
            <div class="advertisers">
                <div class="advertiser">
                    <i class="icon fas fa-bullhorn"></i> EverGreen
                </div>
                <div class="advertiser">
                    <i class="icon fas fa-bullhorn"></i> CocaCola
                </div>
                <div class="advertiser">
                    <i class="icon fas fa-bullhorn"></i> Aloka Enterprise
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
    
</body>
</html>

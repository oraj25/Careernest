<?php
session_start();

// Create connection
$con = mysqli_connect('localhost', 'root', '', 'careernest');

// Check connection
if (!$con) {
    die('Connection Failed: ' . mysqli_connect_error());
}

// Query to count total users
$userCountQuery = "SELECT COUNT(*) AS total_users FROM user";
$resultUserCount = mysqli_query($con, $userCountQuery);
$userCount = mysqli_fetch_assoc($resultUserCount)['total_users'];

// Query to count total jobs
$jobCountQuery = "SELECT COUNT(*) AS total_jobs FROM jobs";
$resultJobCount = mysqli_query($con, $jobCountQuery);
$jobCount = mysqli_fetch_assoc($resultJobCount)['total_jobs'];

// Close connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>CareerNest</h2>
        <ul>
            <li><a href="adminpage.php">Overview</a></li>
            <li><a href="admin_logins.php">Admin Logins</a></li>
            <li><a href="userSignInDashbord.php">User Log In</a></li>
            <li><a href="display.php">Job Seeker Profiles</a></li>
            <li><a href="company_profiles.php">Company Profiles</a></li>
            <li><a href="manage_job_posts.php">Manage Job Posts</a></li>
            <li><a href="admin_report.php">Reports</a></li>
            <li><a href="inquiry.php">Messages</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Admin Dashboard</h1>
            <button id="logoutBtn">Logout</button>
        </header>

        <section id="overview" class="section">
            <h2>Overview</h2>
            <div class="cards">
                <div class="card">
                    <h3>Total Users</h3>
                    <p><?php echo $userCount; ?></p>
                </div>
                <div class="card">
                    <h3>Total Job Posts</h3>
                    <p><?php echo $jobCount; ?></p>
                </div>
            </div>
        </section>

        <footer>
            <p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy Policy</a></p>
        </footer>
    </div>

    <script src="JS/admin.js"></script>

</body>
</html>
<?php

require 'DBconnection.php';

// Start session
session_start();
// Ensure the user is logged in and user_email is set
if (!isset($_SESSION['user_email'])) {
    die("User not logged in.");

}
$user_email = $_SESSION['user_email'];

// Fetch user profile
$sql = "SELECT e.id, e.name, e.email, e.job, e.skill, e.experiance 
        FROM employee e
        WHERE e.id = ?";
$stmt = $con->prepare($sql);

$stmt->bind_param("s", $user_email); 
$stmt->execute();
$result = $stmt->get_result();

// Check if the query returned any results
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    $row = null; // Set row to null if no results
    echo "No profile found for this email.";
}

// Close connection
$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/Profile page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/profile_drop_down.css">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="footer and header/images/logo(8).png" alt="CareerNest Logo">
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
                    <a href="#">Job Seeker Profile</a>
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
        <section class="Hero_area">
            <div>
                <img src="images/Profile page.jpg" alt="User image">
            </div>
            <div class="H_details">
                <h2><?php echo htmlspecialchars($row['name']); ?></h2> <!-- Display user's name -->
            </div>
        </section>

        <!-- Company Profile Section -->
        <section class="company-profile-container">
            <div class="left-side">
                <div class="card">
                    <h1>User Details</h1>
                    <h3>Email address</h3>
                    <p><?php echo htmlspecialchars($row['email']); ?></p>
                    <h3>Job Title</h3>
                    <p><?php echo htmlspecialchars($row['job'] ?: "No job title available."); ?></p>
                    <h3>Skills</h3>
                    <textarea disabled><?php echo htmlspecialchars($row['skill'] ?: "No skills listed."); ?></textarea>
                    <h3>Experience</h3>
                    <textarea disabled><?php echo htmlspecialchars($row['experiance'] ?: "No experience provided."); ?></textarea>
                    <button type="button" id="openModalBtn">Edit Profile Details</button>
                </div>
            </div>

            <div class="right-side">
                <div class="card">
                    <h2>Education</h2>
                    <p>No education details yet.</p>
                </div>

                <div class="card">
                    <h2>Qualifications</h2>
                    <p>No qualifications details yet.</p>
                </div>

                <div class="card">
                    <h2>Saved jobs</h2>
                    <p>No saved jobs yet.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Section -->
    <div id="editProfileModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Edit Profile Details</h1>
            <form action="update_profile.php" method="post"> <!-- Adjust the action as needed -->
                <label>Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

                <label>Email Address</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

                <label>Job Title</label>
                <input type="text" name="job" value="<?php echo htmlspecialchars($row['job'] ?: ''); ?>" required>

                <label>Skills</label>
                <textarea name="skills" required><?php echo htmlspecialchars($row['skill']); ?></textarea>

                <label>Experience</label>
                <textarea name="experience" required><?php echo htmlspecialchars($row['experiance']); ?></textarea>

                <div class="button-group">
                    <input type="submit" value="Save Changes" class="submit-btn">
                    <input type="button" value="Delete Account" class="delete-btn" onclick="deleteAccount()">
                </div>
            </form>
        </div>
    </div>

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

    <script src="footer and header/JS/H_F_js.js"></script>
    <script>
        var modal = document.getElementById("editProfileModal");
        var btn = document.getElementById("openModalBtn");
        var span = document.getElementsByClassName("close")[0];

        // Open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Close the modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Function to delete account (add your logic here)
        function deleteAccount() {
            // Handle account deletion logic
            alert('Account deletion functionality to be implemented.');
        }
    </script>
</body>
</html>

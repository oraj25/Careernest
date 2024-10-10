<?php
// Database connection parameters
$servername = "localhost"; // Adjust as necessary
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "careernest"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Ensure the user is logged in and user_email is set
if (!isset($_SESSION['user_email'])) {
    die("User not logged in.");
}

// Get the user email from the session
$user_email = $_SESSION['user_email'];

// Prepare SQL statement to fetch employer profile based on user email
$sql = "SELECT 
            u.U_email, 
            ep.id, 
            ep.company_name, 
            ep.company_details,
            ep.company_email,
            ep.personal_email, 
            ep.company_phone, 
            ep.city,
            ep.industry,
            ep.facebook_link,
            ep.linkedin_link,
            ep.employer_first_name,
            ep.employer_last_name
        FROM user u
        JOIN employer_profiles ep ON u.U_email = ep.personal_email
        WHERE ep.personal_email = ?";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . htmlspecialchars($conn->error));
}

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

// Handle profile deletion
if (isset($_POST['delete_profile'])) {
    $employer_id = $_POST['employer_id'];
    
    // Prepare SQL statement to delete employer profile
    $delete_sql = "DELETE FROM employer_profiles WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $employer_id);
    if ($delete_stmt->execute()) {
        echo "Profile deleted successfully.";
        // Optionally, redirect or clear session
        header("Location: some_redirect_page.php"); // Redirect to a specific page after deletion
        exit();
    } else {
        echo "Error deleting profile: " . htmlspecialchars($delete_stmt->error);
    }
    
    $delete_stmt->close();
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest - Company Profile</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/Company profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"><!--font from cloudflare.com-->
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
                    <a href="#">Company Profile</a>
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
        <section class="Hero_area">
            <div>
                <img src="images/Company.jpg" alt="User Profile">
            </div>
            <div class="H_details">
                <h2><?php echo isset($row['company_name']) ? htmlspecialchars($row['company_name']) : 'No company name available'; ?></h2>
                <hr>
                <h2><?php echo isset($row['company_email']) ? htmlspecialchars($row['company_email']) : 'No email available'; ?></h2>
            </div>
        </section>

        <!-- Company Profile Section -->
        <section class="company-profile-container">
            <div class="left-side">
                <div class="card">
                    <h1>Company Details</h1>
                    <div class="accordion">
                        <!-- Email Address Section -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingEmail">
                                <h3>Email Address</h3>
                            </div>
                            <div id="collapseEmail" class="collapse show" aria-labelledby="headingEmail">
                                <div class="accordion-body">
                                    <p><?php echo isset($row['company_email']) ? htmlspecialchars($row['company_email']) : 'No email available'; ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Bio / Description Section -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingBio">
                                <h3>Bio / Description</h3>
                            </div>
                            <div id="collapseBio" class="collapse" aria-labelledby="headingBio">
                                <div class="accordion-body">
                                    <textarea disabled><?php echo isset($row['company_details']) ? htmlspecialchars($row['company_details']) : 'No description available'; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Location Section -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingLocation">
                                <h3>Location</h3>
                            </div>
                            <div id="collapseLocation" class="collapse" aria-labelledby="headingLocation">
                                <div class="accordion-body">
                                    <textarea disabled><?php echo isset($row['city']) ? htmlspecialchars($row['city']) : 'No location available'; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Details Section -->
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingContact">
                                <h3>Contact Details</h3>
                            </div>
                            <div id="collapseContact" class="collapse" aria-labelledby="headingContact">
                                <div class="accordion-body">
                                    <p><i class="fas fa-phone"></i> <?php echo isset($row['company_phone']) ? htmlspecialchars($row['company_phone']) : 'No phone available'; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="openModalBtn" class="submit-btn">Edit Company Profile Details</button>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="employer_id" value="<?php echo isset($row['id']) ? htmlspecialchars($row['id']) : ''; ?>">
                        <button type="submit" name="delete_profile" class="delete-btn" onclick="return confirm('Are you sure you want to delete your profile? This action cannot be undone.');">Delete Profile</button>
                    </form>
                </div>
            </div>

            <!-- Right side can be filled with additional information -->
            <div class="right-side">
                <div class="card">
                    <h2>Saved Candidates</h2>
                    <p>No saved candidates yet. Start browsing to save profiles.</p>
                </div>

                <div class="card">
                    <h2>Notifications</h2>
                    <p>No notifications at the moment. Check back later!</p>
                </div>

                <div class="card">
                    <h2>Privacy and Policy</h2>
                    <textarea disabled>Your privacy is important to us. Please review our policies.</textarea>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal Section -->
    <div id="editProfileModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Edit Company Profile Details</h1>
            <?php
            // Check if the employer profile is set
            if ($row) {
                $employer_id = $row['id']; // Get employer ID
            ?>
                <form class="employer-form" action="employer_update_profile_FT.php" method="post">
                    <input type="hidden" name="employer_id" value="<?php echo $employer_id; ?>">

                    <!-- Company Name -->
                    <div class="form-group">
                        <label for="companyName">Company Name:</label>
                        <input type="text" id="companyName" placeholder="Enter Company Name" name="companyName" value="<?php echo isset($row['company_name']) ? htmlspecialchars($row['company_name']) : ''; ?>" required>
                    </div>

                    <!-- Employer Name -->
                    <div class="form-group">
                        <label for="EmployerFName">Employer First Name:</label>
                        <input type="text" id="EmployerFName" placeholder="Enter Employer First Name" name="EmployerFName" value="<?php echo isset($row['employer_first_name']) ? htmlspecialchars($row['employer_first_name']) : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="EmployerLName">Employer Last Name:</label>
                        <input type="text" id="EmployerLName" placeholder="Enter Employer Last Name" name="EmployerLName" value="<?php echo isset($row['employer_last_name']) ? htmlspecialchars($row['employer_last_name']) : ''; ?>" required>
                    </div>

                    <!-- Personal Email -->
                    <div class="form-group">
                        <label for="personalEmail">Personal Email:</label>
                        <input type="email" id="personalEmail" placeholder="Enter Your Email" name="personalEmail" value="<?php echo isset($row['personal_email']) ? htmlspecialchars($row['personal_email']) : ''; ?>" required>
                    </div>

                    <!-- Company Email -->
                    <div class="form-group">
                        <label for="companyEmail">Company Email:</label>
                        <input type="email" id="companyEmail" placeholder="Enter Company Email" name="companyEmail" value="<?php echo isset($row['company_email']) ? htmlspecialchars($row['company_email']) : ''; ?>" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="companyPhone">Phone Number:</label>
                        <input type="tel" id="companyPhone" placeholder="Enter Phone Number" name="companyPhone" value="<?php echo isset($row['company_phone']) ? htmlspecialchars($row['company_phone']) : ''; ?>" required>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" id="city" placeholder="Enter City" name="city" value="<?php echo isset($row['city']) ? htmlspecialchars($row['city']) : ''; ?>" required>
                    </div>

                    <!-- Industry Selection -->
                    <div class="form-group">
                        <label for="industry">Industry:</label>
                        <select id="industry" name="industry" required>
                            <option value="" disabled>Select Industry</option>
                            <option value="Technology" <?php echo (isset($row['industry']) && $row['industry'] == 'Technology') ? 'selected' : ''; ?>>Technology</option>
                            <option value="Finance" <?php echo (isset($row['industry']) && $row['industry'] == 'Finance') ? 'selected' : ''; ?>>Finance</option>
                            <option value="Healthcare" <?php echo (isset($row['industry']) && $row['industry'] == 'Healthcare') ? 'selected' : ''; ?>>Healthcare</option>
                            <option value="Education" <?php echo (isset($row['industry']) && $row['industry'] == 'Education') ? 'selected' : ''; ?>>Education</option>
                            <option value="Construction" <?php echo (isset($row['industry']) && $row['industry'] == 'Construction') ? 'selected' : ''; ?>>Construction</option>
                            <option value="Retail" <?php echo (isset($row['industry']) && $row['industry'] == 'Retail') ? 'selected' : ''; ?>>Retail</option>
                            <option value="Marketing & Advertising" <?php echo (isset($row['industry']) && $row['industry'] == 'Marketing & Advertising') ? 'selected' : ''; ?>>Marketing & Advertising</option>
                            <option value="Manufacturing" <?php echo (isset($row['industry']) && $row['industry'] == 'Manufacturing') ? 'selected' : ''; ?>>Manufacturing</option>
                            <option value="Logistics" <?php echo (isset($row['industry']) && $row['industry'] == 'Logistics') ? 'selected' : ''; ?>>Logistics</option>
                            <option value="Hospitality" <?php echo (isset($row['industry']) && $row['industry'] == 'Hospitality') ? 'selected' : ''; ?>>Hospitality</option>
                            <option value="Real Estate" <?php echo (isset($row['industry']) && $row['industry'] == 'Real Estate') ? 'selected' : ''; ?>>Real Estate</option>
                            <option value="Entertainment" <?php echo (isset($row['industry']) && $row['industry'] == 'Entertainment') ? 'selected' : ''; ?>>Entertainment</option>
                            <option value="Legal" <?php echo (isset($row['industry']) && $row['industry'] == 'Legal') ? 'selected' : ''; ?>>Legal</option>
                            <option value="Government" <?php echo (isset($row['industry']) && $row['industry'] == 'Government') ? 'selected' : ''; ?>>Government</option>
                        </select>
                    </div>

                    <!-- Facebook Link -->
                    <div class="form-group">
                        <label for="facebookLink">Facebook Link:</label>
                        <input type="url" id="facebookLink" placeholder="Enter Facebook Link" name="facebookLink" value="<?php echo isset($row['facebook_link']) ? htmlspecialchars($row['facebook_link']) : ''; ?>">
                    </div>

                    <!-- LinkedIn Link -->
                    <div class="form-group">
                        <label for="linkedinLink">LinkedIn Link:</label>
                        <input type="url" id="linkedinLink" placeholder="Enter LinkedIn Link" name="linkedinLink" value="<?php echo isset($row['linkedin_link']) ? htmlspecialchars($row['linkedin_link']) : ''; ?>">
                    </div>

                    <button type="submit" class="submit-btn">Update Profile</button>
                </form>
            <?php } else { ?>
                <p>No profile data available to edit.</p>
            <?php } ?>
        </div>
    </div>

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

    <script>
        // Modal functionality
        var modal = document.getElementById("editProfileModal");
        var btn = document.getElementById("openModalBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function () {
            modal.style.display = "block";
        }

        span.onclick = function () {
            modal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>

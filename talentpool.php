<?php
// Include the database connection file
$con = include('DBconnection.php');

// Retrieve the selected filter from the URL (if any)
$selected_job_category = isset($_GET['job']) ? $_GET['job'] : '';
$search_query = isset($_GET['search']) ? $_GET['search'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/home_css.css">
    <link rel="stylesheet" href="CSS/job.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/profile_drop_down.css">
    <script defer src="JS/pagination.js"></script>
</head>
<body>
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
                    <a href="Profile_page.php">Job Seeker Profile</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropbtn">JOBS</a>
                <div class="dropdown-content">
                    <a href="Job pages.php">Find a Job</a>
                    <a href="#">Talent Pool</a>
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
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Talentpool</h1>
                </div>
                <div class="right-content">
                    <img src="footer and header/images/logo(7).png" alt="Main logo">
                </div>
            </div>
        </section>

        <section class="jobs_area">
            <div>
                <form action="talentpool.php" method="GET" class="Search">
                    <!-- Job Category Filter -->
                    <div class="filter_style">
                        <select name="job">
                            <option value="" disabled <?php echo $selected_job_category === '' ? 'selected' : ''; ?>>Job Category</option>
                            <?php
                            // Fetch distinct job categories from the database
                            $query = "SELECT DISTINCT Job_Category FROM job_seeker_profile WHERE Job_Category IS NOT NULL";
                            $result = mysqli_query($con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $selected = ($selected_job_category === $row['Job_Category']) ? 'selected' : '';
                                    echo '<option value="' . $row['Job_Category'] . '" ' . $selected . '>' . $row['Job_Category'] . '</option>';
                                }
                            } else {
                                echo '<option value="">No categories available</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Search Bar -->
                    <div>
                        <input class="Search_bar" type="search" name="search" placeholder="Search by name or description..." value="<?php echo $search_query; ?>">
                        <input class="Search_button" type="submit" value="Submit">
                    </div>
                    
                    <!-- Unfilter Button -->
                    <div>
                        <a href="talentpool.php" class="Search_button" style="text-decoration: none; padding: 10px; background-color: #ccc; border-radius: 5px;">Unfilter</a>
                    </div>
                </form>
            </div>

            <!-- Job listings grid -->
            <section class="All_Jobs">
                <div id="job_grid" class="job_grid">
                    <?php
                    // Base query to fetch job seekers
                    $sql = "SELECT Seeker_ID, First_Name, Last_Name, Job_Category, Experience, Description FROM job_seeker_profile WHERE 1=1";

                    // If a job category filter is selected, add it to the query
                    if ($selected_job_category != '') {
                        $sql .= " AND Job_Category = '" . mysqli_real_escape_string($con, $selected_job_category) . "'";
                    }

                    // If a search query is provided, add it to the query
                    if ($search_query != '') {
                        $sql .= " AND (First_Name LIKE '%" . mysqli_real_escape_string($con, $search_query) . "%' 
                                    OR Last_Name LIKE '%" . mysqli_real_escape_string($con, $search_query) . "%'
                                    OR Description LIKE '%" . mysqli_real_escape_string($con, $search_query) . "%')";
                    }

                    // Order by Seeker_ID in descending order
                    $sql .= " ORDER BY Seeker_ID DESC";

                    // Execute the query
                    $result = mysqli_query($con, $sql);

                    // Check if there are any job seekers to display
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through the results and display each seeker
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="job_decoration">';
                            echo '<p><a href="Seeker_Profile_view.php?seeker_id=' . $row['Seeker_ID'] . '">' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</a></p>';
                            echo '<p>Job Category: ' . $row['Job_Category'] . '</p>';
                            echo '<p>Experience: ' . $row['Experience'] . ' years</p>';
                            echo '<p>' . nl2br($row['Description']) . '</p>'; // Use nl2br for line breaks
                            echo '</div>';
                        }
                    } else {
                        echo '<p>No job seekers found.</p>';
                    }

                    // Close the database connection
                    mysqli_close($con);
                    ?>
                </div>
            </section>

            <div class="pagination">
                <button id="prev-btn" class="pagination-btn">Previous</button>
                <div id="pagination-numbers"></div>
                <button id="next-btn" class="pagination-btn">Next</button>
            </div>

        </section>
    </main>

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

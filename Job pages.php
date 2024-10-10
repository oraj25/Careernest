<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/home_css.css">
    <link rel="stylesheet" href="CSS/jobs.css">
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
                    <a href="#">Find a Job</a>
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
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>Find Your Job</h1>
                </div>
                <div class="right-content">
                    <img src="footer and header/images/logo(7).png" alt="Main logo">
                </div>
            </div>
        </section>

        <section class="jobs_area">
            <div>
                <!-- Filter form -->
                <form action="Job pages.php" method="GET" class="Search">
                    <div class="filter_style">
                        <select name="job">
                            <option value="" disabled selected>Job Category</option>
                            <?php
                            // Connect to database
                            $host = "localhost";
                            $dbname = "careernest";
                            $username = "root";
                            $password = "";

                            $con = mysqli_connect($host, $username, $password, $dbname);
                            if(!$con){
                                die('Connection Failed: ' . mysqli_connect_error());
                            }

                            // Fetch distinct job categories from the database
                            $category_query = "SELECT DISTINCT job_title FROM jobs";
                            $category_result = mysqli_query($con, $category_query);

                            if (mysqli_num_rows($category_result) > 0) {
                                while ($category_row = mysqli_fetch_assoc($category_result)) {
                                    echo '<option value="' . $category_row['job_title'] . '">' . $category_row['job_title'] . '</option>';
                                }
                            }

                            // Close the database connection
                            mysqli_close($con);
                            ?>
                        </select>
                    </div>
                    <div>
                        <input class="Search_bar" type="search" name="search" placeholder="Search...">
                        <input class="Search_button" type="submit" value="Submit">
                        <button type="button" onclick="window.location.href='Job pages.php';" class="Search_button">Unfilter</button>
                    </div>
                </form>
            </div>

            <!-- Job listings grid -->
            <section class="All_Jobs">
                <div id="job_grid" class="job_grid">
                    <?php
                    // Reconnect to the database to fetch jobs
                    $con = mysqli_connect($host, $username, $password, $dbname);
                    if(!$con){
                        die('Connection Failed: ' . mysqli_connect_error());
                    }

                    // Filtering Logic
                    $whereClauses = [];
                    $filters = '';

                    // Job category filter
                    if (isset($_GET['job']) && $_GET['job'] !== '') {
                        $job_category = mysqli_real_escape_string($con, $_GET['job']);
                        $whereClauses[] = "job_title = '$job_category'";
                    }

                    // Search bar filter
                    if (isset($_GET['search']) && $_GET['search'] !== '') {
                        $search_term = mysqli_real_escape_string($con, $_GET['search']);
                        $whereClauses[] = "(job_title LIKE '%$search_term%' OR description LIKE '%$search_term%')";
                    }

                    // Build the SQL query with filters
                    if (count($whereClauses) > 0) {
                        $filters = "WHERE " . implode(" AND ", $whereClauses);
                    }

                    // Fetch the filtered jobs
                    $query = "SELECT * FROM jobs $filters";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Field checks to avoid undefined index warnings
                            $posted_date = isset($row['posted_date']) ? $row['posted_date'] : 'Unknown';
                            $description = isset($row['description']) ? $row['description'] : 'No description available';
                            $location = isset($row['location']) ? $row['location'] : 'Location not specified';
                            $salary = isset($row['salary']) ? $row['salary'] : 'Salary not specified';
                            $deadline = isset($row['deadline']) ? $row['deadline'] : 'Deadline not specified';
                            $company_name = isset($row['company_name']) ? $row['company_name'] : 'Company not specified';

                            echo '<div class="job_decoration" onclick="openPopup(\'' . $row['job_title'] . '\', \'' . $description . '\', \'images/job_image.jpg\', \'' . $location . '\', \'' . $salary . '\', \'' . $posted_date . '\', \'' . $deadline . '\', \'' . $company_name . '\')">' . $row['job_title'] . '</div>';
                        }
                    } else {
                        echo '<p>No jobs found based on your filters.</p>';
                    }

                    // Close the database connection
                    mysqli_close($con);
                    ?>
                </div>
            </section>

            <!-- Pagination -->
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

    <!-- Job Popup Modal -->
    <div class="popup-overlay" id="jobPopup">
        <div class="popup-content">
            <span class="close-popup" onclick="closePopup()">&#10005;</span>
            <img id="popup-image" src="" alt="Job Image" />
            <h1 id="popup-title"></h1>
            <div class="LO_SA">
                <p id="popup-location"></p>
                <p id="popup-salary"></p>
                <p id="popup-posted"></p>
                <p id="popup-deadline"></p>
            </div>
            <p id="popup-description"></p>
            <div class="buttonArea">
                <input type="button" value="Apply Now" class="B1">
                <input type="button" value="Save" class="B2">
            </div>
        </div>
    </div>

    <script>
        function openPopup(title, description, image, location, salary, posted, deadline, posterName) {
            document.getElementById('popup-title').innerText = title;
            document.getElementById('popup-description').innerText = description;
            document.getElementById('popup-image').src = image;
            document.getElementById('popup-location').innerText = 'Location: ' + location;
            document.getElementById('popup-salary').innerText = 'Salary: ' + salary;
            document.getElementById('popup-posted').innerText = 'Posted: ' + posted;
            document.getElementById('popup-deadline').innerText = 'Deadline: ' + deadline;
            document.getElementById('jobPopup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('jobPopup').style.display = 'none';
        }
    </script>
</body>
</html>
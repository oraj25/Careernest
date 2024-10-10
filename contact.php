<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/profile_drop_down.css">
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
    <!-- Main heading section -->
    <section class="contact-header">
        <div class="container">
            <h1>CONTACT US</h1>
        </div>
    </section>

    <!-- Form and Image Boxed Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-image-wrapper">
                <div class="form-container">
                    <form action="inquiry_create.php" method="POST">
                        <label for="firstName">User Name</label>
                        <input type="text" id="firstName" placeholder="Enter Your Name" name="firstName" required>

                        <label for="emailAddress">User Email</label>
                        <input type="email" id="emailAddress" placeholder="Enter Your Email" name="emailAddress" required>

                        <label for="telephone">Phone Number</label>
                        <input type="text" id="telephone" placeholder="xxxxxxxxxx" name="telephone" required>

                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>

                        <input type="submit" class="submit-btn" value="Submit" name="inquiry_create">
                    </form>
                </div>

                <div class="image-container">
                    <img src="images/contact.jpg" alt="Contact Us Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Box -->
    <section class="contact-info">
        <div class="container">
            <div class="info-box">
                <div class="info-item">
                    <h3>Phone</h3>
                    <p>+123-456-7890</p>
                </div>
                <div class="info-item">
                    <h3>Address</h3>
                    <p>123 CareerNest St, City Name, Country</p>
                </div>
                <div class="info-item">
                    <h3>Email</h3>
                    <p>support@careernest.com</p>
                </div>
            </div>
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
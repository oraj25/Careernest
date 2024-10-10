<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest Job Portal</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/home_css.css">
    <link rel="stylesheet" href="CSS/about_css.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS\profile_drop_down.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="footer and header/images/logo(8).png" alt="CareerNest Logo">
        </div>
        <nav>
        <ul>
                <li><a href="USER_HOME.PHP">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
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
        <section class="intro-section">
            <div class="content-box">
                <div class="left-content">
                    <h1>ABOUT US</h1>
                    <p>Find your dream job or discover the perfect candidate. All in one place.</p>
                </div>
                <div class="right-content">
                    <img src="footer and header/images/logo(7).png" alt="Main logo">
                </div>
            </div>
        </section>

        <section class="full_area">
            <div class="about_area">
                <div class="Who">
                    <p id="about_welcome">CareerNest is your go-to platform for connecting job seekers with employers. Whether you’re a recent graduate looking for your first opportunity or an established professional seeking a change, we are here to help you explore countless job options across various industries. Employers can easily post job openings and find the perfect candidates with our advanced filtering tools.</p>
                    <h2>Who We Are?</h2>
                    <p>We are an innovative online job portal built to streamline the hiring process for both job seekers and employers. Our platform allows users to create profiles, showcase their qualifications, and apply for jobs that match their skills. Employers can browse through talent pools, post job vacancies, and recruit candidates quickly and efficiently.</p>
                </div>

                <div class="Services">
                    <h2>Our Services</h2>
                    <section class="categories">
                        <div class="categories_box">
                            <h4 class="category-title">For Job Seekers</h4>
                            <div class="horizontal_layout">
                                <div class="sub_category">
                                    <img src="images/job.png" alt="Job Listings Image">
                                    <h5><a href="#" class="go_now">Job Listings</a></h5>
                                    <p>Discover a wide variety of job vacancies across multiple industries tailored to your career level and aspirations.</p>
                                </div>
                                <div class="sub_category">
                                    <img src="images/profile2.png" alt="Profile Creation Image">
                                    <h5><a href="#" class="go_now">Profile Creation</a></h5>
                                    <p>Build a standout profile showcasing your skills and qualifications to attract potential employers effectively.</p>
                                </div>
                                <div class="sub_category">
                                    <img src="images/news.png" alt="News Feed Image">
                                    <h5><a href="#" class="go_now">News Feed</a></h5>
                                    <p>Stay in formed with the latest industry news and trends to enhance your job search strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="categories_box">
                            <h4 class="category-title">For Employers</h4>
                            <div class="horizontal_layout">
                                <div class="sub_category">
                                    <img src="images/post.png" alt="Job Posting Image">
                                    <h5><a href="#" class="go_now">Job Posting</a></h5>
                                    <p>Effortlessly post job vacancies using customizable templates that simplify the recruitment process for your organization.</p>
                                </div>
                                <div class="sub_category">
                                    <img src="images/pool.png" alt="Talent Pool Access Image">
                                    <h5><a href="#" class="go_now">Talent Pool Access</a></h5>
                                    <p>Quickly find qualified candidates using advanced filtering tools to connect with the right talent efficiently.</p>
                                </div>
                                <div class="sub_category">
                                    <img src="images/contact.png" alt="Contact Us Image">
                                    <h5><a href="#" class="go_now">24-Hour Support</a></h5>
                                    <p>Our dedicated support team is available around the clock to assist with any inquiries or issues you may encounter.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="OurTeam">
                    <Section>
                        <div class="Team">
                            <h2>Our Team</h2>
                            <div class="container">
                                <img src="images/P_A.jpg" alt="Admin Image" class="admin-image">
                                <h1 class="Admin_Name">On Lai</h1>
                                <p>On Lai, our administrator, ensures the smooth operation of the website and manages user activities effectively.</p>
                            </div>
                            <section class="T_M_A">
                                <h2>Tecnical Team</h2>
                                <div class="team_members">
                                    <div class="team_box_area">
                                        <img src="images/P1.jpg" alt="Team Member 1" class="team_box">
                                        <div class="team_box_name">Wijetunga O R</div>
                                        <div>
                                            <p>Visionary leader driving innovation.</p>
                                        </div>
                                    </div>
                                    <div class="team_box_area">
                                        <img src="images/P2.jpg" alt="Team Member 2" class="team_box">
                                        <div class="team_box_name">P.A.G.U.D Aluthwaththa</div>
                                        <div>
                                            <p>Expert in software development and design.</p>
                                        </div>
                                    </div>
                                    <div class="team_box_area">
                                        <img src="images/P3.jpg" alt="Team Member 3" class="team_box">
                                        <div class="team_box_name">Jayasinghe R.M.S.K</div>
                                        <div>
                                            <p>Data analyst optimizing tech solutions.</p>
                                        </div>
                                    </div>
                                    <div class="team_box_area">
                                        <img src="images/P4.jpg" alt="Team Member 4" class="team_box">
                                        <div class="team_box_name">Kumarasinghe H.G.D.N</div>
                                        <div>
                                            <p>Creative coder enhancing user experience.</p>
                                        </div>
                                    </div>
                                    <div class="team_box_area">
                                        <img src="images/P5.jpg" alt="Team Member 5" class="team_box">
                                        <div class="team_box_name">A.M.P.O Aththanayaka</div>
                                        <div>
                                            <p>Support specialist ensuring seamless operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </Section>
                </div>

                <div class="Who">
                    <h2>Our Vision</h2>
                    <p>Our vision is to transform the way people connect with opportunities. We believe that every individual deserves the chance to showcase their talents and every business should have access to the right talent pool. By leveraging modern technology, we aim to remove the barriers between job seekers and employers, making the recruitment process seamless, transparent, and efficient. We strive to be the trusted platform that nurtures growth and success for both individuals and organizations, fostering long-term professional relationships.</p>
                </div>
                <div class="Who">
                    <h2>Join Us</h2>
                    <p>Whether you’re seeking the next step in your career or searching for the ideal candidate, CareerNest is the perfect place to start. For job seekers, we provide personalized job recommendations, the ability to build a standout profile, and access to industry updates and opportunities. Employers can benefit from a streamlined job posting process, advanced candidate search filters, and a rich pool of talent from various industries. Join CareerNest today and be part of a thriving community where talent meets opportunity. Let us help you unlock your potential and achieve your career goals.</p>
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
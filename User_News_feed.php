<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerNest - News Page</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/News feed .css">
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
                <li><a href="User_About_Us.php">ABOUT</a></li>
                <li><a href="#">NEWS</a></li>
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
                    <h2>News</h2> <br>
                    <p>Our News Page is a vital feature of our job portal,
                        designed to keep you informed and ahead of industry trends.
                         Here, we bring you the latest updates, articles, and insights 
                         related to the job market, company news, and career development. </p> <br>  
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                    </div>
                </div>
                <div class="right-content">
                    <img src="images/OIP.jpeg" alt="Job news image">
                </div>
            </div>
        </section>

        <!-- Main News Layout -->
        <section class="news-layout">
            <div class="combined-section">
                <!-- Combined Top Story Headlines and Video Section -->
                <div class="top-video-card">
                    <div class="top-news-card">
                        <h2>Top Story Headlines</h2>
                        <div class="top-story-content">
                            <a href="https://www.cnbc.com/jobs/">
                                <img src="images/Top news.jpeg" alt="Top story image" class="top-story-image">
                            </a>
                            <div class = "topStory">
                            <p class="top-story-text">
                                <h4>LinkedIn career expert explains how to stand out when job hunting</h4>
                                A LinkedIn survey earlier this year revealed 
                                85% of American workers want to pursue new roles. But that may prove 
                                difficult after August's jobs report showed the hot labor market is 
                                cooling down. Catherine Fisher, career expert at LinkedIn, joins CBS 
                                News with tips on how to stand out if you're looking to make a change.</p>
                            </div>
                        </div>
                        <a href="https://www.cbsnews.com/tag/employment/" class="read-more">Read More</a>
                    </div>

                    <div class="top-news-card">
                        <div class="top-story-content">
                            <a href="https://www.wsj.com/economy/jobs">
                                <img src="images/Top.jpg" alt="Top story image" class="top-story-image">
                            </a>
                            <div class = "topStory">
                            <p class="top-story-text">
                                <h4>Treasury Yields Hold on to Gains After U.S. Jobless Data</h4>
                                Treasury yields change little after weekly jobless claims data came
                                 in higher than expected, corroborating the gradual cooling of U.S. jobs markets.
                                  Initial claims were 225,000 last week, up from a upwardly revised 219,000 the week before, 
                                  while economists polled by The Wall Street Journal expected 220,000. 
                                  The four-week moving average declined by 750, to 224,250. At 10 a.m. ET,
                                   services PMI is forecast to rise slightly to 51.8 from 51.5. September payrolls
                                    tomorrow are expected to be higher than in August. The 10-year is at 3.810% and 
                                    the two-year at 3.671%, both above yesterday’s settlement. (paulo.trevisani@wsj.com; @ptrevisani).</p>
                            </div>
                        </div>
                        <a href="https://www.wsj.com/economy/jobs" class="read-more">Read More</a>
                        
                    </div>

                    <div>
                    <div class="video-news-card">
                        <iframe width="420" height="170" src="https://www.cbsnews.com/video/33000-boeing-workers-striking-for-higher-wages/"></iframe>
                        <div class = "video-news-card_text">
                                <h4>33,000 Boeing workers striking for higher wages</h4>
                                <p>Thousands of Boeing workers walked off the job Friday
                                 and onto the picket line after overwhelmingly 
                                 rejecting their latest contract offer. Carter Evans reports.</p> <br>
                            <a href="https://www.cbsnews.com/tag/employment/" class="read-more">Read More</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Right column (Local News and Recent News) -->
            <div class="right-column">
                <!-- Local News Section -->
                <div class="news-card local-news-card">
                    <h2>Local News</h2>
                    <a href="https://archives1.dailynews.lk/tags/jobs">
                    <img src="images/Local news.jpg" alt="Local news image">
                    </a> 
                    <h4>Providing jobs for 100,000 begins tomorrow</h4>
                    <p> The Programme of providing 100,000 employment 
                        opportunities aimed at eradicating poverty will
                         commence tomorrow, stated the President's Media
                          Divison (PMD). The objective of the Programme is to...</p>
                        <a href="https://archives1.dailynews.lk/tags/jobs" class="read-more">Read More</a>
                </div>
                

                <!-- Recent News Section -->
                <div class="news-card recent-news-card">
                    <h2>Recent News</h2>
                    <a href="https://www.euronews.com/tag/employment">
                    <img src="images/Recent news.jpg" alt="Recent news image">
                    </a>
                    <h4>Top European cities where finding a good job is easy: 
                        Insights from local residents</h4>
                    <a href="https://www.euronews.com/tag/employment" class="read-more">More News</a>
                </div>
            </div>
        </section>

        <a href="https://www.reuters.com/legal/employment/" class="more-news">More News</a>

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

    <script src="footer and header/JS/H_F_js.js"></script>
    <script src="JS/news_feed.js"></script>

</body>
</html>

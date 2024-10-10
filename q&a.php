<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="q&a.css">
    <link rel="stylesheet" href="CSS/Home_page.css">
    <link rel="stylesheet" href="CSS/User_home.css">
    <link rel="stylesheet" href="CSS/popup.css">
    <link rel="stylesheet" href="footer and header/CSS/H_F.css">
    <link rel="stylesheet" href="CSS/alert.css">
    <link rel="stylesheet" href="CSS/profile_drop_down.css">
    <style>
    body {
        /* Main Heading Styles */
.main-heading {
    text-align: center;
    padding: 50px 20px;
    background: #f0f0f0; /* Soft background color */
}

/* Search Bar Styles */
.search-bar {
    margin: 20px 0;
}
.search-bar input {
    padding: 12px;
    width: 320px; /* Slightly increased width */
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
    font-size: 16px; /* Improved font size */
}
.search-bar input:focus {
    border-color: #4A90E2;
}

/* FAQ Section Styles */
.faq {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

/* FAQ Item Styles */
.faq-item {
    margin: 15px 0;
    padding: 10px 0;
    border-bottom: 1px solid #e0e0e0; /* Lighter border for better contrast */
    transition: background-color 0.3s;
}
.faq-item:hover {
    background-color: #f9f9f9; /* Subtle hover effect */
}
.faq-item:last-child {
    border: none;
}

/* Chat Now Section Styles */
.chat-now {
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

/* Chat Box Styles */
.chat-box {
    border: 1px solid #ccc;
    padding: 10px;
    height: 250px;
    overflow-y: auto;
    background-color: #f9f9f9;
    border-radius: 5px;
    width: 100%;
}

/* Message Styles */
.message {
    margin: 5px 0;
    padding: 10px;
    border-radius: 5px;
    background-color: #e1e1e1;
}
.user-message {
    background-color: #d1e7dd;
    text-align: right;
}

/* Textarea Styles */
textarea {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    resize: none;
    margin-top: 10px;
    outline: none;
    transition: border-color 0.3s;
    font-size: 16px; /* Improved font size */
}
textarea:focus {
    border-color: #4A90E2;
}

/* Button Styles */
button {
    background-color: #4A90E2;
    color: white;
    padding: 12px 15px; /* Slightly increased padding */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s;
    width: 100%;
    font-size: 16px; /* Improved font size */
}
button:hover {
    background-color: #357ABD;
}

</style>

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
    
    <!-- Main Heading Section -->
    <section class="main-heading">
        <div class="content">
            <h1>Q&A</h1>
            <div class="search-bar">
                <input type="text" placeholder="Search for answers..." id="searchBar">
            </div>
        </div>
    </section>
    
    <!-- Frequently Asked Questions Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>How can I update my profile?</h3>
            <p>To update your profile, go to the profile settings page after logging in. From there, you can change your personal information, upload a new profile picture, and update your resume.</p>
        </div>
        <div class="faq-item">
            <h3>How do I reset my password?</h3>
            <p>If you forgot your password, click on 'Forgot Password?' on the login page. You'll receive an email with instructions to reset your password.</p>
        </div>
        <div class="faq-item">
            <h3>How do I apply for a job?</h3>
            <p>To apply for a job, navigate to the jobs section, find a job listing that interests you, and click the 'Apply' button. Make sure your profile is updated before applying!</p>
        </div>
        <div class="faq-item">
            <h3>What should I do if I encounter an error?</h3>
            <p>If you encounter any errors while using the platform, please contact our support team by clicking the 'Contact Us' link at the bottom of the page.</p>
        </div>
        <div class="faq-item">
            <h3>How can I improve my chances of getting hired?</h3>
            <p>Improving your chances of getting hired involves keeping your profile up to date, networking with other professionals, and applying to multiple job openings that fit your skills.</p>
        </div>
    </section>
    
    <!-- Chat Now Section -->
    <section class="chat-now">
        <h2>Need More Help? Chat Now</h2>
        <div class="chat-box" id="chatBox"></div>
        <textarea id="chatMessage" rows="4" placeholder="Type your message here..."></textarea>
        <button type="button" id="sendButton">Chat</button>
    </section>
    
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

    <script>
        const chatBox = document.getElementById('chatBox');
        const chatMessage = document.getElementById('chatMessage');
        const sendButton = document.getElementById('sendButton');

        sendButton.addEventListener('click', function() {
            const messageText = chatMessage.value.trim();
            if (messageText) {
                // Create a new message element
                const message = document.createElement('div');
                message.className = 'message user-message';
                message.textContent = messageText;

                // Append the new message to the chat box
                chatBox.appendChild(message);

                // Clear the input
                chatMessage.value = '';

                // Scroll to the bottom of the chat box
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        });
    </script>
</body>
</html>

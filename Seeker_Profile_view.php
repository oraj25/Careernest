<?php
// Include the database connection file
$con = include('DBconnection.php');

// Retrieve the seeker ID from the URL
$seeker_id = isset($_GET['seeker_id']) ? $_GET['seeker_id'] : 0;

// Fetch the job seeker's details based on the seeker ID
$sql = "SELECT * FROM job_seeker_profile WHERE Seeker_ID = " . intval($seeker_id);
$result = mysqli_query($con, $sql);
$job_seeker = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Profile</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/job page view.css">
</head>
<body>
    <!-- Profile Section -->
    <section class="fullArea">
        <div class="imageArea">
            <img src="images/telework.jpg" alt="job image" />
            <h1 class="det"><?php echo $job_seeker ? htmlspecialchars($job_seeker['Job_Category']) : 'Job Title'; ?><br>
                <p class="poDetails"><?php echo $job_seeker ? htmlspecialchars($job_seeker['Description']) : 'Details'; ?></p>
            </h1>
            <button class="backButton" onclick="window.history.back()">Back</button>
        </div>
        <div class="infoArea">
            <div class="LO_SA">
                <p><strong>Name:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['First_Name'] . ' ' . $job_seeker['Last_Name']) : 'Name not available'; ?></p>
                <p><strong>DOB:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['DOB']) : 'DOB not available'; ?></p>
                <p><strong>Age:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Age']) : 'Age not available'; ?></p>
                <p><strong>Country:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Country']) : 'Country not available'; ?></p>
                <p><strong>City:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['City']) : 'City not available'; ?></p>
                <p><strong>Gender:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Gender']) : 'Gender not available'; ?></p>
                <p><strong>Job Category:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Job_Category']) : 'Job Category not available'; ?></p>
                <p><strong>Contact:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Contact']) : 'Contact not available'; ?></p>
                <p><strong>Email:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Email']) : 'Email not available'; ?></p>
                <p><strong>Experience:<br><br></strong> <?php echo $job_seeker ? htmlspecialchars($job_seeker['Experience']) . ' years' : 'Experience not available'; ?></p>
            </div>
            <p class="jobDescription">
                <strong>Description:</strong> <?php echo $job_seeker ? nl2br(htmlspecialchars($job_seeker['Description'])) : 'Job seeker not found.'; ?>
            </p>
            <div class="buttonArea">
            <input type="button" id="applyButton" value="Apply Now" class="B1">
            <input type="button" id="saveButton" value="Save" class="B2">
            </div>
        </div>
    </section>
<script>
    // Function to show success message
        function showSuccessMessage(message) {
            // Create a new div for the message
            const messageDiv = document.createElement('div');
            messageDiv.textContent = message;
            messageDiv.style.position = 'fixed';
            messageDiv.style.top = '20px';
            messageDiv.style.right = '20px';
            messageDiv.style.padding = '10px';
            messageDiv.style.backgroundColor = '#28b463'; // Green background for success
            messageDiv.style.color = 'white';
            messageDiv.style.borderRadius = '5px';
            messageDiv.style.zIndex = '1000';
            messageDiv.style.opacity = '0';
            messageDiv.style.transition = 'opacity 0.5s ease';

            document.body.appendChild(messageDiv);

            // Fade in the message
            setTimeout(() => {
                messageDiv.style.opacity = '1';
            }, 100);

            // Fade out after 3 seconds
            setTimeout(() => {
                messageDiv.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(messageDiv);
                }, 500);
            }, 3000);
        }

        // Event listeners for buttons
        document.getElementById('applyButton').addEventListener('click', () => {
            showSuccessMessage('Applied successfully!');
        });

        document.getElementById('saveButton').addEventListener('click', () => {
            showSuccessMessage('Saved successfully!');
        });
    </script>
</body>
</html>


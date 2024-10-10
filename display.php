
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/admin.css">
    <link href="CSS/manage_job_posts.css" rel="stylesheet">
    <link href="CSS/alert.css" rel="stylesheet">


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

    <div class="container mt-4">
        <header>
            <h1>Job Seeker Information</h1>
            <form method="POST">
                <button type="submit" name="logout" class="btn btn-danger float-end">Logout</button>
            </form>
        </header>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Information
                            <a id="tx" href="Employee.php" class="btn btn-primary float-end">Add Profile</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php include('alert.php'); ?>
                            
                            <tbody>
        <?php
            include 'config.php';

            $sql = "SELECT id, name, email, password, job, skill, experiance FROM employee";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Employee ID</th><th>Employee name</th><th>Employee email</th><th>Password</th><th>Job</th><th>skill</th><th>experiance</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["job"] . "</td><td>" . $row["skill"] . "</td><td>" . $row["experiance"] ."</td>";
                    echo "<td><a href='Employee.php'>Add</a> | <a href='update.php?id=" . $row["id"] . "'>Update</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results";
            }
            $con->close();
        ?>
        </tbody>
        </table>

    </div>
</div>
</div>
</div>

<footer>
<p>CareerNest | <a href="#">Terms & Conditions</a> | <a href="privacy&policy.php">Privacy & Policy</a></p>
</footer>
</div>

<script src="JS/admin.js"></script>
</body>
</html>
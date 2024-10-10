<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.updateemployee {
    margin: 20px auto;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.updateemployee h4 {
    margin-bottom: 15px;
    font-size: 18px;
}

.input {
    width: calc(100% - 20px);
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #45a049;
}

/* Header Styles */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 40px;
}

.navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.navbar li {
    display: inline;
    margin-right: 10px;
}

.navbar li a {
    color: #fff;
    text-decoration: none;
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.social-icons a {
    color: #fff;
    font-size: 20px;
    margin: 0 10px;
}


.admin {
    margin-top: 20px;
}

</style>
<?php

include 'config.php';
 
if (isset($_POST["id"], $_POST["name"], $_POST["email"], $_POST["password"], $_POST["job"], $_POST["skill"], $_POST["experiance"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $job = $_POST["job"];
    $skill = $_POST["skill"];
    $experiance = $_POST["experiance"];

    if (empty($id) || empty($name) || empty($email) || empty($password) || empty($job) || empty($skill) || empty($experiance)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE employee SET name='$name', email='$email', password='$password', job='$job', skill='$skill', experiance='$experiance' WHERE id='$id'";

        if ($con->query($sql)) {
            header("Location: display.php");
            exit;
        } else {
            echo "Error updating record: " . $con->error;
        }
        
    }
}
 else {
    echo "All required fields must be filled";
}

?>

<html>
<head>
</head>
<body>
    <form class="updateemployee" method="POST" onsubmit="return confirmUpdate()">
        <h4>Update employee</h4>
        <input type="text" name="id" class="input" placeholder="Employee ID">
         <input type="text" name="name" class="input" placeholder="Employee name">
         <input type="text" name="email" class="input" placeholder="Employee email">
         <input type="text" name="password" class="input" placeholder="Password">
         <input type="text" name="job" class="input" placeholder="Job category">
         <input type="text" name="skill" class="input" placeholder="Employee skill">
         <input type="text" name="experiance" class="input" placeholder="Employee Experiance">

        <input type="submit" class="btn" value="Update">
        
      
        
    </form>

    <script>
        function confirmUpdate() {
            
            return confirm("Are you sure you want to update this employee?");
        }
    </script>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.deleteemployee {
    margin: 20px auto;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.deleteemployee h4 {
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
    background-color: #f44336;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-bottom: 10px;
}


.btn:hover {
    background-color: #d32f2f;
}


.admin {
    margin-top: 20px;
}

    </style>

<?php

include 'config.php';


if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM employee WHERE id='$id'";

    if ($con->query($sql)) {
        header("location: display.php");
        exit;
    } else {
        echo "Not deleted";
    }
} else {
    echo "Employee ID is not provided";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
</head>
<body>
    <form class="deleteemployee" method="POST" onsubmit="return confirmDelete();">
        <h4>Delete a Employee</h4>
        <input type="text" name="id" class="input" placeholder="Emploee ID">
        <input type="submit" class="btn" value="Delete"> 
    </form>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to remove this Employee?");
        }
    </script>
</body>
</html>

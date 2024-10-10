<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee profile</title>
    <link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">

    <link rel="stylesheet" href="CSS/employee.css">
  
</head>

<body>
    <!--header section ends-->
    <div class="admin">
       <div class="admin-header">
        <h2>ADD EMPLOYEE</h2>
       </div>
       
       
    <form class="add employee" method="POST" action="addemployee.php">

         <input type="text" name="id" class="input" placeholder="Employee ID">
         <input type="text" name="name" class="input" placeholder="Employee name">
         <input type="text" name="email" class="input" placeholder="Employee email">
         <input type="text" name="password" class="input" placeholder="Password">
         <input type="text" name="job" class="input" placeholder="Job category">
         <input type="text" name="skill" class="input" placeholder="Employee skill">
         <input type="text" name="experiance" class="input" placeholder="Employee Experiance">
         
         <input type="submit" class="btn" value="Submit">
         <input type="reset" class="btn" value="Reset">
</form>
    
   </div>    
</body>

</html>



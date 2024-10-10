<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - CareerNest Job Portal</title>
	<link rel="icon" type="image/x-icon" href="footer and header/images/birdhouse.png">
    <link rel="stylesheet" href="CSS/add_admin.css">
    <link rel="stylesheet" href="CSS/alert.css">

</head>
<body>
    
            <div class="form">

                <form class="content" method="POST" action="admin_logins_crud.php">

                <input type="hidden" name="Admin_ID" value="<?= $admin['Admin_ID']; ?>">

					<h2>Admin Sign In</h2>
                    <label>Admin Name</label>
					<input type="text" class="area" name="Admin_name" placeholder="Enter your Name here..." required />
					<br />
					<label>Email</label>
					<input type="email" class="area" name="Email" placeholder="Enter your Email here..." required />
        
					<br />
					<label>Password</label>
					<input type="password" class="area" name="password" placeholder="Enter your Password here..." required />
					<br />	
					<input type="submit" class="button" name="adminadd" value="ADD"/>
                    
				</form>
            </div>
       
</body>
</html>
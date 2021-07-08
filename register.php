<?php
session_start();
//  $_SESSION['msg'];
?>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title> MY Website</title>
    
    <link href="css/loginpage.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<div class="container form">
<div class="row">
    <div class="form">
<div class="login-form">
            <form action="registration.php" method="post" enctype="multipart/form-data" >
                <h2> Register </h2>
                <div class="form-group">
                <label>Name</label>
                <input type="text" name="user_name" class="form-control" required>
                </div>
                <?php
	
	if(isset($_SESSION['msg']))
	{
	?>
	
	    
	    <p class="error" style="font-size:1.25vw; color: red;"><a href="#"  data-dismiss="alert">&times;</a><strong>Error!</strong> <?php echo $_SESSION['msg']; ?></p>
	
	<?php
	}
	unset($_SESSION['msg']);
?>
                <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact" class="form-control" required>

                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                
                <div class="form-group">
                <label>Profile Image</label>
                <input type="file" name="profile"  class="form-control"  required>
                </div>
                <input type="submit" name="upload" class="btn btn-primary" value="REGISTER"  >
                <p class="message">Already Registered? <a href="login.php">Login</a>
            </form>
            </div>
        
    </div>
</div>
</div>




</body>
</html> 
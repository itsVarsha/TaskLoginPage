

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
        <!-- Login Form -->
    <div class="form">
            <div class="login-form">
            
            <form action="validation.php" method="post">
                <h2> Login Here </h2>
                <div class="form-group">
                <label>UserName</label>
                <input type="text" name="user_name" class="form-control" required>
                 
                </div>
                
           
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="message">Not Registered? <a href="register.php">Register</a>
            </form>
            </div>
        
            <!-- registration form-->
            
            
        
    </div>
</div>
</div>




</body>
</html> 
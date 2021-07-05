<!DOCTYPE html>
<html lang="en">
<head>
    <title> User Login</title>
    <link href="css/loginpage.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    
<div class="container">
<div class="row">
        <!-- Login Form -->
    <div class="form">
            <div class="login-form">
            
            <form action="validation.php" method="post">
                <h2> Login Here </h2>
                <div class="form-group">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control" required>
                </div>
           
                <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <p class="message">Not Registered? <a href="#">Register</a>
            </form>
            </div>
        
            <!-- registration form-->
            
            <form  class="register-form" action="registration.php" method="post">
                <h2> Registration </h2>
                <div class="form-group">
                <label>Name</label>
                <input type="text" name="user_name" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email" class="form-control" required>
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
                <label>Address</label>
                <input type="text" name="profile" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="message">Already Registered? <a href="#">Login</a>
            </form>
        
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>
<script>
    $('.message a').click(function(){
        $('form').animate({height:"toggle",opacity:"toggle"});

    });
</script>


</body>
</html> 
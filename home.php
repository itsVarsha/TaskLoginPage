<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
<html>
    <head>
    <title> WELCOME PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/loginpage.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
        </head>
<?php

        $con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");
       $name = $_SESSION['username']; 
        $sel = "SELECT * from registration where username='$name'";
        $query = mysqli_query($con, $sel);
        $details = mysqli_fetch_array($query);
        
        ?>
        <body>
            <div class="container  ">
             <!-- <button type="logout" class="btn btn-primary float-right" href="logout.php">Logout</button> -->
            <img src="<?= $details['profile']; ?>" class="my-3" style="margin-top:7%;width: 20vw; height: 20vw;border-radius:50%;display:block;margin-left:auto;margin-right:auto;">
            <h2 style=" text-align:center" >LOGIN SUCCESSFUL</h2>
    
        <h3 style=" text-align:center; font-weight: bold; font-style: italic; margin-top: 20px;">Welcome <?= $_SESSION['username']; ?></h3>
        <h4 style=" text-align:center;">Email: <?= $details['email']; ?> <br></br>
    Phone: <?= $details['contact']; ?><br></br></h4>
            <a class="btn btn-primary" style=" display: block;  margin-left: auto;  margin-right: auto; margin-top: 10px; font-size:2vw; width: 11vw; height:3.5vw; text-align: center; margin: bottom 80px;"  href="logout.php"> LOGOUT </a>

</div>  
    </body>

</html>
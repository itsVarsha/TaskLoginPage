<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>
<html>
    <head>
    <title> Home Page</title>
    <link href="css/loginpage.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
        </head>
<?php

        $con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");
       $name = $_SESSION['username']; 
        $sel = "SELECT profile from registration where username='$name'";
        $query = mysqli_query($con, $sel);
        $image = mysqli_fetch_array($query);
        
        ?>
        <body>
            <div class="container form ">
             <!-- <button type="logout" class="btn btn-primary float-right" href="logout.php">Logout</button> -->
            <img src="<?= $image['profile']; ?>" class="my-3" style="width:200px; height:200px; margin-top:20px;">    
            <a style="float:right; margin-top: 10px;" class="btn btn-primary " href="logout.php"> LOGOUT </a>
        <h1    style=" text-align:center; font-size: 100px; font-weight: bold; font-style: italic; margin-top: 100px">Welcome <?= $_SESSION['username']; ?></h1>

</div>  
    </body>

</html>
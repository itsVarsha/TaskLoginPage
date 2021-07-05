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

        <body>
            <div class="container form ">
             <!-- <button type="logout" class="btn btn-primary float-right" href="logout.php">Logout</button> -->
            
             <a style="float:right; margin-top: 10px;" class="btn btn-primary " href="logout.php"> LOGOUT </a>
        <h1 style=" text-align:center; font-size: 100px; font-weight: bold; font-style: italic; margin-top: 15%">Welcome <?= $_SESSION['username']; ?></h1>

</div>  
    </body>

</html>
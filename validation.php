<?php
session_start();
$con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");

$name = $_POST['user_name']; 
$password=$_POST['password'];
$profile = $_POST['profile'];

$details = "SELECT * from registration where username = '$name' && password='$password'";
  
$result = mysqli_query($con, $details);
$num = mysqli_num_rows($result);


if ($num == 1) {
    $_SESSION['username']=$name;
    $_SESSION['profile']=$profile;
    header("Location:home.php " );
}
else {
   header('Location:login.php');
}
?>
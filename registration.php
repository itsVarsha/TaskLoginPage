<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");

$name = $_POST['user_name']; 
$password=$_POST['password'];
$profile = $_POST['profile'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$details = "SELECT * from registration where username='$name'";
  
$result = mysqli_query($con, $details);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Registered!";
}
else {
    $con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");

    $reg = "INSERT INTO `registration` ( `username`, `password`, `profile`, `contact`, `email`) VALUES ('$name','$password','$profile','$contact','$email')";
    mysqli_query($con,$reg);
 
    // echo $result;
    echo "Registration Success";

}
?>
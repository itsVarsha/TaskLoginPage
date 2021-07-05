<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");

$name = $_POST['user_name']; 
$password=$_POST['password'];
$upload = $_POST['upload'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$details = "SELECT * from registration where username='$name'";
  
$result = mysqli_query($con, $details);
$num = mysqli_num_rows($result);

    $img_name = $_FILES['profile']['name'];
    $tmp_img_name = $_FILES['profile']['tmp_name'];
    move_uploaded_file($tmp_img_name,$img_name);
if ($num == 1) {
}
else {
    $con = mysqli_connect('localhost', 'test','test','login_registration') or die ( "Database Not Connected!..");

    $reg = "INSERT INTO `registration` ( `username`, `password`,`profile`,  `contact`, `email`) VALUES ('$name','$password','$img_name','$contact','$email')";
    mysqli_query($con,$reg);
        move_uploaded_file($_FILES['profile']['tmp_name'],"$file");
 
    // echo $result;
   
}

?>
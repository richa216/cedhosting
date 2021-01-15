<?php
session_start();
include 'dbcon.php';
$x = new user();
$otp = $_SESSION['otp'];
$email = $_SESSION['email'];
$otp2 = $_POST['otp1'];
// echo $otp2;
// echo $otp;
if($otp2 != $otp)
{
  echo 0;
}
else
{
  // $sql = $x->Update($email);
  // echo $email;
  echo 1;
}




?>
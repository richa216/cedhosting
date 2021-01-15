<?php
session_start();
$otp = $_SESSION['otp'];
$contact = $_SESSION['contact'];
$otp2 = $_POST['mobileotp'];
// echo $otp2;
// echo $otp;
if($otp2 != $otp)
{
  echo 0;
}
else
{
  echo 1;
}




?>
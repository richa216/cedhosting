<?php
session_start();

include 'dbcon.php';
$x = new user();

$email1 = $_POST['email'];
$password1 =  $_POST['password'];
$_SESSION['email'] = $email1;
$_SESSION['password'] = $password1;
$ema = $_SESSION['email'];
$pwd = $_SESSION['password'];

$y = $x->Select($ema,$pwd);
if(password_verify($password1,$y))
{
    $z = $x->SelectIsadmin($ema); 
    echo($z);
}
else{
    echo 'password doesnt match';
}



?>
<?php
session_start();

include 'dbcon.php';
$x = new user();
if(isset($_POST['email']))
{



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
else
{
    echo 'password doesnt match';
}
    
}

//forget Password

    if(isset($_POST['secques']))
    {
       $email = $_POST['Name'];
        $y = $x->Selectques($email);
     
   
     
        $secque = $_POST['secques'];
        $secans = $_POST['secans'];
        $forpwd = password_hash($_POST['cpassword'],PASSWORD_BCRYPT );;
        if(($y['security_question'] == $secque) && ($y['security_answer'] == $secans))
        {
            $y = $x->updatepasword($email,$forpwd);
           if($y)
           {
                echo 'password reset succesfuly';
           }
           else
           {
               echo 'deatils incorrect';
           }
        }
        else
        {
            echo 'deatils incorrect';
        }
     
        
    }




?>
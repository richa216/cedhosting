<?php
    session_start();

    include 'dbcon.php';
    $x = new user();
    
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT );
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sq = $_POST['sq'];
    $sa   = $_POST['sa'];
    $_SESSION['email'] = $email;
    $_SESSION['contact'] =$contact;
    $_SESSION['name'] = $name;
    $today = date("Y-m-d H:i:s");
    $ea=1;
    $pa=0;
    $ac=0;
    $ia=1;

    $sql = $x->Insert($email,$name,$contact,$ea,$pa,$ac,$ia,$today,$password,$sq,$sa);
    if($sql)
    {
        echo "<script>alert('Data inserted');</script>";
    }
    else
    {
    echo "<script>alert('Data not inserted');</script>";
    }



    // function userlogin()
    // {
        
    // }


?>
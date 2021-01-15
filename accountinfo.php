<?php
    session_start();

    include 'dbcon.php';
    $x = $con1->connection();
    
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT );
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $securityquestion = $_POST['sq'];
    $securityanswer   = $_POST['sa'];
    $_SESSION['email'] = $email;
    $today = date("Y-m-d H:i:s");
    $sql="INSERT INTO tbl_user (`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES (NULL, '$email', '$name', '$contact', '0', '0', '0', '1', '$today', '$password', ' $securityquestion', $securityanswer);";
    $y = $x->query($sql);
    echo(mysqli_fetch_assoc($sql));





?>
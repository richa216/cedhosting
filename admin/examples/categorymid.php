<?php
   session_start();

   include 'admin_dbcon.php';
   $x = new product();

//    $pn = $_POST['productname'];
   $pc = $_POST['productcategory'];
   $y = $x->InsertProductCategory($pc);
//    $num = mysqli_num_rows($y);
   if($y)
   {
    echo "<script>alert('Data inserted');</script>";
   }
   else
   {
    echo "<script>alert('Data insertion failed');</script>";
   }


?>
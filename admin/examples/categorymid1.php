<?php

session_start();

include 'admin_dbcon.php';
$x = new Product();


$pn = $_POST['productcategory1'];
$id = $_POST['id1'];
$y = $x->UpdateProductCategory($pn,$id);


if($y)
{
    echo 'product category updated successfuly';
}
else
{
    echo 'error';
}
?>
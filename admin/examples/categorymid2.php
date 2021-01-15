<?php



session_start();

include 'admin_dbcon.php';
$x = new Product();


$pid = $_POST['pid'];
$id = $_POST['id2'];
if($pid == $id)
{
    echo 'product cannot be deleted';
}

else
{
    $y = $x->DeleteProductCategory($id);
    echo 'product category deleted successfuly';
}





?>
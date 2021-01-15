<?php


   
session_start();

include 'admin_dbcon.php';
$x = new Product();
$y = new ProductDescript();


if(isset($_POST['productcategory']))
{
    $monthlyprice = $_POST['monthlyprice'];
    $annualprice  = $_POST['annualprice'];
    $sku          = $_POST['sku'];
    $webspace     = $_POST['webspace'];
    $bandwidth    = $_POST['bandwidth'];
    $freedomain   = $_POST['freedomain'];
    $languagetechnology = $_POST['languagetechnology'];
    $mailbox      = $_POST['mailbox'];
    $pc = $_POST['productcategory'];
    $pm = $_POST['productname'];
    $description1 = array("webspace"=>$webspace,"bandwidth"=>$bandwidth,"freedomain"=>$freedomain,"languagetechnology"=>$languagetechnology,"mailbox"=>$mailbox);
    $description = json_encode($description1);


    $z = $y->InsertProductdesc($pc,$pm,$description, $monthlyprice,$annualprice,$sku);


    if($y)
    {
        echo 'data inserted';
    }
    else
    {
        echo 'error';
    }
}





?>
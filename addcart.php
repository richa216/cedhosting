<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Word press Hosting :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
<?php include_once 'dbcon.php'; ?>
	<!---header--->
    <?php 

require_once "header.php";

?>
		<!---singleblog--->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <?php 
                           $id = explode(";", $_GET['id']);
                           if($id[1]=='Monthly')
                           {
                            echo '<th>Monthly Price</th>';  
                           }
                           else if($id[1]=='Annual')
                           {
                            echo '<th>Annual Price</th>'; 
                           }
                        ?>
                        
                        <th>SKU</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        
                        include_once 'dbcon.php';
                        $x = new product();
                        $id = explode(";", $_GET['id']);
                        $_SESSION['id1']=$id;
                        $id2 = $_SESSION['id1'];
                        $_SESSION['id'] = $id[0];
                      
                        $idp =  $_SESSION['id'];
                        $y = $x->GetAllProductDetails1($id[0]);
                        $c = 1;
                        foreach($y as $key=>$value)
                        {
                            $_SESSION['values'] = $value;
                            $values1 = $_SESSION['values'];
                            if($y[0][$key]==1)
                            {
                                echo '<tr>';
                                echo '<td>'.$idp.'</td>';
                                echo '<td>'.$y[0][1].'</td>';
                                echo '<td>'.$y[0][2].'</td>';
                                if($id[1]=='Annual')
                                {
                                    echo '<td>'.$y[0][4].'</td>';

                                }
                                else if($id[1]=='Monthly')
                                {
                                    echo '<td>'.$y[0][3].'</td>';
                                }    
                            }
                            else
                            {
                                echo 'product not available';
                            }
                               echo '<td>'.$c.'</td>';

                            echo '<td>'.'<input type="submit" id="edit" value="edit" class="btn btn-primary edit" name="edit">'.'</td>';
                            
                            echo '</tr>';
               
                        }
                        $c=$c+1;
                

                    ?>

                </tbody>
                </table>
            </div>
            <?php
            if(isset($_SESSION['email']))
            {
               echo '<a href="billing.php" id="checkoutbutton">Checkout</a>';
            }
            else
            {
                echo '<a href="login.php" id="checkoutbutton">Checkout</a>';
            }
            ?>
            </div>
        </div>
    </div>
</div>

		<!-- Wordpress Features -->
			<!---footer--->
			<?php include 'footer.php';?>
			<!---footer--->
</body>
</html>
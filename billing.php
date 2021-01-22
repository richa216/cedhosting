<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>						
<!--script-->

<style>
#paypalpaymentbutton
{
	text-align: center;
}
</style>
</head>
<body>



	<!---header--->


	<?php
    session_start();
echo include 'header.php' ;
?>
	<!---header--->
    <div id="paypalpaymentbutton">
   <h2><b>Billing Details</b></h2><br><br>
    <?php
           
                      
           $values2 = $_SESSION['values1'];
         
		   echo '<ul>';
		//    print_r( $values2);
	   $y = $_SESSION['x'];
	   $idp =  $_SESSION['id'];
	   echo '<li>'."Product Id:".$idp.'</li>';
		echo '<li>'."Product Name:".$values2[1].'</li>';
		echo '<li>'."Product Price:".$y.'</li>';
		 
		  
    
	
	  
	  
  
       
   
   
         ?>
              </div>
    <script src="https://www.paypal.com/sdk/js?client-id=Aet-4_I9o32R6PCESuWhoagpk5hy9SfJNFGCMsTl5wxDwtusVszXcGU1Qd1B9TZbrSyxu2QLennXfDuC&currency=INR&disable-funding=credit,card"></script>
<script src="index.js"></script>	


			
			<!---footer--->
			<!-- <?php include 'footer.php'; ?> -->
			<!---footer--->

			
</body>
</html>
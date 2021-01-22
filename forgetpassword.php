<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
session_start();
include 'dbcon.php';
$x = new user();




?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<!---header--->
	<?php
echo include 'header.php' ;
?>
	<!---header--->
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>Password Recovery</h3>
									<p>If you have an account with us, please log in.</p>
									<form>
                                    <div>
								<span>Select your Security Question<label>*</label></span>
								<select id="secques" name="secques">
								  <option disabled selected>--Security Question--</option>
								  <option value="Your first school name?">Your first school name?</option>
								  <option value="what is your pet name?">what is your pet name?</option>
								  <option value="what is your father's name?">what is your father's name?</option>
								</select>
							 </div>
                             <div>
								<span>Security Answer<label>*</label></span>
								<input type="text" id="secans" name="secans">
							 </div>
                             <div>
										<span>Create Password<label>*</label></span>
										<input type="password" id="cpassword" name="cpassword"><br><br>  
                                        </div>
										<div>
										<span>User Name<label>*</label></span>
										<input type="text" id="Name" name="Name"><br><br>  
                                        </div>
                                        </div>
                                        <input type="submit" value="Create Password" id="Create" name ="Create">
                                        </div>
									  </div>
									
									  
									</form>
                             
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<!---footer--->
				<?php include 'footer.php'; ?>
			<!---footer--->



			<script>

$(document).ready(function(){
			$('#Create').click(function(e){
                e.preventDefault();
                function validation()
                {
                    $secques = $('#secques').val();
                    $secans = $('#secans').val();
                    $cpassword = $('#cpassword').val();
            
                    var matchpwd1   = /^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
                
                    if($secques == "" && $secans == "" && $cpassword == "")
                    {
                        alert("all fields are required");
                        return false;
                    }
                    else if(!($cpassword.match(matchpwd1)))
                    {
                        alert("password criteria doesn't match");
                        return false;
                    }
                    else
                    {
                        return true;
                    }

                }
                $x = validation();
                if ($x==true)
                {
  
						$.ajax({
                      
								method:'POST',
								url:'userlogin.php',
								data:$("form").serialize(),
								success:function(data)
								{   debugger;
									
									alert(data);
									
								}
                            })
                        }	
							
					});
				});


</script>
</body>
</html>
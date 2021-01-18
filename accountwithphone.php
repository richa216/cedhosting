<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

session_start();
?>
<!DOCTYPE HTML>
.php>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text.php; charset=utf-8" />
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
				<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
		  	  <form> 
				 <div class="register-top-grid">
					<h3>personal information</h3>
					 <div>
						<span>Name<label>*</label></span>
						<input type="text" id="name" name="name" required> 
					 </div>
					 <div>
						 <span>Email Address<label>(Optional)</label></span>
						 <input type="text" id="email" name="email" required> 
					 </div>
					 <div>
						<span>Mobile<label>*</label></span>
						<input type="text" id="contact" name="contact" required>
						<button type="button" class="btn btn-primary btn-sm" id="verifymobile">Verify</button>
						<input type="text" name="mobileotp"  id="mobileotp" required>
						<button type="button" class="btn btn-primary btn-sm" id="vermobotp">VerifyOTP</button>
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox" ><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>login information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" id="password" name="password" required>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="rpassword" name="rpassword" required>
							 </div>
							 <div>
								<span>Security Question<label>*</label></span>
								<select id="sq" name="sq">
								  <option disabled selected>--Security Question--</option>
								  <option value="Your first school name?">Your first school name?</option>
								  <option value="what is your pet name?">what is your pet name?</option>
								  <option value="what is your father's name?">what is your father's name?</option>
								</select>
							 </div>
							 <div>
								<span>Security Answer<label>*</label></span>
								<input type="text" id="sa" name="sa">
							 </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but" id="regi">
				   <form>
					   <input type="submit" value="submit" id="submit1">
					   <div class="clearfix"> </div>
				   </form>
                   <a href='account.php'><h6>Login with Email</h6></a>
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
				<!---footer--->
				<?php include 'footer.php'; ?>
			<!---footer--->

    <script>
	
	$(document).ready(function(){
        $('#submit1').hide();
        	$('#verifymobile').click(function(e){
			var contact1 = $('#contact').val();
			$.ajax({
					method:'POST',
					url:'mobileopt.php',
					data:{
						contact:contact1,
					},
					success:function(data)
					{
						debugger;
						// alert('login successfuly');
						console.log(data);
						// window.location.href = 'signup.php';
					}
				})	
		})



		$('#vermobotp').click(function(e){
			var otp1 = $('#mobileotp').val();
			$.ajax({
					method:'POST',
					url:'verifymobileopt.php',
					data:{
						mobileotp:otp1,
					},
					success:function(data)
					{
						debugger;
						// alert('login successfuly');
						console.log(data);
						if(data==1)
						{
							alert('otp verified succesfuly');
						}
						else
						{
							alert('otp verification failed');
						}
						// window.location.href = 'signup.php';
					}
                })
                $('#submit1').show();	
		});





		$('#submit1').click(function(e)
		{
			
			e.preventDefault();
		
			function Validate()
			{
				$email = $('#email').val();
				$contact = $('#contact').val();
				$name = $('#name').val();
				$password=   $('#password').val();
				$rpassword = $('#rpassword').val();
				var matchmobile= /^(0)?[1-9]{1}[0-9]{9}$/; 
				var matchemail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
				var matchname =/^([a-zA-Z]+\s?)*$/;
				var matchpwd   = /^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;

				// \s means not white spaces
				if($name== "" && $password=="" && $rpassword=="" && $contact=="")
				{
					alert("all fields are required");
					return false;
				}
				else if(!($email.match(matchemail)))
				{
					alert("email criteria doesn't match");
					return false;
					
				}
				else if(!($contact.match(matchmobile)))
				{
					alert("contact criteria doesn't match");
					return false;
					
				}
				else if(!($name.match(matchname)))
				{
					alert("name criteria doesn't match");
					return false;
				}
				else if(!($password.match(matchpwd)))
				{
					alert("password criteria doesn't match");
					return false;
				}
				else if($password != $rpassword)
				{
					alert("password doesn't match");
					return false;
				}
				else 
				{
					return true;
				}
			


			}
			$x=Validate();

			if ($x==true) {
				$.ajax({
                   
					method:'POST',
					url:'phoneapprove.php',
					data:$("form").serialize(),
					success:function(data)
					{
						debugger;
						// alert('login successfuly');
						console.log(data);
						
					}
				})
            }
            window.location.href = 'login.php';
		});







	});
		
	</script>
</body>
<.php>
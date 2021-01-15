<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
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
						 <span>Email Address<label>*</label></span>
						 <input type="text" id="email" name="email" required> 
						 <button type="button" class="btn btn-primary btn-sm" id="verifyemail">Verify</button>
						 <input type="text" id="otp1" name="otp1">
						 <button type="button" class="btn btn-primary btn-sm" id="mailotp">VerifyOTP</button>
					 </div>
					 <div>
						<span>Mobile<label>(optional)</label></span>
						<input type="text" id="contact" name="contact" required>
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
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit" id="submit">
					   <div class="clearfix"> </div>
				   </form>
				   <a href='accountwithphone.php'><h4>Login with mobile</h4></a>
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
		$('#submit').hide();



		
		$('#verifyemail').click(function(e){
			var em = $('#email').val();
			$.ajax({
					method:'POST',
					url:'email_otp.php',
					data:{
						email:em,
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

		$('#mailotp').click(function(e){
			
			e.preventDefault();
			var otp = $('#otp1').val();
			$.ajax({
					method:'POST',
					url:'verifyemailotp.php',
					data:{
						otp1:otp,
					},
					success:function(data)
					{
						debugger;
						
						if(data==1)
						{
							alert('otp verified succesfuly');

						}
						else if(data==0)
						{
							alert('otp verification failed');
						}
					}
				})
				$('#submit').show();	
		});
		$('#submit').click(function(e)
		{
			
			e.preventDefault();
		
			function Validate()
			{
				$email = $('#email').val();
				$contact = $('#contact').val();
				$name = $('#name').val();
				$password=   $('#password').val();
				$rpassword = $('#rpassword').val();
				
				var matchemail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
				var matchname =/^([a-zA-Z]+\s?)*$/;
				var matchpwd   = /^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;

				// \s means not white spaces
				if($email=="" && $name== "" && $password=="" && $rpassword=="")
				{
					alert("all fields are required");
					return false;
				}
				else if(!($email.match(matchemail)))
				{
					alert("email criteria doesn't match");
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
					url:'user.php',
					data:$("form").serialize(),
					success:function(data)
					{
						debugger;
						// alert('login successfuly');
						console.log(data);
						window.location.href = 'login.php';
					}
				})
				
		}
		});




	})
		
	</script>
</body>
</html>
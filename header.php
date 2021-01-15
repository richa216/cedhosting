<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><img src="images/logo.png" alt="logo" width="100" height="90"></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li class="active"><a href="about.php">About</a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="caret"></i></a>
										<ul class="dropdown-menu">
											<li><a href="blog.php">Blog</a></li>
											<li><a href="pricing.php">Pricing</a></li>
											<li><a href="faq.php">FAQ's</a></li>
											<li><a href="testimonials.php">Testimonials</a></li>
											<li><a href="history.php">History</a></li>
											<li><a href="support.php">Support</a></li>
											<li><a href="templatesetting.php">Template setting</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="portfolio.php">Portfolio</a></li>
										</ul>
									</li> -->
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu" id="dm">
									<?php
									
										include_once 'dbcon.php';
										$z = new product();
									
										$value  = $z->selectproductname();
											foreach($value as $key=>$value)
											{
											
													
													echo '<li><a href="catpage1.php?id='.$value['id'].'">'.$value['prod_name'].'</a></li>'; 
												
												}
									
										
							
											?>
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
                                <li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
                                <li class="active">
                                 <a href="cart.php" id="fa-fa-font-size" >
                                 <i class="fa fa-shopping-cart">
                                 <span class="badge badge-info"></span>
                                 </i>
                                 </a>
                                 </li>

                                 <li class>
                                 <a href="login.php">Login</a>
                                 </li>

							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>



		</div>




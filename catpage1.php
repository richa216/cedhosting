<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <?php include 'header.php';?>
		<!---singleblog--->
				<div class="content">
					<div class="linux-section">
						<div class="container">
							<div class="linux-grids">
								<div class="col-md-8 linux-grid">
								<?php 
									$z = new product();
									$value = $z->GetProductsDetail($_GET['id']);
									foreach($value as $key=>$value)
									{
										echo '<h2>'.$value.'</h2>';
									}


                                ?>
								
								
								
								<ul>

                                   <?php
                                        
                                        $z = new product();
                                        $arr = $z->GetAllProductsDetail();
                                        foreach($arr as $key=>$value)
                                        {
                                            echo $value;
                                        }


                                   ?>
									<!-- <li><span>Unlimited </span> domains, email and disk space</li>
									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
									<li><span>1 click</span> WordPress Installation with cPanel (demo) platform</li>
									<li><span>Launch  </span> your business with Rs. 1000* Google AdWords Credit *</li>
									<li><span>30 day </span> Money Back Guarantee</li> -->
								</ul>
									<a href="#">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
								<?php
                    $patternarray=array("/window/i", "/word/i", "/cms/i", "/linux/i", "/mac/i");
                    $temp=true;
                    foreach ($patternarray as $val) {
						$z = new product();
						$value = $z->GetProductsDetail($_GET['id']);
                        if (preg_match($val, $value['prod_name'])) {
                            $temp=false;
                            $str=str_replace("/", "", $val);
                            $strfinal=rtrim($str, "i");
                            echo '<img src="images/'.$strfinal.'.png" class="img-responsive" alt=""/>';
                            break;
                        }
                    }
                    if ($temp==true) {
                        echo '<img src="images/window.png" class="img-responsive" alt=""/>';
                    }
                    ?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<div id="myTabContent" class="tab-content">
									
										<?php
										    include_once 'dbcon.php';
											$x = new product();
											$y = $x->GetProductDesc($_GET['id']);
											$z = $x->GetProductDesc1($_GET['id']);
											echo $_GET['id'];
											// echo $y[0];
											if($z>0)
											{
												echo '<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">';
												echo '<div class="linux-prices">';
		
															echo '<div class="col-md-3 linux-price">';
															echo '<div class="linux-top">';
															echo '<h4>Standard</h4>';
															echo '</div>';
															echo '<div class="linux-bottom">';
															echo '<ul>';
									
															
																echo '<h5 id="month">'.'₹'.$y[4].'<span class="month">'."per Month".'</span>'.'</h5>';
																echo '<h5 id="annual">'.'₹'.$y[5].'<span class="month">'."per Annum".'</span>'.'</h5>';
															
															 
																echo'<h6>Single Domain</h6>';
																
															  echo '<li><strong> '.$y[7].'GB </strong> Web Space'.'</li>';
															  echo '<li><strong> '.$y[8].'GB </strong> Band Width'.'</li>';
															  echo '<li><strong> '.$y[10].'</strong>Language/Technology '.'</li>';
															  echo '<li><strong>High Performance</strong>  Servers</li>';
															  echo '<li><strong>location</strong> : <img src="images/india.png"></li>';
											   
														
															echo '</ul>';

												echo '</div>';

												echo '<a href="javascript:void(0)" id="addtocart" class="btn btn-primary edit" name="edit">add to cart</a>';
												echo '</div>';
															
											

											}
											else
											{
												echo '<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">';
												echo '<div class="linux-prices">';
                                                echo '<script> window.location.replace("index.php");</script>';
												echo '</div>';
												echo '</div>';

											}
											 
												
	
											?>
									
										
											<div class="clearfix"></div>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
									<div class="linux-prices">
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Standard</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$259 <span class="month">per month</span></h5>
													<h6>Single Domain</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Advanced</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$359 <span class="month">per month</span></h5>
													<h6>2 Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Business</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$539 <span class="month">per month</span></h5>
													<h6>3 Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="col-md-3 linux-price">
												<div class="linux-top us-top">
												<h4>Pro</h4>
												</div>
												<div class="linux-bottom us-bottom">
													<h5>$639 <span class="month">per month</span></h5>
													<h6>Unlimited Domains</h6>
													<ul>
													<li><strong>Unlimited</strong> Disk Space</li>
													<li><strong>Unlimited</strong> Data Transfer</li>
													<li><strong>Unlimited</strong> Email Accounts</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/us.png"></li>
													</ul>
												</div>
												<a href="#" class="us-button">buy now</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- clients -->

       <!-- clients -->
	     <!-- Wordpress Features -->
					<div class="features">
						<div class="container">
							<h3>Wordpress Features</h3>
							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f1.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f2.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f3.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f4.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f5.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f6.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
		<!-- Modal -->

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form role="form">
    


                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <input class="form-control"  placeholder="Product Id" name="id1" type="text" id="id1">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
				  <select class="form-control" name="plan" id="plan">
				    <option disabled>Please Select Plan</option>
				     <option value="Annual">Annual</option>
					 <option value="Monthly">Monthly</option>
				  </select>
                 
                  </div>
                </div>

                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4" id="addtocart1" name="addtocart1">Add to cart</button>
                </div>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
          




			<!---footer--->
			<?php include 'footer.php';?>
			<!---footer--->

		<script>
		   $(document).ready(function()
		   {
			   $('#addtocart').click(function(){
				var currLoc = $(location).attr('href');
				var split = currLoc.split("=");
				console.log(split[1].replace('#',''));

				var x = split[1].replace('#','');
				$('#id1').val(x);
				   $('#exampleModal').modal();
				});
				


				$('#addtocart1').click(function()
				{
					$y = document.getElementById("month").innerText;
					console.log($y);
					$.ajax({
							method:'POST',
							url:'addcart.php',
							data:$("form").serialize(),
							success:function(data)
							{
							debugger;
							// alert('login successfuly');
							console.log(data);
							}
                        });
					window.location.replace("addcart.php");
				});

			});
			
		   

		</script>
			

			
			
			
</body>
</html>
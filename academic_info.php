<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Aryan Music : Online Musical Instruments</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="online music instrument,music instrument,music instrument buy online,buy music instrument" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!-- //end-smooth-scrolling --> 
</head> 
<body> 

	
	<!-- header modal -->
	 <!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="login.php" method="POST">			
													<input name="email" type="text" placeholder="Enter your email Address" required="">						
													<input name="pass" type="password" placeholder="Enter  Your Password" required="">										
													<div class="sign-up">
														<input type="submit" name="signin" value="Sign in"/>	
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<script type="text/javascript">
														$(function ()
														{
														$("#btnSubmit").click(function ()
														{
														var pass = $("#txtPassword").val();
														var con_pass = $("#txtConfirmPassword").val();
														if (pass != con_pass)
														{
																alert("Passwords do not match.");
																return false;
														}
																alert("Welcome);
																return true;
														});
														});
												</script>
												<form action="reg.php" method="POST">			
													<input placeholder="Name" name="name" type="text" required="">
													<input placeholder="Email Address" name="email" type="email" required="">	
													<input placeholder="Password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"type="password" id="txtPassword" required="">	
													<input placeholder="Confirm Password" name="con_pass" type="password"  id="txtConfirmPassword" required="">
													<div class="sign-up">
														<input type="submit" name="submit" id="btnSubmit" value="Create Account"/ >
													</div>	
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true" ></span></a>
			</div> 
			<div class="w3l_logo">
				<h1><a href="index.php">Musical Instruments Portal<span>of Aryan Music</span></a></h1>
			</div>
			
			<div class="create_btn">
					<a href="logout.php"><input type="button" name="Sign out" value="Sign Out" class="button button1"/></a>
			</div>
			<div class="session" >
<?php
session_start();
if(isset($_SESSION['name']))
{
				
	echo 'welcome!'.$_SESSION['name'];
}
			
?>
			</div>
		
		
	
	
	
	<style>
	.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid blue;
}

.button1:hover {
    background-color:blue;
    color: white;
}
</style>
</div>
</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Indian Music Instrument</h6>
											<li><a href="dhol.html">Dhol</a></li>
											<li><a href="tabla.html">Tabla </a></li> 
											<li><a href="harmonium.html">Harmonium</a></li>
											<li><a href="sitar.html">Sitar</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Percussion</h6>
											<li><a href="bass_drum.php"> Bass drum</a></li>
											<li><a href="cymbals.php">Cymbals</a></li>
											<li><a href="piano.php">Dhol</a></li>
											<li><a href="dholak.php">Dholak</a></li>
											<li><a href="piano.php">Paino</a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Nonpercussion</h6>
											
											<li><a href="drum.html">Drum </a></li>
											<li><a href="timpani.html">Timpani</a></li>
											<li><a href="xylophone.html">Xylophone</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<!--<div class="w3ls_products_pos">
											<h4>30%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>-->
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="feedback.html">Feedback</a></li> 
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academic Information <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="academic_info.php">Academic Information</a></li>
								<li><a href="reg_class.php">Registration For Class</a></li>      
							</ul>
						</li>  
						<li><a href="contact_us.php">Contact Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>Aryan Music</h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Acedemic Information</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- about -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
				
					<h4><center><font color="blue">Aryan Music</center></h4>
					<br/>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<h4>Learning music instrument at aryan music with the best musician mr.abhijit composer.</h4>
					</div>
					<div class="clearfix"> </div>
					<br/>
					<br/>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<h4>We also provide online enroll for music instrument learning. </h4>
					</div>
					<br/>
					<br/>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<ul>
						<h4><font color="black"><b>Classes Times</b></h4>
						<li>10 to 12</li>
						<li>12 to 2</li>
						<li>2 to 4</li>
						<li>4 to 6</li>
						</ul>
					</div>
					
					
				<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="images/52.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- team -->
	<div class="team">
		<div class="container">
			<h3>Learning Instrument Name</h3>
			<div class="wthree_team_grids">
				<div class="col-md-3 wthree_team_grid">
					<img src="images/3.jpg" alt=" " class="img-responsive" />
					<h4>Guitar</h4>
					
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/28.jpg" alt=" " class="img-responsive" />
					<h4>Piano</h4>
					
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/15.jpg" alt=" " class="img-responsive" />
					<h4>Flute</h4>
					
				</div>
				<div class="col-md-3 wthree_team_grid">
					<img src="images/9.jpg" alt=" " class="img-responsive" />
					<h4>Drum</h4>
					
				</div>
				<div class="clearfix"> </div>
				<h4 style="text-decoration: blink;"><center>This Music Instrument Learning Classes Available at Aryan Music</center></h4>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- team-bottom -->
	<div class="team-bottom">
		<div class="container">
			<h3>Are You Ready For learn Music Instrument?</h3>
			
			<a href="reg_Class.php">Register Now</a>
		</div>
	</div>
	<!-- //team-bottom -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<!--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>-->
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>B-211,Lane No:4<span>Sethi Nagar,Ujjain</span><span>Madhya Pradesh</span><span>456010.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">abhijit.composer@gmail.com </a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="academic_info.php">Aryan Music</a></li>
						<li><a href="contact_us.php">Contact Us</a></li>
						<li><a href="reg_Class.php">Registration for class</a></li>
						<li><a href="feedback.php">Feedback</a></li>
						
					</ul>
				</div>
				
				<div class="col-md-3 w3_footer_grid">
					<h3>Products</h3>
					<ul class="info"> 
						<li><a href="index.php">Home</a></li>
						<li><a href="piano.php">Piano</a></li>
						<li><a href="bass_drum.php">Bass Drum</a></li>
						<li><a href="guitar.php">Guitar</a></li>
					</ul>
					
				</div>
				<div class="col-md-3 w3_footer_grid">
				<h3>Profile</h3>
					<ul class="info"> 
						
						<li><a href="change_pass.html">Change Password</a></li>
						
						<li><a href="order_history.php">View Order History</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2018 Music Instruments Portal  All rights reserved | Design by Mittal Parmar Bhatiya</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>
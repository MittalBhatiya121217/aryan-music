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
<meta name="keywords" content="online music instrument,music instrument,music instrument buy online,buy music instrument" />" 
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
													<input placeholder="Password" name="pass" type="password" id="txtPassword" required="">	
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
				<h1><a href="index.html">Musical Instruments Portal<span>of Aryan Music</span></a></h1>
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
											<li><a href="dhol.php">Dhol</a></li>
											<li><a href="tabla.php">Tabla </a></li> 
											<li><a href="harmonium.php">Harmonium</a></li>
											<li><a href="sitar.php">Sitar</a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Percussion</h6>
											<li><a href="bass_drum.php"> Bass drum</a></li>
											<li><a href="cymbals.php">Cymbals</a></li>
											<li><a href="piano.php">Piano</a></li>
											<li><a href="dholak.php"><i>Dholak</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Nonpercussion</h6>
											
											<li><a href="drum.php">Drum </a></li>
											<li><a href="timpani.php">timpani</a></li>
											<li><a href="xylophone.php">xylophone</a></li>
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
						<li><a href="feedback.php">Feedback</a></li> 
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
				<li><a href="academic_info.php"> Academic Information</a> <i>/</i></li>
				<li>Registration for class</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 	
	<!-- short codes -->
	<div class="typo codes">
		<div class="container"> 
			<h3 class="agileits-title">Registration For Class</h3>
			<div class="register">
			


<?php
include("config.php");
  
   $sql="select MAX(can_id)'cnt' from candidate_data";
	$sql;

$result = mysql_query($sql);
while ($db_field = mysql_fetch_assoc($result)) 
{
	$cnt = $db_field['cnt'];
}

$cnt = $cnt + 1;
?>



<?php
if(isset($_POST['next']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_music";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

		$can_id=$_POST['can_id'];
		$can_name=$_POST['can_name'];
		$class_fees=$_POST['class_fees'];
		$instr_name=$_POST['instr_name'];
		$class_fees=$_POST['class_fees'];
    
	$sql = "INSERT INTO `candidate_data`(`can_id`,`can_name`,`class_time`,`instr_name`,`class_fees`) VALUES($can_id,$can_name,$class_fees,$instr_name,$class_fees)";
	
	echo $sql;
 $result = $conn->query($sql);
if ($result === TRUE)
 {
	 echo "New record inserted successfully"; 
 }
else
{ 
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>



<style>
table, th, td 
{
    color: black;
	border-collapse: collapse
}
th, td 
{
    padding: 10px;
}
th 
{
    text-align: left;
}table
 {
    border-spacing: 2px;
}
table#t01 tr:nth-child(even) 
{
    background-color:#d3d3d3;
}
table#t01 tr:nth-child(odd) 
{
    background-color:	white;
}
table#t01 th {
    color: white;
    background-color: #b22222;
}
.button 
{
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
.button1
 {
    background-color: white; 
    color: black; 
    border: 2px solid blue;
	width:100;
	height:30;
}

.button1:hover 
{
    background-color:blue;
    color: white;
}
.label
{
font-size:20px;
}
</style>
<script>
function ClearFields() 
{

     document.getElementById("can_id").value = "";
     document.getElementById("can_name").value = "";
	
	
	 
}
</script>
<center>
<table>
<tr>
													<td><label>Candidate id:</label>
														<input type="label" name="can_id" value='<?php echo $cnt; ?>' style="align:center;">
														</td>
														
													</tr>
													<tr>
														<td><label>Candidate name:</label>
														<input type="text" name="can_name" style="width:300px","height:100px;","align:center;"required="">
														</td>
														
													</tr>
<center>
<form action="reg_pay.php" method="POST">
<?php
include("config.php");
	
	$sql1="SELECT * from candidate_data";
	
?>


	<tr>
		<td> 
			<label>Instrument name :</label> 
		</td>
<td>			
<select name="instr">

<?php
$result = mysql_query($sql1);
while($row = mysql_fetch_array($result))
{?>

		<option value="<?php echo $row['instr_name'];?>"><?php echo $row['instr_name'];?></option>
		
<?php	
}
mysql_close();
?>
</select>
</td>
</tr>
<?php
include("config.php");
	
	$sql1="SELECT * from candidate_data";
	
?>


	<tr>
		<td> 
			<label>Class time :</label> 
		</td>
<td>			
<select name="class">

<?php
$result = mysql_query($sql1);
while($row = mysql_fetch_array($result))
{?>
		<option value="<?php echo $row['class_time'];?>"><?php echo $row['class_time'];?></option>
	
		
<?php	
}
mysql_close();
?>
</select>
</td>
</tr>



												
												
												
												
													

													
													
													<tr>
															<td><label><b>Class address:</b></label>
																			B-211,Lane No:4<br/>
																			Sethi Nagar,<br/>
																			Ujjain,<br/>
																			Madhya Pradesh<br/>
																			456010.
															
															</td>
													</tr>	
													<tr>
													
													<td>
														<input type="submit" name="next" class="button button1" value="Next"/>
														<input type="button" onclick="ClearFields()" class="button button1" name="cancel" value="Cancel" /></td>
													</tr>
													</table>
												</form>
												</center>
												</div>
			


	
	<!-- //short-codes -->   
	<!-- newsletter -->
	
	<!-- //newsletter -->
	<!-- footer -->
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
				<p>&copy;2018 Music Instruments Portal  All rights reserved | Design by Mittal Parmar Bhatiya</a></p>
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
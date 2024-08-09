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
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
 
<script type="text/javascript">
if(document.getelementbyid('1')
{
	alert("incorrect username/ password please try again.");
}		 

</script>




<!-- //end-smooth-scrolling --> 
</head> 
<body>

	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
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
													<input name="pass" type="password"  placeholder="Enter  Your Password" required="">										
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
																alert("Welcome");
																return true;
														});
														});
												</script>
												<form action="reg.php" method="POST">			
													<input placeholder="Name" name="name" type="text" required="">
													<input placeholder="Email Address" name="email" 
													type="email" required="">	
													<input placeholder="Password" name="pass" 
													pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" id="txtPassword" required="">	
													<input placeholder="Confirm Password" 
													
													pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="con_pass"  type="password"  id="txtConfirmPassword" required="">
													
													
													<div class="sign-up">
														<input type="submit" name="submit" 
														id="btnSubmit" value="Create Account"/ >
													</div>	
												</form>
												</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () 
								{
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
						
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
	
	<!--<script>
		$('#myModal88').modal('show');
	</script>  -->
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			
			
			<div class="w3l_logo">
				<h1><a href="index.php">Musical Instruments Portal<span>of Aryan Music</span></a></h1>
			</div>
			
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
					
				</div>
				
			</div>
						
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
						<li><a href="index.php" class="act">Home</a></li>	
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
											<li><a href="piano.php">Dhol</a></li>
											<li><a href="dholak.php">Dholak</a></li>
											<li><a href="piano.php">Paino</a></li>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Nonpercussion</h6>
											
											<li><a href="drum.php">Drum </a></li>
											<li><a href="timpani.php">Timpani</a></li>
											<li><a href="xylophone.php">Xylophone</a></li>
										</ul>
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
	<div class="banner">
		<div class="container">
			<h3>Aryan Music</h3>
		</div>
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
			<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<!-- pop-up-box -->     
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<img src="images/11.jpg" width="200" height="200"></img>
						<!--<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>-->
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Guitar</a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio">Drum Set</a></li>
						<li role="presentation"><a href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video">Violin</a></li>
						<li role="presentation"><a href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">Flute</a></li>
						<li role="presentation"><a href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">Musical Keyboard</a></li>
					</ul>
<div id="myTabContent" class="tab-content">
<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
<div class="agile_ecommerce_tabs">


<div class="col-md-4 agile_ecommerce_tab_left">
<?php
function get_guitardata()
{
include('config.php');



if($db_found)
{
$SQL = "SELECT * FROM manage_product where pname='guitar'";

$result = mysql_query($SQL);
while ($row = mysql_fetch_assoc($result))
{
	
	$pid=$row['pid'];
	$pname=$row['pname'];
	$pdisc=$row['pdisc'];
	$pprice=$row['pprice'];
	$pimg=$row['pimg'];
	$pimg1=$row['pimg1'];
	$pimg2=$row['pimg2'];

//echo $pimg1."</br>";
//echo $pimg2;



?>
<div class="hs-wrapper">
<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

</div>
<div class="simpleCart_shelfItem">
<table border="0">

<tr>
	<td>
<label>Product Name:</label>
	<?php echo $pname;?></td>
</tr>
<tr>
	<td>
	<label>Product Discription:</label>
	<?php echo $pdisc;?></td>
</tr>
<tr>
	<td>
	<label>Product Price:</label>
	<?php echo $pprice;?></td>
</tr>

</table>
<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="checkout"></a>
</div>
<?php } ?>


<?php

mysql_close($db_handle);
}

}
get_guitardata();
?>	


</div>
<div class="col-md-4 agile_ecommerce_tab_left">

<?php
get_guitardata();
?>	

</div>

<div class="col-md-4 agile_ecommerce_tab_left">

<?php
get_guitardata();

?>

</div>

</div>
<div class="clearfix"> </div>
</div>


<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
<div class="agile_ecommerce_tabs">
<div class="col-md-4 agile_ecommerce_tab_left">
<?php
function get_drumdata()
{
include('config.php');



if($db_found)
{
$SQL = "SELECT * FROM manage_product where pname='electronic drum set'";

$result = mysql_query($SQL);
while ($row = mysql_fetch_assoc($result) )
{
	
	$pid=$row['pid'];
	$pname=$row['pname'];
	$pdisc=$row['pdisc'];
	$pprice=$row['pprice'];
	$pimg=$row['pimg'];
	$pimg1=$row['pimg1'];
	$pimg2=$row['pimg2'];





?>
<div class="hs-wrapper">
<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

</div>
<div class="simpleCart_shelfItem">
<table border="0">

<tr>
	<td>
<label>Product Name:</label>
	<?php echo $pname;?></td>
</tr>
<tr>
	<td>
	<label>Product Discription:</label>
	<?php echo $pdisc;?></td>
</tr>
<tr>
	<td>
	<label>Product Price:</label>
	<?php echo $pprice;?></td>
</tr>

</table>
<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="checkout"></a>
</div>
<?php } ?>


<?php

mysql_close($db_handle);
}
}
get_drumdata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_drumdata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_drumdata();
?>
</div>

</div>
</div>

<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
<div class="agile_ecommerce_tabs">
<div class="col-md-4 agile_ecommerce_tab_left">

<?php
function get_violindata()
{
include('config.php');



if($db_found)
{
$SQL = "SELECT * FROM manage_product where pname='violin'";

$result = mysql_query($SQL);
while ($row = mysql_fetch_assoc($result) )
{
	
	$pid=$row['pid'];
	$pname=$row['pname'];
	$pdisc=$row['pdisc'];
	$pprice=$row['pprice'];
	$pimg=$row['pimg'];
	$pimg1=$row['pimg1'];
	$pimg2=$row['pimg2'];





?>
<div class="hs-wrapper">
<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

</div>
<div class="simpleCart_shelfItem">
<table border="0">

<tr>
	<td>
<label>Product Name:</label>
	<?php echo $pname;?></td>
</tr>
<tr>
	<td>
	<label>Product Discription:</label>
	<?php echo $pdisc;?></td>
</tr>
<tr>
	<td>
	<label>Product Price:</label>
	<?php echo $pprice;?></td>
</tr>

</table>
<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
</div>
<?php } ?>


<?php

mysql_close($db_handle);
}
}
get_violindata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_violindata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_violindata();
?>
</div>

</div>
</div>

<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
<div class="agile_ecommerce_tabs">

<div class="col-md-4 agile_ecommerce_tab_left">

<?php
function get_flutedata()
{
include('config.php');



if($db_found)
{
$SQL = "SELECT * FROM manage_product where pname='flute'";

$result = mysql_query($SQL);
while ($row = mysql_fetch_assoc($result) )
{
	
	$pid=$row['pid'];
	$pname=$row['pname'];
	$pdisc=$row['pdisc'];
	$pprice=$row['pprice'];
	$pimg=$row['pimg'];
	$pimg1=$row['pimg1'];
	$pimg2=$row['pimg2'];





?>
<div class="hs-wrapper">
<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

</div>
<div class="simpleCart_shelfItem">
<table border="0">

<tr>
	<td>
<label>Product Name:</label>
	<?php echo $pname;?></td>
</tr>
<tr>
	<td>
	<label>Product Discription:</label>
	<?php echo $pdisc;?></td>
</tr>
<tr>
	<td>
	<label>Product Price:</label>
	<?php echo $pprice;?></td>
</tr>

</table>
<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
</div>
<?php } ?>


<?php

mysql_close($db_handle);
}
}
get_flutedata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_flutedata();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_flutedata();
?>
</div>

</div>
</div>

<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
<div class="agile_ecommerce_tabs">
<div class="col-md-4 agile_ecommerce_tab_left">
<?php
function get_musicalkeyboard()
{
include('config.php');



if($db_found)
{
$SQL = "SELECT * FROM manage_product where pname='musical keyboard'";

$result = mysql_query($SQL);
while ($row = mysql_fetch_assoc($result) )
{
	
	$pid=$row['pid'];
	$pname=$row['pname'];
	$pdisc=$row['pdisc'];
	$pprice=$row['pprice'];
	$pimg=$row['pimg'];
	$pimg1=$row['pimg1'];
	$pimg2=$row['pimg2'];

?>
<div class="hs-wrapper">
<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
<img src="admin_new/<?php echo $pimg1;?>" height="300" width="300"></img>
<img src="admin_new/<?php echo $pimg2;?>"height="300" width="300"></img>

</div>
<div class="simpleCart_shelfItem">
<table border="0">

<tr>
	<td>
<label>Product Name:</label>
	<?php echo $pname;?></td>
</tr>
<tr>
	<td>
	<label>Product Discription:</label>
	<?php echo $pdisc;?></td>
</tr>
<tr>
	<td>
	<label>Product Price:</label>
	<?php echo $pprice;?></td>
</tr>

</table>
<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
</div>
<?php } ?>


<?php

mysql_close($db_handle);
}
}
get_musicalkeyboard();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_musicalkeyboard();
?>
</div>

<div class="col-md-4 agile_ecommerce_tab_left">
<?php
get_musicalkeyboard();
?>
</div>

</div>
								
							</div>
						</div>
					</div>
				</div> 
			</div>
			
		</div>
	</div>

	<!-- //banner-bottom --> 
	<div class="banner-bottom1">
		<div class="agileinfo_banner_bottom1_grids">
			<div class="col-md-7 agileinfo_banner_bottom1_grid_left">
				<h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
				<a href="dhol.php">Shop Now</a>
			</div>
			<div class="col-md-5 agileinfo_banner_bottom1_grid_right">
				<h4>hot deal</h4>
				<div class="timer_wrap">
					<div id="counter"> </div>
				</div>
				<script src="js/jquery.countdown.js"></script>
				<script src="js/script.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
	
	<!-- banner-bottom1 -->
	
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	<div class="special-deals">
		<div class="container">
			
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
					
						<img src="images/21.jpg" alt=" " width="1000" height="300" ></img> 
						<div class="w3agile_special_deals_grid_left_grid_pos1">
							<h5>Vintage Piano</h5>
						</div>
						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4> Best Products</h4>
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width:100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/23.jpg" alt=" " width="100" height="100" class="img-responsive" />
										<p>Aryan music is a well known institute for learning music instruments.</p>
									
									</div>
								</div>
							</article>
							<article style="position: absolute; width:100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/23.jpg" alt=" " width="100" height="100" class="img-responsive" />
										<p>Aryan music is located in ujjain,m.p.</p>
										<h4></h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width:100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="images/24.jpg" alt=" " width="100" height="100" class="img-responsive" />
										<p>Selling music instruments online</p>
										<h4></h4>
									</div>
								</div>
							</article>
						</div>
					</div>
					
						<script src="js/jquery.wmuSlider.js"></script> 
						<script>
							$('.example1').wmuSlider();         
						</script> 
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="images/20.jpg" alt=" " width="100%" height="200%" class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
						<h4>Music Instrument <span>Special</span></h4>
						<h5>Guitar</h5>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //special-deals -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
					
						<?php
						function get_detail()
						{
							include('config.php');
							if($db_found)
							{
								$SQL = "SELECT * FROM manage_product where pname='flute'";

							$result = mysql_query($SQL);
							while ($row = mysql_fetch_assoc($result) )
							{
	
							$pid=$row['pid'];
							$pname=$row['pname'];
							$pdisc=$row['pdisc'];
							$pprice=$row['pprice'];
							$pimg=$row['pimg'];
							$pimg1=$row['pimg1'];
							$pimg2=$row['pimg2'];
							?>
							<div class="hs-wrapper hs-wrapper1">
							<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

							</div>
							<div class="simpleCart_shelfItem">
							<table border="0">

							<tr>
								<td>
									<label>Product Name:</label>
									<?php echo $pname;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Description:</label>
									<?php echo $pdisc;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Price:</label>
									<?php echo $pprice;?>
								</td>
							</tr>

							</table>
							<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
							</div>
							<?php } ?>
							<?php

							mysql_close($db_handle);
							}
						}
					
					get_detail();
							?>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<?php
						
							include('config.php');
							if($db_found)
							{
								$SQL = "SELECT * FROM manage_product where pname='vintage piano'";

							$result = mysql_query($SQL);
							while ($row = mysql_fetch_assoc($result) )
							{
	
							$pid=$row['pid'];
							$pname=$row['pname'];
							$pdisc=$row['pdisc'];
							$pprice=$row['pprice'];
							$pimg=$row['pimg'];
							$pimg1=$row['pimg1'];
							$pimg2=$row['pimg2'];
							?>
							<div class="hs-wrapper hs-wrapper1">
							<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

							</div>
							<div class="simpleCart_shelfItem">
							<table border="0">

							<tr>
								<td>
									<label>Product Name:</label>
									<?php echo $pname;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Discription:</label>
									<?php echo $pdisc;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Price:</label>
									<?php echo $pprice;?>
								</td>
							</tr>

							</table>
							<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
							</div>
							<?php } ?>
							<?php

							mysql_close($db_handle);
							}
							?>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<?php
						
							include('config.php');
							if($db_found)
							{
								$SQL = "SELECT * FROM manage_product where pname='guitar'";

							$result = mysql_query($SQL);
							while ($row = mysql_fetch_assoc($result) )
							{
	
							$pid=$row['pid'];
							$pname=$row['pname'];
							$pdisc=$row['pdisc'];
							$pprice=$row['pprice'];
							$pimg=$row['pimg'];
							$pimg1=$row['pimg1'];
							$pimg2=$row['pimg2'];
							?>
							<div class="hs-wrapper hs-wrapper1">
							<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

							</div>
							<div class="simpleCart_shelfItem">
							<table border="0">

							<tr>
								<td>
									<label>Product Name:</label>
									<?php echo $pname;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Discription:</label>
									<?php echo $pdisc;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Price:</label>
									<?php echo $pprice;?>
								</td>
							</tr>

							</table>
							<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
							</div>
							<?php } ?>
							<?php

							mysql_close($db_handle);
							}
							?>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<?php
							include('config.php');
							if($db_found)
							{
								$SQL = "SELECT * FROM manage_product where pname='electronic drum set'";

							$result = mysql_query($SQL);
							while ($row = mysql_fetch_assoc($result) )
							{
	
							$pid=$row['pid'];
							$pname=$row['pname'];
							$pdisc=$row['pdisc'];
							$pprice=$row['pprice'];
							$pimg=$row['pimg'];
							$pimg1=$row['pimg1'];
							$pimg2=$row['pimg2'];
							?>
							<div class="hs-wrapper hs-wrapper1">
							<img src="admin_new/<?php echo $pimg;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg1;?>" height="200" width="200"></img>
							<img src="admin_new/<?php echo $pimg2;?>"height="200" width="200"></img>

							</div>
							<div class="simpleCart_shelfItem">
							<table border="0">

							<tr>
								<td>
									<label>Product Name:</label>
									<?php echo $pname;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Discription:</label>
									<?php echo $pdisc;?>
								</td>
							</tr>
							<tr>
								<td>
									<label>Product Price:</label>
									<?php echo $pprice;?>
								</td>
							</tr>

							</table>
							<a href="confirm_pay.php?id=<?php echo $row['pid'];?>"><Input type="button" value="checkout" name="ckeckout"></a>
							</div>
							<?php } ?>
							<?php

							mysql_close($db_handle);
							}
							?>
					</div>
				</div>
				
				<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Indian Music Instruments</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/tb1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/tb5.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<!-- //top-brands --> 
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
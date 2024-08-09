<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Aryan Music : online Music instruments selling</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="online music instrument" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
	
</head> 
<body style='background-color:#ffe4e1;'>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<marquee><h4>Welcome to the Aryan Music!</h4></marquee>
									</div>
									<!--<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>-->
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">
						
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<!--<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>-->
									</div>
										<!-- start header_right -->
									<div class="header_right">
										<div class="rgt-bottom">
											<div class="log">
												
											</div>
											
										<h1><font color="red"><b> Update / Delete Category </b></h1>
										<div class="clearfix"> </div>
									</div>
									
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					
				</div>
					<!-- //header-ends -->
				
				<!--content-->
			<div class="content">
<div class="women_main" style='background-color:#fffff0;'>
	<!-- start content -->

<div class="w_content">
<!--update coding-->



<form method="POST">
<?php
if(isset($_POST['add']))
{
	include("config.php");
$cname = $_POST['cat_name'];
		$s="select * from cat_master where cat_name='$cname'";
$res = mysql_query($s);
$count = mysql_num_rows($res);
if($count==0)
{
		$cat_id=$_POST['cat_id'];
		$cat_name=$_POST['cat_name'];
		
		$sql = "update `cat_master` set cat_name='$cat_name' where cat_id='$cat_id';"; 

if(mysql_query($sql)===TRUE)
{
		echo "<h3>Record Updated successfully</h3>";
		header( 'Location: update_delete_cat.php' ) ;
}
else 
{
		echo "Error updating record: " . mysql_error();
}
}
else
{
		echo "<h4><font color='red'><center>Category already exists</center></h4>";
}
mysql_close($db_handle);
}
?>
</form>


<form method="POST">		
<?php
include("config.php");
if(isset($_GET['id']))
{

$id = $_GET['id'];
		
		$sql1="SELECT * from cat_master where cat_id='$id'";
	
$result = mysql_query($sql1);
while($row = mysql_fetch_array($result))
{
	$cat_id = $row['cat_id'];
	$cat_name = $row['cat_name'];
}
mysql_close($db_handle);
}
?>		

<style>
table
{
	background-color:#b22222;
	width:50%;
	color:black;
}
</style>

<center>

<table>

	<tr>
		<td style='color: white;'>
				<label> Category id:</label>
		</td>
		<td>
				<input type='text' name='cat_id' value="<?php if(isset($_GET['id'])) { echo $cat_id;}?>">
			
		</td>
	</tr>
	
	<tr>
		<td style='color: white;'>
				<label>Category name:</label>
		</td>
		<td>
				<input type='text' name='cat_name'  value="<?php if(isset($_GET['id'])) { echo $cat_name;}?>">
		</td>
	</tr>
	
	<tr>
		<td>
				<button type='submit'  class="button button1"name='add' style='height: 50px; width: 150px; left: 250; top: 250;'>Add</button>
		</td>
		<td>
				<button type='clear'  class="button button1"name='clear' style='height: 50px; width: 150px; left: 250; top: 250;'>Cancel</button>
		</td>
		
	</tr>
	
</table>
</center>
</form>
<br/>
<br/>
<!--select query start-->
<style>
table, th, td 
{
    
	border-collapse: collapse;
}
th, td {
    padding: 10px;
}
th 
{
    text-align: left;
}
table 
{
    border-spacing: 3px;
}
table#t01 tr:nth-child(even) 
{
    background-color:#d3d3d3;
}
table#t01 tr:nth-child(odd)
{
    background-color:white;
}
table#t01 th 
{
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
    border: 2px solid #000000;
}

.button1:hover 
{
    background-color:#000000;
    color: white;
}
</style>


<form action="delete_cat.php" method="POST">
<center>
<!--select query coding -->
<script>
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
  {
      return true;
  }
  else
  {
    return false;
  }
}

</script>
<?PHP
include("config.php");
if ($db_found)
{
	$SQL = "SELECT * FROM cat_master order by cat_id desc";
?>
<table id=t01>
	<tr>
		<th>Category id</th>
		<th>Category name</th>
	</tr>

<?php
$result = mysql_query($SQL);
while ( $db_field = mysql_fetch_assoc($result) ) 
{
?>

	<tr>
		<td> 
				<?php print $db_field['cat_id']; ?>
		</td>
		
		<td>
				<?php print $db_field['cat_name']; ?>
		</td>
		
		<td>
				<a href="update_delete_cat.php?id=<?php echo $db_field['cat_id'];?>"><input type='button'  name='update' class="button button1" value='Update' style='height: 50px; width: 150px; left: 250; top: 250;'></a>
		</td>
		
		<td>
				<a href="delete_cat.php?id=<?php echo $db_field['cat_id'];?>"><input type='button' name='delete' class="button button1" Onclick='return ConfirmDelete()'  value='Delete'  style='height: 50px; width: 150px; left: 250; top: 250;'></a>
		</td>
	</tr>

<?php } ?>

</table>

<?php
mysql_close($db_handle);
}
?>

</form>
</div>
</center>			
<!--select query coding over -->







</div>
   <div class="clearfix"></div>
	<!-- end content -->
	
<div class="footer">
					<div class="col-md-3 cust">
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="report.php">Report</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="order_history.php">Order History</a></li>
						</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>Location</h4>
						</div>
						
							<li><i class="add"> </i>B-211,Lane No:4<br/>
													Sethi Nagar,<br/>
													Ujjain,<br/>
													Madhya Pradesh<br/>
													456010.
													</li>
							
							<li><a href="abhijit.composer@gmail.com"><i class="mail"> </i>abhijit.composer@gmail.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<p>© 2018 Musical Instruments Portal| Design by Parmar Mittal</a></p>
			</div>
</div>

</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<h1 style="color:white;">Aryan Music</h1> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >

										 <li id="menu-academico" ><a href="#"> <span> Manage Category</span> </a>
										 <ul id="menu-academico-sub" >
										  <li><a href="add_cat.php">Add Category</a>
										  <li><a href="update_delete_cat.php">Update/Delete category</a></li>
										</ul>
										</li>
										<li id="menu-academico" ><a href="#"> <span> Manage Subcategory</span> </a>
										<ul id="menu-academico-sub" >
											<li><a href="add_subcat.php">Add Subcategory</a></li>
											<li><a href="update_delete_subcat.php">Update/Delete Subcategory</a></li>
										</ul>
										</li>
										</li>
									<li><a href="report.php"><span>Report</span></a></li>
									<li><a href="manage_feedback.php"><span>Manage Feedback</span></a></li>
									<li id="menu-academico-sub"><a href="#"><span>Manage Product</span></a>
									<ul id="menu-academico-sub" >
										  <li><a href="view_product.php">View/Add Product</a></li>
										  <li><a href="update_delete_product.php">Update/Delete Product</a></li>
									</ul>
									</li>
									 <li><a href="academic_info.php"><span>Manage Academic Information</span></a> </li>
									 <li><a href="candidate_data.php"><span>Manage Candidate Data</span></a> </li>
									<li><a href="logout.php"><span>Log out</span></a> </li>
									 
								</ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
		   <script src="js/menu_jquery.js"></script>
</body>
</html>
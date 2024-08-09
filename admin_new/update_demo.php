<form method="POST">
<?php
if(isset($_POST['add']))
{
$user_name = "root";
$password = "";
$database = "insert";
$server= "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found)
{
$cname = $_POST['cat_name'];
		$s="select * from insert_data where cat_name='$cname'";
$res = mysql_query($s);
$count = mysql_num_rows($res);
if($count==0)
{
		$cat_id=$_POST['cat_id'];
		$cat_name=$_POST['cat_name'];
		
		$sql = "update `insert_data` set cat_name='$cat_name' where cat_id='$cat_id';"; 

if(mysql_query($sql)===TRUE)
{
		echo "<h3>Record Updated successfully</h3>";
		//header( 'Location: update_delete_cat.php' ) ;
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
if(isset($_GET['id']))
{
$user_name = "root";
$password = "";
$database = "insert";
$server= "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found)
{
$id = $_GET['id'];
		
		$sql1="SELECT * from insert_data where cat_id='$id'";
	
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
	$SQL = "SELECT * FROM insert_data order by cat_id desc";
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
				<a href="update_demo.php?id=<?php echo $db_field['cat_id'];?>"><input type='button'  name='update' class="button button1" value='Update' style='height: 50px; width: 150px; left: 250; top: 250;'></a>
		</td>
		
		<td>
				<a href="delete.php?id=<?php echo $db_field['cat_id'];?>"><input type='button' name='delete' class="button button1" Onclick='return ConfirmDelete()'  value='Delete'  style='height: 50px; width: 150px; left: 250; top: 250;'></a>
		</td>
	</tr>

<?php } ?>

</table>

<?php
mysql_close($db_handle);
}
?>

</form>
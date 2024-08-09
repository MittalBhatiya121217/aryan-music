<?php
if(isset($_GET['id']))
{
include("config.php");
$id=$_GET['id'];

	$sql = "DELETE FROM `subcat_master` WHERE subcat_id = '$id'"; 

if(mysql_query($sql)===TRUE)
{
    echo "Record deleted successfully";
	header("location:update_delete_subcat.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
	
}
mysql_close($db_handle);
}
?>
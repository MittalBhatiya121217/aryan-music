<?php
if(isset($_GET['id']))
{
include("config.php");
$id=$_GET['id'];

		$sql = "DELETE FROM `cat_master` WHERE cat_id = '$id'"; 

if(mysql_query($sql)===TRUE)
{
    echo "Record deleted successfully";
	header("location:update_delete_cat.php");
} 
else 
{
    echo "Error deleting record: " . mysql_error();
}
mysql_close($db_handle);
}
?>
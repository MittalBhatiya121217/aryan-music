
<?php
if(isset($_GET['id']))
{
include("config.php");
$id=$_GET['id'];
		
		$sql = "DELETE FROM `ads` WHERE pid='$id'"; 

if(mysql_query($sql)===TRUE)
{
    echo "Record deleted successfully";
	header("location:update_delete_product.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
	
}
mysql_close($db_handle);
}
?>

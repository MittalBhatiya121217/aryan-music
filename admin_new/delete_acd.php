<?php
if(isset($_GET['id']))
{
include("config.php");
$sql = "DELETE FROM `acd_info` WHERE acd_id='$id'"; 


if(mysql_query($sql)===TRUE)
{
    echo "Record deleted successfully";
	header("location:academic_info.php");
} 
else 
{
    echo "Error deleting record: " . $conn->error;
	
}
mysql_close($db_handle);
}
?>
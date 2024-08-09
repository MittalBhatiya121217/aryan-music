<?php 
include('config.php');
$pc=$_POST['pc'];
	$sql=" INSERT INTO `order_master`(`pid`,`pname`,`pprice`,`pur_date`,`time`,
	`del_date`,`email`) VALUES ('".$_POST['id']."','".$_POST['pm']."','".$_POST['pc']."',
	'".$_POST['pur_date']."','".$_POST['time']."','".$_POST['del_date']."',
	'".$_POST['email']."')";
$result = mysql_query($sql);
if ($result)
 {
	 echo "New record inserted successfully"; 
	 header("location:https://test.instamojo.com/@enlighteninfosystemss/?amount=$pc");
 }
else
{ 
echo "Error: " . $sql . "<br>" . mysql_error();
}
	
mysql_close($db_handle);
?>
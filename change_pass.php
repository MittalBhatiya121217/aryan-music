<?php
	include("config.php");
	session_start();
if(count($_POST)>0)
{
$result = mysql_query("SELECT *from user_reg WHERE name='" . $_SESSION["name"] . "'");
$row=mysql_fetch_array($result);

if($_POST["old_pass"] == $row["pass"]) 
{
mysql_query("UPDATE user_reg set pass='" . $_POST["new_pass"] . "' WHERE name='" . $_SESSION["name"] . "'");
//echo $query;
$message = "Password Changed";

} 
else $message = "Current Password is not correct";
header("location:index.php");
}


	?>
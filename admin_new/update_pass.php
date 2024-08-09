<?php
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
	$id=$_POST['id'];
	$pass  = $_POST['pass'];
	
	$sql = "update `login` set pass='$pass' where id='$id';"; 


$result = $conn->query($sql);
if ($result === TRUE)
{
    echo "<h3>Record Updated successfully</h3>";
	//header( 'Location: index.php' ) ;
}
else 
{
    echo "Error updating record: " . mysql_error();
}

$conn->close();

?>
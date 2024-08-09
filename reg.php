
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_music";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$con_pass = $_POST['con_pass'];
	
	
	
	$sql = "INSERT INTO user_reg (`name`,`email`,`pass`,`con_pass`)
				VALUES ('$name','$email','$pass','$con_pass')";

/*if ($pass != $con_pass)
{
		echo("Error... Passwords do not match");
		header('location:index.php');
		exit;
}*/
if ($conn->query($sql) === TRUE)
	{
    echo "<br>New record created successfully<br>";
	header("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>

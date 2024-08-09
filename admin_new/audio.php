<html>
<?php
if(isset($_POST['Submit']))
{
include('config.php');
$file_name = $_FILES['audio_file']['name'];
$new_file_name=$_FILES['audio_file']['name'];
$target_path = "uploads/".$new_file_name;

if($_FILES['audio_file']['type']=='audio/mpeg' || $_FILES['audio_file']['type']=='audio/mpeg3' || $_FILES['audio_file']['type']=='audio/x-mpeg3' || $_FILES['audio_file']['type']=='audio/mp3' || $_FILES['audio_file']['type']=='audio/x-wav' || $_FILES['audio_file']['type']=='audio/wav')
{ 
 $new_file_name=$_FILES['audio_file']['name'];

 // Where the file is going to be placed
 
 
 //target path where u want to store file.

  //following function will move uploaded file to audios folder. 
if(move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_path)) 
{
		echo "File uploaded";
}
}
// Create connection
include('config.php');
$servername="localhost";
$username="root";
$password="";
$dbname="admin_music";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$sql = "INSERT INTO `audio`(`audio`) VALUES ('$new_file_name')";
	echo $sql;
$result = $conn->query($sql);
if ($result === TRUE)
 {
	 echo "new recored inserted successfully"; 
 }
else
{ 
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}

 ?>




<form name="audio_form" id="audio_form" action="" method="post" enctype="multipart/form-data">
<fieldset>
<label>Audio File:</label>
<input name="audio_file" id="audio_file" type="file"/>
<input type="submit" name="Submit" id="Submit" value="Submit"/>
</fieldset>
</form>

</html>
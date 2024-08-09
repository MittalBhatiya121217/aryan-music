<?php
    
	include("config.php");
	session_start();
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	
	

	
		$query = mysql_query("SELECT email,pass,name from `user_reg` where email='$email' and pass = '$pass'");
		//echo $query;
		//$result = mysql_query($query);
		$cnt = mysql_num_rows($query);
		
		echo $cnt;
		
	 if ($cnt > 0)
    {
			while($row = mysql_fetch_array($query)){
			$name = $row['name'];
		}
			//echo "welcome!"+$_SESSION['email']; 
			$_SESSION['email']=$email;
			$_SESSION['name']=$name;
			header('location:dhol.php');
    }
    else
    {
			echo "alert('incorrect username/ password please try again.')";
			 
			header('location:index.php');
    }
  
?>




<?php
    
	include("config.php");
	
	$usrname=$_POST['usrname'];
	$pass=$_POST['pass'];

	
	

	
		$query = mysql_query("SELECT usrname,pass from `login` where usrname='$usrname' and pass = '$pass'");
		//echo $query;
		//$result = mysql_query($query);
		$cnt = mysql_num_rows($query);
		
		echo $cnt;
		
	 if ($cnt > 0)
    {
			while($row = mysql_fetch_array($query)){
			$usrname = $row['usrname'];
		}
			//echo "welcome!"+$_SESSION['email']; 
			
			$_SESSION['usrname']=$usrname;
			header('location:add_cat.php');
    }
    else
    {
			//echo "alert('incorrect username/ password please try again.')";
			 
			header('location:index.php');
    }
  
?>




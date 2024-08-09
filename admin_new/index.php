<!doctype html>
<html>

<head>
	<title >Aryan Music</title>

<style>
body
{
	background:url(images/login1.jpg);
	background-size:100%;	
		
		
}


table
 {
    margin-left: auto;
    margin-right: auto;
}
div 
{
	height: 200px;
    width: 400px;
    

    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;
}

</style>
<script>
function ClearFields() 
{

     document.getElementById("usrname").value = "";
     document.getElementById("pass").value = "";
}

</script>
</head>
<div>
<body>
<form action="login.php" method="POST">

			<table>
			<tr>
				<td style='color:white;font-size:20px;'>
					<label>USERNAME:</label>
				</td>
				<td >
					<input type="text" name="usrname"   required="" placeholder="Username" style='width:100%;height:50%;' required=""/>
				</td>
			</tr>
			<tr>
				<td style='color:white;font-size:20px;'>
					<label>PASSWORD:</label>
				</td>
				<td >
					<input type="password"  name="pass" required="" placeholder="Password" style='width:100%;height:50%;'required=""/>
				</td>
			</tr>
			
			<tr>
				<td>
					<input type="submit" name="login" value="Login" style='height: 30px; width: 150px; left: 250; top: 250;background-color:#d3d3d3;color:black;font-size:20px;' />
				</td>
				<td>
					<button type='reset' name='cancel' onclick='ClearFields()' style='height: 30px; width: 150px; left: 250; top: 250;background-color:#d3d3d3;color:black;font-size:20px;'>Cancel</button>
				</td>
			</tr>
			
			
		</table>
		
		</form>
		
	
	


</body>
</html>
</div>
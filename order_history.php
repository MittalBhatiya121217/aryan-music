<?PHP
$user_name = "root";
$password = "";
$database = "admin_music";
$server = "localhost";
session_start();
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
if ($db_found) 
{
$SQL = "SELECT * FROM order_master";
?>
<table id=t01 style='width:100%;'>
	<tr>
		
		<th>Product id</th>
		<th>Product name</th>
		<th>Product price</th>
		<th> purchase date</th>
		<th>delivery date</th>
		
		<th>Email id</th>
		
	</tr>
<?php
$result = mysql_query($SQL);
while ( $db_field = mysql_fetch_assoc($result) )
{
?>
	<tr>
		
		<td>
			<?php print $db_field['pid']; ?>
		</td>
		<td>
			<?php print $db_field['pname'];?>
		</td>
		<td>
			<?php print $db_field['pprice'];?>
		</td>
		<td>
			<?php print $db_field['pur_date'];?>
		</td>
		<td>
			<?php print $db_field['del_date'];?>
		</td>
		
		<td>
			<?php print $db_field['email'];?>
		</td>
		
		
	</tr>

 <?php } ?>

</table>
<?php
mysql_close($db_handle);
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}
?>
</form>
</div>	
<br/>
<br/>
<a href="index.php">Back</a>
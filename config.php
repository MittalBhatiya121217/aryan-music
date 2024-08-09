<?php
$user_name = "root";
$password = "root";
$database = "admin_music";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
?>
<?php // login.php
$db_hostname = 'localhost';
$db_database = 'psms';
$db_username = 'root';
$db_password = '';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

$dbs=mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());



	
?>
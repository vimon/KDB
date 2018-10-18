<?php

include_once 'header.php';

require_once 'dbconnect.php';

$s="select * from user where id='$user'";
$result=mysql_query($s);
echo mysql_error();
$row=mysql_fetch_array($result);
$br=$row['branch'];
?>

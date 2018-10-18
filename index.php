
	<meta charset="utf-8">
	<title>Isd knowledge</title>
    <link rel="shortcut icon" href="Home.png" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
}
.style1 {color: #FF0000}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<head>
<title>Current</title>
<link rel="shortcut icon" href="Home.png" />

<?php
	require_once 'head.php';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<a href="home.php"><h1>Home</h1></a>

 
					<div class="box-content center span20">
                        <fieldset>
                   <span class="style1"></span>     
                   <legend>ISD KNOWLEDGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php">
                   <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','147','height','34','src','button3','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#FFFFFF','movie','button3' ); //end AC code
                        </script>
                   <noscript>
                   <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="147" height="34">
                     <param name="movie" value="button3.swf" />
                     <param name="quality" value="high" />
                     <param name="bgcolor" value="#FFFFFF" />
                     <embed src="button3.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="147" height="34" bgcolor="#FFFFFF"></embed>
                   </object>
                   </noscript>
                   </a></legend>
</div>

<?php 
    include("db.php");  
    $fetc = "SELECT * FROM isd ";
    $result = mysql_query($fetc);
?>

<?php
echo "<table width='1500' border='2' >";
echo "<tr bgcolor='#33FF99'>
<td>Sr.No</td>
<td>Category</td>
<td>Problem</td>
<td>Solution</td>
<td>Engineer Name</td>
<td>Files</td>
</tr>";
while($row1=mysql_fetch_array($result))
{
 $seno=$row1['seno'];
    $name=$row1['sub'];
	$problem=$row1['subcategory'];
	$filename=$row1['file'];
	$des=$row1['des'];
	$ename=$row1['ename'];
	echo "<tr >";
	echo "<td >";
    echo $seno;
	echo "</td>";
	
	echo "<td>";
    echo $name;
	echo "</td>";
	echo "<td>";
    echo $problem;
	echo "</td>";
	echo "<td>";
    echo $des;
	echo "</td>";
	echo "<td>";
    echo $ename;
	echo "</td>";
echo "<td>";?> <a href="<?php echo $filename?>" > <?php echo $filename; echo "</td>";
echo "</tr>";
?>

<?php 
} 
echo "</table>";
?>
</fieldset>
</body>

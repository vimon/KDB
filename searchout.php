<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Result</title>
<link rel="shortcut icon" href="Home.png" />
</head>

<body>
 
<a href="home.php">
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
</a>
<?php 

    include("db.php");
	$topic=$_POST['sub'];  
 	$ename=$_POST['ename'];
    $fetc5 = "SELECT * FROM isd WHERE sub='$topic' OR ename='$ename' ";
    $result5 = mysql_query($fetc5);
?>

<?php
echo "<table width='1500' border='2' >";
echo "<tr bgcolor='#33FF99'>
<td>Sr.No</td>
<td>Categotry</td>
<td>Problem</td>
<td>Solution</td>
<td>Engineer Name</td>
<td>Files</td>
</tr>";
while($row5=mysql_fetch_array($result5))
{
 $seno=$row5['seno'];
    $name=$row5['sub'];
	$filename=$row5['file'];
		$Problem=$row5['subcategory'];
	$des=$row5['des'];
	$ename=$row5['ename'];
	echo "<tr >";
	echo "<td >";
    echo $seno;
	echo "</td>";
	
	echo "<td>";
    echo $name;
	echo "</td>";
	echo "<td>";
    echo $Problem;
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
</html>

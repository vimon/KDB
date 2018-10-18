<title>upload</title>
<link rel="shortcut icon" href="Home.png" />
<?php // login.php
include("db.php"); 
$sub=$_POST['sub'];
  $ename=$_POST['ename'];
  $subcategory=$_POST['subcategory'];
  
$edate=date("Y-m-d");
$des=$_POST['des'];

$target="upload/";
$target=$target.basename($_FILES['uploaded']['name']);
//copy($_FILES['uploaded']['tmp_name'], $target);
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
{
echo "The file  has been uploaded";
}  
else
{ 
echo "Sorry, there was a problem uploading your file."; 
}
 


$query="INSERT INTO isd (seno,sub,subcategory,ename,edate,des,file)
VALUES ('','$sub','$subcategory','$ename','$edate','$des','$target')";
mysql_query($query);
echo mysql_error();
include_once("isdenter.php");

	
?>
<?php
require_once 'header.php';


?>
	<meta charset="utf-8">
	<title>Admission</title>
	<?php
	require_once 'head.php';
	require_once 'php/nav.php';
require_once 'php/fnav.php';
//require_once 'php/fnav.php';
if($loggedin)
{
					
include_once 'php/query.php';

		if($row["type"]=="hod")
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CloudTop</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript">
function check()
{
var x=form1.elements.length;

var i;
var l=document.form1.sph.value.length;
var m=document.form1.gurph.value.length;

var y=0;
for(i=0;i<x;i++)
{
	if(form1.elements[i].value=="")
	{
		alert("Please fill all fields...");
		form1.elements[i].focus();
		y=1;
		return false;
	}
}
if(isNaN(document.form1.adnum.value))
{
	alert("numbers are required");
	document.form1.adnum.focus();
	return false;
}
 else if(isNaN(document.form1.aincome.value))
{
	alert("numbers are required");
	document.form1.aincome.focus();
	return false;
}
else if(document.form1.seid.value.indexOf("@")<0 || document.form1.seid.value.indexOf(".")<document.form1.seid.value.indexOf("@")+2||document.form1.seid.value.indexOf(".")+2>=document.form1.seid.value.length)
{
	alert("enter valid email id");
	document.form1.seid.focus();
	return false;
}
 
 else if(isNaN(document.form1.sph.value))
{
	alert("numbers are required");
	document.form1.sph.focus();
	return false;
}
 else if(isNaN(document.form1.gurph.value))
{
	alert("numbers are required");
	document.form1.gurph.focus();
	return false;
}


else if(l<10)
{
alert("phone number should be 10 characters");
document.form1.sph.focus();
return false;
}
else if(m<10)
{
alert("phone number should be 10 characters");
document.form1.gurph.focus();
return false;
}
else
{
alert("you are successfully registered..!");
return true;
}
}
</script>
</head>
<body>

 
					<div class="box-content center span6">
                        <fieldset>
                        <legend>Admission Form</legend>
						  
						<form class="form-horizontal" id="form1" name="form1" method="post" action="admission.php" onSubmit="return check()" enctype="multipart/form-data">


                         <div class="control-group warning">
								<label class="control-label" for="inputWarning">First Name</label>
								<div class="controls">
								  <input name="fname" type="text" id="fname">
								
								</div>
							  </div>
                         <div class="control-group warning">
								<label class="control-label" for="inputWarning">Last Name</label>
								<div class="controls">
								  <input name="lname" type="text" id="lname">
								 
								</div>
							  </div>
                              
                             <div class="control-group warning">
							  <label class="control-label" for="date01">Date Of Birth</label>
							  <div class="controls">
								<input name="dob" type="text" class="input-xlarge datepicker" id="dob" >
							  </div>
							</div>
                            
                            <div class="control-group warning ">
								<label class="control-label warning">Gender</label>
								<div class="controls left">
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios1"><span class="checked"><input type="radio" name="gender" id="gender" value="Male" checked="" style="opacity: 0;"></span></div>
									Male
								  </label>
								  
								  <label class="radio">
									<div class="radio" id="uniform-optionsRadios2"><span><input type="radio" name="gender" id="gender" value="Female" style="opacity: 0;"></span></div>
									Female
								  </label>
								</div>
							  </div>
                   
                   
                    <div class="control-group warning">
							  <label class="control-label" >Address</label>
							  <div class="controls">
								<textarea name="address" class="autogrow" id="address" style="height: 54px;"></textarea>
							  </div>
							</div>    
                
                <div class="control-group warning">
							  <label class="control-label" for="fileInput">Upload photo</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput">
								  <input name="photo" type="file" class="input-file uniform_on" id="photo" style="opacity: 0;" size="19" />
							    <span class="filename">No file selected</span><span class="action">Choose File</span></div>
				  </div>
						</div>
                                        
                                   
                  <div class="control-group warning">
								<label class="control-label" for="inputWarning">Student phone number</label>
								<div class="controls">
								  <input name="sph" type="text" id="sph">
								 
								</div>
							  </div>      
                  <div class="control-group warning">
								<label class="control-label" for="inputWarning">Student Email Id</label>
								<div class="controls">
								  <input name="seid" type="text" id="seid"><br />
								 <span> Enter username@expale.com</span>

								 
								</div>
							  </div>      
                              
                              
                              
                              <div class="control-group warning">
								<label class="control-label" for="inputWarning">Gurdian Name</label>
								<div class="controls">
								  <input name="gurname" type="text" id="gname">
                                  
                                  
								 
								</div>
							  </div>   
                              
                              
                              
                              <div class="control-group warning">
								<label class="control-label" for="inputWarning">Gurdian Phone number</label>
								<div class="controls">
								  <input name="gurph" type="text" id="gurph">
                                  
                                  
								 
								</div>
							  </div>   
                              
                              
                              <div class="control-group warning">
								<label class="control-label" for="selectError3">Category</label>
								<div class="controls">
								  <select name="category" id="category">
                                  <option value="">--select--</option>
									<option>General</option>
									<option>OBC</option>
									<option>OEC</option>
									
								  </select>
								</div>
							  </div>  
                              
                              
                                  <div class="control-group warning">
								<label class="control-label" for="selectError3">Caste</label>
								<div class="controls">
								  <select name="caste" id="Caste">
                                    <option value="">--select--</option>
									<option>Christian</option>
									<option>Hindu</option>
									<option>Muslim</option>
									
								  </select>
                                  </div>
                                  </div>
                                  
                                 <div class="control-group warning">
								<label class="control-label" for="selectError3">Religion
                                  </label>
								<div class="controls">
							      
                                  
                                  <select name="religion" id="relegion">
                                    <option value="">--select--</option>
									<option>relegion</option>
									<option>cxbvxcb</option>
									<option>xcvxcv</option>
									
								  </select>
                                  
                                  
								</div>
							  </div> 
                              
                          
                        <div class="control-group warning">
								<label class="control-label" for="selectError3">District </label>
								<div class="controls">
								  <p>
								    <select name="dist" id="dist" style="width:auto">
								      <option value="">--select--</option>
								      <option>Alappuzha</option>
                                      <option>Edukki</option>
								      <option>Eranakulam</option>
								      <option>Kazargoad</option>
								      <option>Kollam</option>
								      <option>Kottayam</option>
								      <option>Kozhikkod</option>
								      <option>Kannoor</option>
								      <option>Malappuram</option>
								      <option>Pathanamthitta</option>
								      <option>Palakkad</option>
								      <option>Thrissur</option>
								      <option>Tiruvanadapuram</option>
								      <option>Vayanad</option>
								      </select>
							      
 					</div>
						  </div>
                                  
                            
                    <div class="control-group warning">
							  <label class="control-label" >Notes</label>
							  <div class="controls">
								<textarea name="note" class="Note" id="note" style="height: 54px;">Enter Notes ..</textarea>
							  </div>
							</div> 
                            
                            
                            <div class="control-group warning">
								<label class="control-label">Qualification</label>
								<div class="controls">
								  <label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox1"><span><input name="quali" type="checkbox" id="inlineCheckbox1" style="opacity: 0;" value="option1">
									</span></div> SSLC
								  </label>
								  <label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox2"><span><input name="quali" type="checkbox" id="inlineCheckbox2" style="opacity: 0;" value="option2">
									</span></div> THSLC
								  </label>
								  <label class="checkbox inline">
									<div class="checker" id="uniform-inlineCheckbox3"><span><input name="quali" type="checkbox" id="inlineCheckbox3" style="opacity: 0;" value="option3">
									</span></div> VHSE
								  </label>
								</div>
							  </div> 
                              
                               <div class="control-group warning">
								<label class="control-label" for="inputWarning">Anual Income</label>
								<div class="controls">
								  <input name="aincome" type="text" id="aincome">
								 
								</div>
							  </div>
                              
                           <div class="control-group warning">
								<label class="control-label" for="inputWarning">Admission Number</label>
								<div class="controls">
								  <input name="adnum" type="text" id="adnum">
								 
								</div>
							  </div>
                                     
                                   
                              <div class="control-group warning">
								<label class="control-label" for="selectError3">Branch</label>
								<div class="controls">
								  <p>
								    <select name="branch" id="Branch">
								      <option value="">--select--</option>
								      <option>CT</option>
								      <option>TD</option>
								      <option>EC</option>
							        </select>
							      
 					</div>
						  </div>
                               <input name="b1" type="submit" value="Register" style="background-color:#66CCFF; color:#FFFFFF"/>
							  <input name="b2" type="reset" value="Reset" style="background-color: #66CCFF; color:#FFFFFF" />
                         </fieldset>        
                         
                         
						</form>   

					</div>
				

 <?php
 
if(isset($_REQUEST["b1"]))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$d = $_POST['dob'];
 $r1 = str_split($d);
  
 $r2[0]=$r1[6];
 $r2[1]=$r1[7];
 $r2[2]=$r1[8];
 $r2[3]=$r1[9];
 $r2[4]="-";
 $r2[5]=$r1[3];
 $r2[6]=$r1[4];
 $r2[7]="-";
 $r2[8]=$r1[0];
 $r2[9]=$r1[1];
 $date="";
for($k=0;$k<10;$k++)
{			
$date=$date.$r2[$k];
}


$gender = $_POST['gender'];
$address=$_POST['address'];
$seid=$_POST['seid'];
$gurname = $_POST['gurname'];
$category = $_POST['category'];
$caste = $_POST['caste'];
$religion= $_POST['religion'];
$dist= $_POST['dist'];


if(isset($_POST["photo"]))
$photo=$_POST["photo"];
//echo "<br>$photo";
$pth=$_FILES["photo"];
$photo=$pth["name"];
$src=$pth["tmp_name"];
$target="photos/".$photo;
copy($src,$target);
$data["photo"]=$photo;
	
$note = $_POST['note'];
$quali = $_POST['quali'];
$branch= $_POST['branch'];
$sem="1";
$adnum = $_POST['adnum'];
$aincome= $_POST['aincome'];
 
$sph=$_POST['sph'];
$gurph = $_POST['gurph'];

$query="insert into admission values('$fname','$lname','$date','$gender','$address','$seid','$gurname','$category','$caste','$religion','$dist','$photo','$note','$quali','$branch','$sem','$adnum','$aincome', '$sph','$gurph')";
$out=mysql_query($query);

$rollno="0";
$name=$fname.' '.$lname;
$reg="0";

$q="insert into stud values('$reg','$adnum','$name','$branch','$rollno','$sem')";
$out=mysql_query($q);
if($out)
{
echo '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> Success Fully Admitted.
						</div>';

}
else
{
echo '<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Error!</strong> There is an error in admission.<br />Check fields are corrected!.
						</div>';
}


}
?>
<?php
}
else
{
require_once 'php/error.php';
}
	
}
else
{
require_once 'php/error.php';
}

require_once 'body.php';
?>


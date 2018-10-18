<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>
<style type="text/css">
<!--
body {
	margin-left: 500px;
	margin-top: 100px;
	margin-right: 500px;
	margin-bottom: 100px;
}
body,td,th {
	font-family: Times New Roman, Times, serif;
	font-weight: bold;
}
-->
</style>

<script language="javascript" type="text/javascript">
 function dropdownlist(listindex)
 {
 
document.formname.subcat.options.length = 0;
 switch (listindex)
 {
 
 case "Desktop" :
 document.formname.subcat.options[0]=new Option("Select Sub-Category","");
 document.formname.subcat.options[1]=new Option("System Slow","System Slow");
 document.formname.subcat.options[2]=new Option("No Display","No Display");
 document.formname.subcat.options[3]=new Option("other softwares","other softwares");
 document.formname.subcat.options[4]=new Option("MS office","MS office");
 document.formname.subcat.options[5]=new Option("IDB","IDB");
 
 break;
 
 case "Printer" :
 document.formname.subcat.options[0]=new Option("Select Sub-Category","");
 document.formname.subcat.options[1]=new Option("Papper jam","Papper jam");
 document.formname.subcat.options[2]=new Option("Not printing","Not printing");
 document.formname.subcat.options[3]=new Option("Scanning issue","Scanning issue");
 document.formname.subcat.options[4]=new Option("Error messages","Error messages");
 document.formname.subcat.options[5]=new Option("network printer","network printer");
 
 break;
 
 case "AD" :
 document.formname.subcat.options[0]=new Option("Select Sub-Category","");
 document.formname.subcat.options[1]=new Option("Password issue","Password issue");
 document.formname.subcat.options[2]=new Option("Usb acess","Usb acess");
 document.formname.subcat.options[3]=new Option("trusted relation ship","trusted relation ship");
 document.formname.subcat.options[4]=new Option("Antivirus","Antivirus");
 document.formname.subcat.options[5]=new Option("permission","permission");
 
 break;
 
 }
 return true;
 }
 </script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>

<form id="formname" name="formname" method="post" action="searchout.php"> 

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
<br />
<br />
<br />
<table>
<tr>
<a href="home.php"><h1> Home</h1></a>
</tr>
<tr>
<td>
  <label> <h3>Topic:</h3>   
  </td>
  <td> <select name="sub" id="sub" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                    
                                    <option value="">---select---</option>
                                    <option value="Desktop">Desktop</option>
                                    <option value="Printer">Printer</option>
                                    <option value="AD">AD</option>
                                    <option value="Mcafee">Mcafee</option>
                                    <option value="Softwares">Softwares</option>
                                    <option value="Others">Others</option>
                                   </select>
                                   </td>
  <br />
<br />
</tr>
 <tr>
 <td>
  <label><h3>Engineer Name </h3>
  </td>
  <td>
    <select name="ename" id="ename">
  <option value="">---select---</option>
<option value="VIMON PV">VIMON PV</option>
<option value="VISHAK P">VISHAK P</option>
<option value="BAHUL VISHNU">BAHUL VISHNU</option>
<option value="RAJKUMAR">RAJKUMAR</option>
<option value="SANTHOSH">SANTHOSH</option>
                              <option value="SACHIN">SACHIN</option>
                              <option value="SANJAY">SANJAY</option>
                              <option value="MAKRAND">MAKRAND</option>
                              <option value="GANESH">GANESH</option>
                              <option value="ROANE SEBASTION">ROANE SEBASTION</option>
                              <option value="ASMITH">ASMITH</option>
                              <option value="DARSAN">DARSAN</option>
                              <option value="OTHERS">OTHERS</option>
  </select>
  </td>
  </tr>
  </table>
  <br>
  <br>
  </label>
    <h1>
      <input name="b1" type="submit" value="Search" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px"/>
      <input name="b2" type="reset" value="Reset" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px" / >
    
</h1>
</form>
</body>
</html>

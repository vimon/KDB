<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Knowledge Add</title>
    <link rel="shortcut icon" href="Home.png" />
</head>
    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>
    <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<head>
 
<?php
require_once 'head.php';
?>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 
  <link rel="shortcut icon" href="jy.png" />

<style>
    body {
        margin: 0px;
         
    }

    #contento:-webkit-full-screen {
        width: 100%;
        height: 100%;
    }

    #contento:-moz-full-screen {
        width: 100%;
        height: 100%;
    }
</style>
<script type="text/javascript">
    function goFullscreen(id) {
        // Get the element that we want to take into fullscreen mode
        var element = document.getElementById(id);

        // These function will not exist in the browsers that don't support fullscreen mode yet,
        // so we'll have to check to see if they're available before calling them.

        if (element.mozRequestFullScreen) {
            // This is how to go into fullscren mode in Firefox
            // Note the "moz" prefix, which is short for Mozilla.
            element.mozRequestFullScreen();
        } else if (element.webkitRequestFullScreen) {
            // This is how to go into fullscreen mode in Chrome and Safari
            // Both of those browsers are based on the Webkit project, hence the same prefix.
            element.webkitRequestFullScreen();
        }
        // Hooray, now we're in fullscreen mode!
    }
</script>
<script type="text/javascript">
function check()
{
 
var y=0;
 if(document.formname.sub.value=="")
	{
		alert("Please fill all fields...");
		document.formname.sub.focus();
		y=1;
		return false;
	}
	else if(document.formname.subcategory.value=="")
	{
		alert("Please fill all fields...");
		document.formname.subcategory.focus();
		y=1;
		return false;
	}
	else if(document.formname.ename.value=="")
	{
		alert("Please fill all fields...");
		document.formname.ename.focus();
		y=1;
		return false;
	}
	else if(document.formname.des.value=="")
	{
		alert("Please fill all fields...");
		document.formname.des.focus();
		y=1;
		return false;
	}
	else if(document.formname.uploaded.value=="")
	{
		alert("Please fill all fields...");
		document.formname.uploaded.focus();
		y=1;
		return false;
	}
	
	else
{
alert("You are Successfully Entered..!");
return true;
}
 
		

}
 

</script>

<script type="text/javascript">
function exitFullscreen(id) {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}
</script>
 </head>
<body id="contento" >
<br>
<a href="home.php"><h3> &nbsp;&nbsp;&nbsp;Home</h3></a><a href="search.php"><h3> &nbsp;&nbsp;&nbsp;Search</h3></a>   
 
					<div class="box-content center span5">
                        <fieldset>
                        <legend>Entry Form 
                        <br>
                            <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','147','height','34','src','button3','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#FFFFFF','movie','button3' ); //end AC code
                        </script>
                        <noscript>
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="147" height="34">
                          <param name="movie" value="button3.swf">
                          <param name="quality" value="high">
                          <param name="bgcolor" value="#FFFFFF">
                          <embed src="button3.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="147" height="34" bgcolor="#FFFFFF"></embed>
                        </object>
                        </noscript>
                        </legend>
                         
                        
						   
<form class="form-horizontal" id="formname" name="formname" method="post" action="upload.php" onSubmit="return check()" enctype="multipart/form-data">


                         
                              <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Category :</h3></label>
                               
								<div class="controls">
                                
                                  <select name="sub" id="sub" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                   <option value="">---select---</option>
                                    <option value="Desktop">Desktop</option>
                                    <option value="Printer">Printer</option>
                                    <option value="AD">AD</option>
                                    <option value="Mcafee">Mcafee</option>
                                    <option value="Softwares">Softwares</option>
                                    <option value="Others">Others</option>
                                   </select>
                           </div>
                          </div>
                          
                          <div class="control-group warning">
								<label class="control-label" for="selectError3"><h3>Problem :</h3></label>
                               
								 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                 <textarea name="subcategory" cols="100"></textarea>
                           
                          </div>
                              
<div class="control-group warning">
								<label class="control-label" for="inputWarning"><h3>Engineer Name</h3></label>
						  <div class="controls">
						    <select name="ename" id="ename" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);" >
                              <option value="" selected>---select---</option>
                              <option>VIMON PV</option>
                              <option>VISAKH P</option>
                              <option>BAHUL VISHNU</option>
                              <option>RAJKUMAR</option>
                              <option>SANTHOSH</option>
                              <option>SACHIN</option>
                              <option>SANJAY</option>
                              <option>MAKRAND</option>
                              <option>GANESH</option>
                              <option>ROANE SEBASTION</option>
                              <option>ASMITH</option>
                              <option>DARSAN</option>
                              <option>OTHERS</option>
                            </select>
						  </div>
    </div>
                              
                              
              
                   
                    <div class="control-group warning">
							  <label class="control-label" ><h3>Description</h3></label>
							  <div class="controls">
							    <label>
							    <textarea name="des" id="des" cols="45" rows="5"></textarea>
							    </label>
							  </div>
					   </div>    
                
                <div class="control-group warning">
							  <label class="control-label" for="fileInput"><h3>Upload photo</h3></label>
							  <div class="controls">
								 
								  <input name="uploaded" type="file" />
							    
                                 
				  </div>
						</div>
                                        
                                        
                                  <div class="control-group warning">
                                    <p>
                                      <input name="b1" type="submit" value="Register" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px"/>
                                      <input name="b2" type="reset" value="Reset" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px" / ></p>
                                      
                                      </div>
                            
                      

                      
               
                          <button onClick="goFullscreen('contento'); return false">Fullscreen 
    </button>
    <button onClick="exitFullscreen('contento'); return false">
      Exit FulScreen 
    </button>
                         
						</form>   
</fieldset>
					</div>
			
                </body>
                </html>
                
             
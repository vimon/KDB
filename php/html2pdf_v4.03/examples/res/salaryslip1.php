<?php
$content = 'A Test overflow<br>A Test overflow<br>A Test overflow<br>
<img src="./res/logo.gif" alt="logo" style="width: XXXmm"><br>
B Test overflow<br>B Test overflow<br>B Test overflow<br>
<img src="./res/logo.gif" alt="logo" style="width: XXXmm"><br>
C Test overflow<br>C Test overflow<br>C Test overflow<br>';
?>
<style type="text/css">
<!--
div.zone
{
    border: solid 2mm #66AACC;
    border-radius: 3mm;
    padding: 1mm;
    background-color: #FFEEEE;
    color: #440000;
}
div.zone_over
{
    width: 30mm;
    height: 35mm;
    overflow: hidden;
}

-->
</style>
<page style="font-size: 10pt">

 <?php
 
 $cn=mysql_connect("localhost","root","");
mysql_select_db("kkmpoly");
$q="select * from registration where username='merint'";
$res=mysql_query($q);
$r=mysql_fetch_array($res); 

?>

<table width="394" height="35" border="1" cellpadding="0" cellspacing="0" bordercolor="#030303">
 <tr>
    <td width="43" height="46">Month</td>
    <td width="154">
      <label>
       <select name="m5">
	   <option value="january">January</option>
	   <option value="february">February</option>
	   <option value="march">March</option>
	   <option value="April">April</option>
	   <option value="may">May</option>
	   <option value="June">June</option>
	   <option value="July"> July</option>
	   <option value="August">August</option>
	   <option value="September">September</option>
	   <option value="October">October</option>
	   <option value="November">November</option>
	   <option value="December">December</option>
	   </select>
        </label>   </td>
    <td width="32">Year</td>
    <td width="135">
      <label></label><label>
	  <?php
$date=getdate();
$year=$date['year'];
    echo"  <input type='text' name='m8' value='$year'>";
	?>
        </label></td>
  </tr>
</table>
 
   <p>&nbsp;</p>
   <p>Department:<?php echo $r[11]; ?></p>
   <p> Name:<?php echo $r[2]; ?></p>
   <label>
     <input type="submit" name="Submit" value="Proceed" />
   </label>
 

 <?php
  
$cn=mysql_connect("localhost","root","");
mysql_select_db("kkmpoly");
$month='january';
$year='2013';

 $qry="select * from salaryslip2 where username='merint' and month='$month' and year='$year'";
 $res=mysql_query($qry);
   $r=mysql_fetch_array($res);
$q=mysql_query($qry);
echo "
  
 <table  border='1' cellpadding='0' cellspacing='0' bordercolor='#030303'>
   <tr>
     <td>Earnings</td>
     <td>Amt.payable</td>
     <td>Deductions</td>
	 <td>Amount</td>
   </tr>";
  
   
   
   echo "<tr><td>".$r[2]."</td><td>".$r[3]."</td><td>".$r[4]."</td><td>".$r[6]." </td></tr>";

echo "<tr><td colspan=4><input name='s22' type='submit' value='print'></td></tr>"; 

 
?>

</table>

</page>
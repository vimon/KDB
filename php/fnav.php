
        <link rel="stylesheet" href="style.css" type="text/css" charset="utf-8"/>
        <script type="text/javascript" src="jquery-1.3.2.js"></script>
   
        <?php
if($loggedin)
{
		$s="select type from user where id='$user'";
$result=mysql_query($s);
echo mysql_error();
$row=mysql_fetch_array($result);

		include_once 'query.php';
		if($row["type"]=="hod")
{
?>

<ul id="fnavigation">
            <li class="rssfeed"><a href="../final/student.php" ><button class="btn btn-large btn-info" style="height: 70px; width: 100px;" >STUDENT MS</button></a></li>
            <li class="home"><a href="../final/tutorms.php" ><button class="btn btn-large btn-danger" style="height: 70px; width: 100px; width: 100px;" >TUTORS MS</button></a></li>
            <li class="about"><a href="../final/event.php" ><button class="btn btn-large btn-warning" style="height: 70px; width: 100px; " >Create Event</button></a></li>
            <li class="search"><a href="../final/mark.php" ><button class="btn btn-large" style="height: 70px; width: 100px; width: 100px;" >Marks</button></a></li>
            <li class="photos"><a href="../final/timetable.php?sem=1" ><button class="btn btn-large btn-primary" style="height: 70px; width: 100px;" >Timetable</button></a></li>
            <li class="rssfeed"><a href="../final/addreg.php?sem=1" ><button class="btn btn-large btn-info" style="height: 70px; width: 100px;" >Add REG</button></a></li>
            <li class="podcasts"><a href="../final/php/html2pdf_v4.03/examples/tcr.php" ><button class="btn btn-large btn-success" style="height: 70px; width: 100px;" >Transfer Certificate</button></a></li>
             <li class="podcasts"><a href="../final/php/html2pdf_v4.03/examples/conr.php" ><button class="btn btn-large btn-success" style="height: 70px; width: 100px;" >Conduct Certificate</button></a></li>
              <li class="photos"><a href="../final/tc.php" ><button class="btn btn-large btn-primary" style="height: 70px; width: 100px;" >Tc form </button></a></li>
            
       
        </ul>

        

<?php

}
else if($row["type"]=="staff")
{
?>
<ul id="fnavigation">
            
            <li class="home"><a href="../final/mark.php" ><button class="btn btn-large btn-danger" style="height: 70px; width: 100px;" >Marks        </button></a></li>
            <li class="about"><a href="../final/event.php" ><button class="btn btn-large btn-warning" style="height: 70px; width: 100px;" >Create Event</button></a></li>
            <li class="search"><a href="../final/attend.php" ><button class="btn btn-large" style="height: 70px; width: 100px;" >Attendence</button></a></li>
            <li class="photos"><a href="../final/cportion.php" ><button class="btn btn-large btn-primary" style="height: 70px; width: 100px;" >Covered Portion</button></a></li>
            <li class="rssfeed"><a href="" ><button class="btn btn-large btn-info" style="height: 70px; width: 100px;" >Time table</button></a></li>
            <li class="podcasts"><a href="" ><button class="btn btn-large btn-success" style="height: 70px; width: 100px;" >Large button</button></a></li>
            <li class="contact"><a href="" ><button class="btn btn-large btn-danger" style="height: 70px; width: 100px;" >Large button</button></a></li>
       
        </ul>


<?php

}
else if($row["type"]=="student")
{
?>
<ul id="fnavigation">
            
            <li class="home"><a href="../final/actionlogin.php" ><button class="btn btn-large btn-danger" style="height: 70px; width: 100px;" >MY PROFILE</button></a></li>
            <li class="about"><a href="../final/cinbox.php" ><button class="btn btn-large btn-warning" style="height: 70px; width: 100px;" >Covered Portion</button></a></li>
            <li class="search"><a href="../final/eventinbox.php" ><button class="btn btn-large" style="height: 70px; width: 100px;" >Events</button></a></li>
           
            <li class="rssfeed"><a href="../final/msginbox.php" ><button class="btn btn-large btn-info" style="height: 70px; width: 100px;" >Notifications</button></a></li>
            <li class="podcasts"><a href="" ><button class="btn btn-large btn-success" style="height: 70px; width: 100px;" >Large button</button></a></li>
            <li class="contact"><a href="" ><button class="btn btn-large btn-danger" style="height: 70px; width: 100px;" >Large button</button></a></li>
       
        </ul>
<?php


}
else if($row["type"]=="parent")
{
?>

<?php
}
}
?>
        
        <script type="text/javascript">
            $(function() {
                $('#fnavigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#fnavigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>

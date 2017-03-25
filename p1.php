<?php
   /* date_default_timezone_set("Indian/Mauritius");
     $deadline=date("2015-04-22 02:43:00pm");
     $todays_date = date("Y-m-d h:i:sa");
$today = strtotime($todays_date);
$expiration_date = strtotime($deadline);
$timeDiff = abs($expiration_date-$today);
$num_day = $timeDiff/86400; // 1day = 86400 sec
$num_of_days = intval($num_day);
if ($expiration_date > $today) {
 // echo "<meta http-equiv='refresh' content='1;URL=subadmin_task.php'>"; //deadline is past user can't access 
echo "Still you will have&nbsp&nbsp"."$num_of_days"."&nbsp&nbspdays";
    } 
    else { 
  //echo "<meta http-equiv='refresh' content='1;URL=closed.php'>"; //deadline is past user can't access 
  header("location:dead.php");
    } 
	*/


$startdate = (date("Y-m-d h:i:sa"));
$enddate = (date("2015-04-12 03:44:00pm"));

if (strtotime($enddate)<strtotime($startdate ))
{
	header('Location:dead.php');
}
else 
{
	header('location:page.html');
}
?>
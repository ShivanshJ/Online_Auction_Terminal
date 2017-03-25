<?php
$operation=$_GET['val'];
$s="localhost";
$u="root";
$p="";
$conn=mysqli_connect($s,$u,$p) or die("unable to connect".mysqli_error());
mysqli_select_db($conn,"project");
$a=$_POST['username'];
$b=$_POST['mobno'];
$c=$_POST['email'];
$d=$_POST['query'];
if($operation==sig)
{
$sql="insert into message(username,mobno,email,query) values('$a','$b','$c','$d')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "Your query has been submitted. Your response will be sent shortly.";

}
else
{

echo "something went wrong!! please try again";

}
}


?>
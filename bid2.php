<?php
$operation=$_GET['val'];
$s="localhost";
$u="root";
$p="";
$var=mysqli_connect($s,$u,$p) or die("unable to connect".mysqli_error());
mysqli_select_db($var,"project");

$q1="CREATE TABLE project2(name varchar(10) , mobno varchar(11), email VARCHAR(30) PRIMARY KEY , bidd int(6) )";
mysqli_query($var,$q1);

if($operation=='sig')
{
$sql="insert into project2(name,mobno,email,bidd) values('".$_POST['name']."','".($_POST['mobno'])."','".$_POST['email']."','".$_POST['bidd']."')";
$result=mysqli_query($var,$sql);

if($result)
{
echo"your bid has been submitted. thank you for bidding";

}
else
{

echo"somthing wrong!! please try again";

}
}


?>
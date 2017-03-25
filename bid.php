<?php

$operation=$_GET['val'];
$s="localhost";
$u="root";
$p="";
mysql_connect($s,$u,$p) or die("unable to connect".mysql_error());

mysql_select_db("projcte");
if($operation=='sig')
{
$sql="insert into project1(name,mobno,email,bidd) values('".$_POST['name']."','".($_POST['mobno'])."','".$_POST['email']."','".$_POST['bidd']."')";
$result=mysql_query($sql);
if($result)
{
echo"your bid has been submitted. thank you for bidding";

}
else
{

echo"something wrong!! please try again";

}
}
?>
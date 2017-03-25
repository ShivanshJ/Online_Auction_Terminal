<?php
session_start();
//$opr=$_GET['var'];                                                                                      why has "$opr" been commented out?
$s="localhost";
$u="root";
$p="";

$connect=mysqli_connect($s,$u,$p) or die("unable to connect".mysqli_error());
mysqli_select_db($connect,"project");

//if($opr=='log')
//{
$username=mysqli_real_escape_string($connect,$_POST['username']);
$password=($_POST['passid']);
$sql="select * from usera where username='$username' AND passid='$password'";
$result=mysqli_query($connect,$sql) or die(mysqli_error($connect));
//array($username,$password));
  
  if( mysqli_num_rows($result)> 0 )
   {
   $_SESSION['log_in']=true;
   $fetch=mysqli_fetch_row($result);
   
   $_SESSION['username']=$fetch['username'];
   $_SESSION['email']=$fetch['email'];
  
   
   header("location:om.php");
   }
   else
   {
   echo "wrong username and password";
    
   }
//}
?>   


 
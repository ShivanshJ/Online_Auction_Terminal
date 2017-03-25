<?php
$opr=$_GET['val'];
$s="localhost";
$u="root";
$p="";

$connect=mysqli_connect($s,$u,$p) or die("unable to connect".mysqli_error());
mysqli_select_db($connect,"project");

if($opr=='log')
{
$username=mysqli_real_escape_string($connect,$_POST['username']);
$password=sha1($_POST['passid']);

$sql="select * from user where email='$username' ";

$result=mysqli_query($connect,$sql);
//array($username,$password));
  
  if( mysqli_num_rows($result) != 0 )
   { echo "Sab";
   $_SESSION['log_in']=true;
   $fetch=mysqli_fetch_row($result);
	session_start();
   $_SESSION['username']=$fetch['username'];
   $_SESSION['email']=$fetch['email'];
   $_SESSION['id']=session_id();
   
   header("location:h.php");
   }
   else
   {
   echo "wrong username or password";
    

   }
 
}
?>   


 
<?php

$operation=$_GET['val'];
$s="localhost";
$u="root";
$p="";

$con = mysqli_connect($s,$u,$p);
/*
$sql = "CREATE DATABASE project";

if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}

*/
mysqli_select_db( $con, "project")   or die("unable to connect".mysqli_error() );

$q1="CREATE TABLE user(username varchar(10) PRIMARY KEY, 
    passid varchar(30), address varchar(30), country VARCHAR(30) NOT NULL, zip int(6), email VARCHAR(50), gen varchar(6) )";

mysqli_query($con,  $q1 );

if($operation=='sig')
{
$sql="insert into user(username,passid,address,country,zip,email,gen) values('".$_POST['username']."','".sha1($_POST['passid'])."','".$_POST['address']."','".$_POST['country']."','".$_POST['zip']."','".$_POST['email']."','".$_POST['gen']."')";
$result=mysqli_query($con, $sql);



/*$lastinsertid = mysqli_insert_id($con);
	if($lastinsertid > 0)
	{
		
	   $imageFile = $_FILES['file']['name'];
	   $tempPath = $_FILES['file']['tmp_name'];
	   $imageType = $_FILES['file']['type'];
	   if($imageType!='')
	   {
		 $image_arr = explode("/",$imageType);
		 $image = $lastinsertid.".".$image_arr[1];  
		}
		$uploadPath = "uploads/user_data/".$image;
		move_uploaded_file($tempPath,$uploadPath);
		$sSQL = "UPDATE `projcte`.`register` SET `user_pic` = '$image' WHERE `register`.`id` ='$lastinsertid'";	
		$result1 = mysqli_query($con, $sSQL);
	}*/



	
if($result)
{
echo"record inserted";
header('Location:login.htm');
}
else
{

echo"something went wrong";

}
}


?>

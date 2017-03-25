<?php
if(!empty($_POST['send mail']))
{
	require_once ('Mail.php');
	$type="text\html";
	$from="prachi.shri16.com";
	$to="prachi.shridhar16@gmail.com";
	$subject="Received";
	$body="hehe";
	
	$host="ssl://smtp.gmail.com";
	$port="587";
	$username="prachi.shri16@gmail.com";
	$password="prachi1234";
	$headers=array('Content-type'=>$type,'From'=>$from,'To'=>$to,'Subject'=>$subject,'Body'=>$body);
	$smtp=@Mail::factory('smtp',array('host'=>$host,'port'=>port,'auth'=>true,'username'=>$username,'password'=>$password));	
	$mail=@$smtp->send($to,$headers,$body);
	
	if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
}
?>
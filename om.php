<html>
<body>
<div style=margin-left:250px ; margin-top:500px">
</br><!--</br></br></br></br></br></br></br></br></br>-->
<?php

$s="localhost";
$u="root";
$p="";

$conn=mysqli_connect($s,$u,$p) or die("unable to connect".mysqli_error());
mysqli_select_db($conn,"project");

echo "<strong><u>QUERIES:</u></strong><br><br>";

$sql = "SELECT email,query FROM message";
$retval = mysqli_query( $conn , $sql);
if(! $retval )
{
  die('Could not retrieve query: ' . mysqli_error($conn ));
}
while($row = mysqli_fetch_array($retval))
{
    echo "Email :{$row['email']}  <br> ".
         "Query : {$row['query']} <br><br	> ".
         "<input type='submit' name='send' value='Respond to query.'><br	>".
		 "--------------------------------<br>";
} 

echo /*"Fetched data successfully".*/
      " <br><br>";

echo "<u><strong>BIDS:</strong></u><br><br	>";
$sql1="select name,email,bidd from project1 where bidd=(select min(bidd) from project1)"; 
$sql1="select * from project2";
$sql2="select * from project2 where bidd=(select min(bidd) from project2)" ;

/*$result1=mysqli_query($conn,$sql1) ;*/
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);

/* $num=mysqli_num_rows($result1); 
echo $num1;
$i=0;
while ($i < $num) 
{
	$a=mysqli_result($result1,$i,"name");
	$b=mysqli_result($result1,$i,"email");
	$c=mysqli_result($result1,$i,"bidd");
	$i++;
}

echo "<b>Details of bidder selected for project 1</b></br>";
echo "<b>Name: </b>".$a."</br><b>E-mail: </b>".$b."</br><b>bid: </b>".$c;


echo "<body bgcolor='#CCCC33' ></br></br>";
echo "<input type='submit' value='send mail to bidder1'>";
echo "</br></br>";

if(!empty($_POST['send mail to bidder1']))
{
	require_once ('Mail.php');
	$type="text\html";
	$from="sabhijiit@gmail.com";
	$to="$b";
	$subject="Received";
	$body="Congratulations!! your bid has been selected";
	
	$host="ssl://smtp.gmail.com";
	$port="465";
	$username="sabhijiit@gmail.com";
	$password="";
	$headers=array('Content-type'=>$type,'From'=>$from,'To'=>$to,'Subject'=>$subject,'Body'=>$body);
	$smtp=@Mail::factory('smtp',array('host'=>$host,'port'=>port,'auth'=>true,'username'=>$username,'password'=>$password));	
	$mail=@$smtp->send($to,$headers,$body);
	
	if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
} */

$num1=mysqli_num_rows($result1);
$num2=mysqli_num_rows($result2);

while($res=mysqli_fetch_row($result1))
{
	echo "<b>Details of bidder selected for project 2</b><br>";
	echo "<b>Name: </b>" .$res[0]. "</br><b>E-mail: </b>".$res[2]."</br><b>bid: </b>".$res[3];
	echo "</br></br>";
	//echo  "<input type='submit' name='send' value='Send mail to bidder2'>";
	echo "<br>";
}
echo "<br> <u>THE LEAST BID IS:	</u><br><br>";
while($res=mysqli_fetch_row($result2))
{
	echo "<b>Details of bidder selected for project 2</b><br>";
	echo "<b>Name: </b>" .$res[0]. "</br><b>E-mail: </b>".$res[2]."</br><b>bid: </b>".$res[3];
	echo "</br></br>";
	echo  "<input type='submit' name='send' value='Send mail to bidde'>";
	echo "<br><br>";
}
echo "1";
if(!empty($_POST['send']))
{  
	$msg="Congratulations!! your bid has been selected";
	echo "0";
	mail("sabhijiit@gmail.com","Bid",$msg);
	/*echo "ho";
	require_once('Mail.php');
	$type="text\html";
	$from="shivansh.jagga2013@vit.ac.in";
	$to="$e";
	$subject="Received";
	$body="Congratulations!! your bid has been selected";
	
	$host="ssl://smtp.gmail.com";
	$port="465";
	$username="shivansh.jagga2013@vit.ac.in";
	$password="53333983";
	$headers=array('Content-type'=>$type,'From'=>$from,'To'=>$to,'Subject'=>$subject,'Body'=>$body);
	$smtp=@Mail::factory('smtp',array('host'=>$host,'port'=>port,'auth'=>true,'username'=>$username,'password'=>$password));	
	$mail=@$smtp->send($to,$headers,$body);
	
	if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}*/	
}

	
?>
</div>
</body>
</html>


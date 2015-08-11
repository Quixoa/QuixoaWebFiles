<?php
$configs = include('config.php');

date_default_timezone_set('America/New_York');

    // Then call the date functions
$tstamp = date('Y:m:d-H:i:s');
$msg = $_GET["msg"];
$subject = $_GET["sub"];
$from = $_GET["from"];
$to = $_GET["to"];
$headers = "From:" . $from;
mail($to,$subject,$msg,$headers);
$ipadd = $_SERVER['REMOTE_ADDR'];
echo "Success, your message has been sent";


$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($msg !=null){


mysqli_query($con,"INSERT INTO SentData (TStamp, FromEmail, ToEmail, Subject, Message, IP) 
VALUES ('$tstamp', '$from', '$to', '$subject', '$msg', '$ipadd')");
 
}
mysqli_close($con);
 
 ?>
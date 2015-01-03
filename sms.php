<?php
include "AfricasTalkingGateway.php";
if(isset($_POST)){
	if(empty($_POST['phone']) or empty($_POST['message'])){
		echo "fill in all fields";
		$username="patikana";
		$key="";
	}else{
		
	}
}else{
	echo "fill in all the fields";
}


include "AfricasTalkingGateway.php";
$username = "patikana";
$apiKey = "4cca280240e0aac18819ae9af038e2e8a88d383c29ec0e284e5200bdae1d5361";
$prefix = "+254";

$gateway =  new AfricaStalkingGateway($username, $apiKey);

$phoneno=$_POST['phoneno'];
$message=$_POST['text'];


$no=$prefix.$phoneno;

	// Thats it, hit send and we'll take care of the rest
	$results = $gateway -> sendMessage($no, $message);
	if (count($results)) {
		echo "sent";
	}
	else{
		echo "fail";
	}
?>
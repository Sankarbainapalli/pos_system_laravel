<?php

 function  send_sms($to,$message){

//  $username=env("SMS_USER");
//  $password=env("SMS_PASSWORD");

//  $message = urlencode($message);

// file_get_contents('http://www.onlinebulksmslogin.com/spanelv2/api.php?username='.$username.'&password='.$password.'&to='.$to.'&from=RIYUSF&message='.$message);


$username="riyusfresh";
$password="Rfresh789";
$from = "RIYUSF";
// $to = "7661910404"; 
// $message = "hi sankar";
$message = urlencode($message);
$vars="username=".$username."&password=".$password."&message=".$message."&selectdnums=".$to."&from=".$from."&to=".$to."&info=1&test=0";

$ch=curl_init('http://www.onlinebulksmslogin.com/spanelv2/api.php?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);


}
?>
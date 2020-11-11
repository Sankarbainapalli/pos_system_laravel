<?php

 function  send_sms($to,$message){

 $username=env("SMS_USER");
 $password=env("SMS_PASSWORD");

 // $message = '$message';

 $message = urlencode($message);

// file_get_contents('https://smsleads.in/pushsms.php?username='.$username.'&password='.$password.'&sender=POPCAB&numbers='.$to.'&message='.$message.'&unicode=1');

file_get_contents('https://smsleads.in/pushsms.php?username='.$username.'&password='.$password.'&sender=AMGURU&numbers='.$to.'&message='.$message);


// file_get_contents('http://www.onlinebulksmslogin.com/spanelv2/api.php?username='.$username.'&password='.$password.'&to='.$to.'&from=ASKMEG&message='.$message);

// file_get_contents('http://www.onlinebulksmslogin.com/spanelv2/api.php?username='.$username.'&password='.$password.'&to='.$to.'&from=ASKMEG&message='.$message);





}
?>
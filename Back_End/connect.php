<?php
//error_reporting(0);
$url = "localhost";
$database= "hakathon";
$username="root";
$password ="";
echo "<center>";

$conn= mysql_connect($url,$username,$password,$database);

if (!$conn){
		die('Could not connect :'.mysql_error());
}else  
echo "Connected successfully";
session_start();
echo "session_start";
?>
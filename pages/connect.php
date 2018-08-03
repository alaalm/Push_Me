<?php
//error_reporting(0);
$url = "eu-cdbr-west-02.cleardb.net";
$database= "heroku_b5e473d9b007cb2";
$username="b7c9018088c3d9";
$password ="54964bdb";
echo "<center>";

$conn= mysql_connect($url,$username,$password,$database);

if (!$conn){
		die('Could not connect :'.mysql_error());
}else  
echo "Connected successfully";
session_start();
echo "session_start";
?>

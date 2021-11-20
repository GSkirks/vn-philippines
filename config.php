<?php

$dbServername = "remotemysql.com";
$dbUsername = "SpqfQoCNvE";
$dbPassword = "n5Sm4722In";
$dbName = "SpqfQoCNvE";



try{
	$db = new PDO('mysql:host=localhost;dbname=' .$dbName. ';charset=utf8', $dbUsername, $dbPassword );
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Success';
// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

// if (!$conn){
// 	die("Connection Failed: ".mysqli_connect_error());
}
catch (PDOException $e){
	echo "Fail". $e->getMessage();
}
?>
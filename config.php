<?php

$dbServername = "sql203.epizy.com";
$dbUsername = "epiz_30409200";
$dbPassword = "rT3wkcDJjB";
$dbName = "epiz_30409200_useraccounts";



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
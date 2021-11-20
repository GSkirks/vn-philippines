<?php
$servername = "sql203.epizy.com";
$username = "epiz_30409200"; // default username for localhost is root
$password = "rT3wkcDJjB"; // default password for localhost is empty
$dbname = "epiz_30409200_useraccounts"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 
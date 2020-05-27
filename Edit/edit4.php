<?php
require 'functions.php';

$CLIENTIDNO=$_POST['CLIENTIDNO'];

$servername = "172.20.3.98";
$username = "safety";
$password = "safety";
$dbname = "SafetyDL";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Drivers WHERE CLIENTIDNO = " . $CLIENTIDNO . ";";
$results = $conn->query($sql);
    
echo "<html><title>edit4</title><body>"; 
echo $CLIENTIDNO;
echo sql_to_form($results);
echo "</body></html>";
$conn->close();


?>
<html>
<a href="test_add_form.html">Add</a> 
<?php

require 'functions.php';
    
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

$sql = "SELECT PERMITNO, DEPTNO, FNAME, LNAME, CLIENTIDNO from Drivers ORDER BY PERMITNO ASC";
$results = $conn->query($sql);
       
echo sql_to_html_table($results, $delim="\n");

$conn->close();
?>

</html>


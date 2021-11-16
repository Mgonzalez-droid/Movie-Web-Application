<html>
<head>
    <h1>Attempt connection</h1>
</head>  

<?php

$dbServername = "oracle.cise.ufl.edu:1521/orcl";
$dbUsername = "mgonzalez10";
$dbPassword = "A9KjmWXyCSSFyj5aUBbpbFwK";

$conn = oci_connect($dbServername, $dbUsername, $dbPassword);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
echo "Connected!";
?>

</html>
<?php// Connects to the XE service (i.e. database) on the "localhost" machine

$dbServername = "oracle.cise.ufl.edu:1521/orcl";
$dbUsername = "mgonzalez10";
$dbPassword = "A9KjmWXyCSSFyj5aUBbpbFwK";

$conn = oci_connect($dbUsername, $dbPassword, $dbServername);
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM CITY');
oci_execute($stid);

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        echo $row['name'];
    }
}

?>
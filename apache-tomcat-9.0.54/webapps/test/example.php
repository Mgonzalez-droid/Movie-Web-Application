<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Testing PHP connection</title>
    </head>
    <body>
        
        <?php
            $query = "SELECT * FROM CITY;";
            $resultFromDB = oci_parse($conn, $query);
            oci_execute($resultFromDB);
            $resultCheck = oci_num_rows($resultFromDB);

            while ($row = oci_fetch_array($resultFromDB, OCI_BOTH)){
                echo $row['name'];
            }

            if($resultCheck > 0){
                while($row = oci_fetch_assoc($resultFromDB, OCI_ASSOC+OCI_RETURN_NULLS)) {
                    echo $row['name'];
                }
            }

            if($resultCheck == 0){
                echo "no values were returned";
                while($row = oci_fetch_assoc($resultFromDB)) {
                    echo $row['username'];
                }
            }
        ?>

    </body>
</html>
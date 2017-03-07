<?php 

$sqlname='localhost';
$username='bce0619';
$password='sanskar';
$db='onlineretail';
$table='retail';

$file='OnlineRetail.csv';

$connection = mysqli_connect("$sqlname", "$username","$password","$db") or die(mysql_error());

mysqli_query($connection, '
    LOAD DATA LOCAL INFILE "'.$file.'"
        INTO TABLE '.$table.'
        FIELDS TERMINATED by \',\'
        LINES TERMINATED BY \'\n\'
')or die(mysql_error());

echo "Query Executed Successfully!";

?>

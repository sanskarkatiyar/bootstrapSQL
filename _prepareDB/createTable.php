<?php

$sqlname='localhost';
$username='bce0619';
$password='sanskar';
$db='onlineretail';
$table='retail';

$connection = mysqli_connect("$sqlname", "$username","$password","$db") or die(mysql_error());

mysqli_query($connection, 'CREATE TABLE retail (
InvoiceNo VARCHAR(7) NOT NULL, 
StockCode VARCHAR(10) NOT NULL,
Description VARCHAR(100) NOT NULL,
Quantity INT UNSIGNED NOT NULL,
InvoiceDate VARCHAR(16),
UnitPrice FLOAT UNSIGNED NOT NULL,
CustomerID INT(5) UNSIGNED NOT NULL,
Country VARCHAR(50) NOT NULL
)'
);

mysqli_close($connection);
?>
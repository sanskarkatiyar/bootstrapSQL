<?php
$servername = "localhost";
$username = "bce0619";
$password = "sanskar";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, 'CREATE DATABASE onlineretail');
 
mysqli_close($conn);
?>
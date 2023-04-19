<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "contacts";

return $con = mysqli_connect($server, $username, $password, $database) or die("connection failed");
?>
<?php

include "config.php";

$id = $_GET['ID'];

mysqli_query($con, "DELETE FROM information WHERE id='$id'");

header('location:contacts.php');

?>
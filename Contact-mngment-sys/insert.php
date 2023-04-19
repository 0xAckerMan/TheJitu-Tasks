<?php
include "config.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$city = $_POST['city'];

if (isset($_POST['btnadd']) && $first_name !== '' && $last_name !== '' && $phone_number !=='' && $email !== '' && $address !== '' && $city !== ''){
    mysqli_query($con, "INSERT INTO information(first_name, last_name, email, phone_number, address, city) VALUES('$first_name', '$last_name', '$email', '$phone_number', '$address', '$city')");
}

header("location:create.php");
?>

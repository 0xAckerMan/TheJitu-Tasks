<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="main">
<div class="navbar">
            <div class="nav-left">
                <h2>Contact Management System</h2>
            </div>
            <div class="nav-right">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./contacts.php">Contacts</a></li>
                    <li><a href="./create.php">Create</a></li>
                </ul>
            </div>
        </div>

    <div class="container-one">
        <div class="title-create">
            <h2> UPDATE CONTACT</h2>
        </div>

        <?php
        require "config.php";

        
            $id = $_GET['ID'];

            //check if data exists
            $response = mysqli_query($con, "SELECT * FROM information WHERE id = '$id'");

            var_dump($response);
            
            if(mysqli_num_rows($response) > 0) {
                //display data
                $existing_data = mysqli_fetch_array($response);
                
                // var_dump($existing_data);

                $present_first_name = $existing_data['first_name'];
                $present_last_name = $existing_data['last_name'];
                $present_email = $existing_data['email'];
                $present_phone_number = $existing_data['phone_number'];
                $present_address = $existing_data['address'];
                $present_city = $existing_data['city'];
            }

            // var_dump($existing_data);

        if(ISSET($_POST['btnupdate'])){
            $new_first_name = $_POST['first_name'];
            $new_last_name = $_POST['last_name'];
            $new_email = $_POST['email'];
            $new_phone_number = $_POST['phone_number'];
            $new_address = $_POST['address'];
            $new_city = $_POST['city'];

            mysqli_query($con, "UPDATE information SET first_name = '$new_first_name', last_name = '$new_last_name', email = '$new_email', phone_number = '$new_phone_number', address = '$new_address', city = '$new_city' WHERE id = '$id'");

            header("location: contacts.php");
        } 

        
            
        if(ISSET($existing_data)){
            //display update form below 
    ?>
        <form action="" method="post">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" value="<?php echo $present_first_name ?>" required>
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" value="<?php echo $present_last_name ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $present_email?>" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone_number" value="<?php echo $present_phone_number ?>" required>
            <label for="address">Address:</label>
            <input id="address" name="address" value="<?php echo $present_address?>" required></input>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo $present_city ?>" required>
            <input type="submit" value="UPDATE" name="btnupdate">
        </form>


    <!-- </div> -->

    <footer class="bottom">
        <div class="footer-left">
            <p>Contact Management System</p>
        </div>
        <div class="footer-right">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="contacts.php">Contacts</a></li>
            </ul>
        </div>
    </footer>
    </div>
    <?php

} else {
    //pass error
    echo "Sorry we did not find your contact information!. Create your contact information.";
}


?>
</body>
</html>
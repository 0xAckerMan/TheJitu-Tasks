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
                    <li><a href="./create.php">Create</a></li>
                </ul>
            </div>
        </div>

        <?php
        include "config.php";
        $rawdata = mysqli_query($con, "SELECT * FROM information;");

        print_r($rawdata);
        ?>

        <div class="display">
            <table>
                <tbody>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                    <?php
                        while ($row = mysqli_fetch_array($rawdata)){
                    ?>


                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['first_name'] ?></td>
                    <td><?php echo $row['last_name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone_number'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td class="update"><a href="update.php? ID= <?php echo $row['id'] ?>">Update</a></td>
                    <td class="delete"><a href="delete.php? ID=<?php echo $row['id'] ?>">Delete</a></td>

                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>

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
</body>
</html>
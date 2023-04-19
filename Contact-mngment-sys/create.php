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
            <h2> CREATE NEW CONTACT</h2>
        </div>
        <form action="insert.php" method="post">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>
            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone_number" required>
            <label for="address">Address:</label>
            <input id="address" name="address" required></input>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            <input type="submit" value="Submit" name="btnadd">
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
</body>
</html>
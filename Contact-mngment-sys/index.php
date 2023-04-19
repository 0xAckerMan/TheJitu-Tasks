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
        <div class="container">
            <div class="container-left">
                <img src="images/image.png" alt="">
            </div>
            <div class="container-right">
                <p id="title">
                    Manage your contacts
                </p>
                Using our contact management system, is the best way to manage and keep your contacts
                information for the people you care about.
    
                    <button type="button" onclick="redirectToPage()" id="add-contact">Manage Contact</button>

                    <script>
                        function redirectToPage() {
                        window.location.href = "./contacts.php";
                        }
                    </script>
            </div>
        </div>
        <footer class="bottom">
            <div class="footer-left">
                <p>Contact Management System</p>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="./contacts.php">Contacts</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>
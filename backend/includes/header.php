<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gaming Top-Up Website</title>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <img src="./assets/images/LOGO.png" class="sitebrand" alt="" />
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <?php if (isset($_SESSION['user_id'])) {

                        ?>
                            <li><a href="./logout.php">Logout</a></li>
                        <?php } else {
                        ?>
                            <li><a href="./login.php">LogIn</a></li>

                        <?php
                        } ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
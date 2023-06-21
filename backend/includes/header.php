<?php
session_start();

require_once 'functions.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-******" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/loginStyles.css" />
    <link rel="stylesheet" href="assets/css/moreproduct.css" />
    <link rel="stylesheet" href="./assets/css/profile.css" />
    <link rel="stylesheet" href="assets/css/singleitem.css" />
    <meta charset=" UTF-8" />
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Search</a></li>

                        <?php



                        if (is_admin()): ?>
                            <li><a href="admin.php">Dashboard</a></li>
                            <?php

                        endif; ?>

                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <?php if (isset($_SESSION['user_id'])) {

                            ?>
                            <li><a href="./logout.php">Logout</a></li>
                        <?php } else {
                            ?>
                            <li><a href="./login.php">Login</a></li>

                            <?php
                        } ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
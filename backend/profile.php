<?php

session_start();
require 'connect.php';
function  get_user_image()
{
    global $con;

    $statement = $con->prepare("SELECT * FROM `user-info` WHERE ID = ? ");
    $statement->bind_param('i', $_SESSION['user_id']);

    if ($statement->execute()) {
        $result = $statement->get_result();
        $data =  $result->fetch_all(MYSQLI_ASSOC);
    }

    return $data;
}

$user_data = get_user_image();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/profile.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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

    <div class="profile-detail">
        <div class="container">
            <div class="page-header">
                <h1>Profile</h1>
                <?php if (isset($user_data[0]['userimage'])) : ?>
                    <figure class="profile-avatar">


                        <img src="uploads/<?php echo $user_data[0]['userimage']; ?>" alt="" />

                    </figure>
                <?php else : ?>
                    <figure class="profile-avatar">
                        <img src="./assets/images/img.jpg" alt="">
                    </figure>
                <?php endif; ?>
            </div>
            <div class=" profile-container">
                <div class="profile-nav">
                    <ul class="menu">
                        <li>
                            <a href="#">Orders</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Setting</a>
                        </li>
                        <li>
                            <a href="#">Sign-Out</a>
                        </li>
                    </ul>
                </div>
                <div class="profile-content">
                    <form action="#" method="post" class="profile-detail-form">
                        <div class="form-field">
                            <label for="profilepic">Upload Profile Picture</label>
                            <input type="file" name="profilepic" id="profilepic" />
                        </div>
                        <div class="form-group">
                            <div class="form-control">
                                <span class="icon">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </span>
                                <input type="text" id="firstname" class="form-control fname" placeholder="firstname" />
                                <label for="firstname">Firstname</label>
                            </div>
                            <div class="form-control">
                                <span class="icon">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </span>
                                <input type="text" id="lastname" class="form-control lname" placeholder="lastname" />
                                <label for="lastname">Lastname</label>
                            </div>
                        </div>
                        <div class="form-control">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" id="email" class="form-control" placeholder="email" required />
                            <label for="email">Email</label>
                        </div>
                        <div class="form-control">
                            <span class="icon">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </span>
                            <input type="text" id="phonenumber" class="form-control" placeholder="number" />
                            <label for="phonenumber">Number</label>
                        </div>
                        <div class="form-control">
                            <span class="icon">
                                <ion-icon name="lock-open"></ion-icon>
                            </span>
                            <input type="text" id="password" class="form-control" placeholder="Password" />
                            <label for="password">Password</label>
                        </div>
                        <button type="submit" class="btn-submit">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-item">
                    <img src="../frontend/assets/images/LOGO.png" alt="" />
                </div>
                <div class="footer-item">
                    <h2>PRODUCTS</h2>
                    <br />
                    <ul>
                        <li class="footer-list"><a href="#">Top Up</a></li>
                        <br />
                        <li class="footer-list"><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h2>PAYMENTS</h2>
                    <a href="#">
                        <img src="./assets/images/khalti.png" alt="" class="footer-img" />
                    </a>
                    <a href="#">
                        <img src="./assets/images/esewa.png" alt="" class="footer-img" />
                    </a>
                </div>
                <div class="footer-item">
                    <h2>CONNECT WITH US</h2>
                    <div class="connect-container">
                        <a href="#">
                            <img src="./assets/images/facebook.png" alt="" class="footerconnect-img" />
                        </a>
                        <a href="#">
                            <img src="./assets/images/insta.png" alt="" class="footerconnect-img" />
                        </a>
                        <a href="#">
                            <img src="./assets/images/gmail.png" alt="" class="footerconnect-img" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>&copy; COPYRIGHT2023. All right reserved.</p>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/
    ionicons.js"></script>
</body>

</html>
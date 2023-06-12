<?php
global $db_pass;
include 'connect.php';
if (isset($_POST['submit'])) {
    $First_name = mysqli_real_escape_string($con, $_POST['f_name']);
    $Last_name = mysqli_real_escape_string($con, $_POST['l_name']);
    $Phone_no = mysqli_real_escape_string($con, $_POST['mobile']);
    $Email = mysqli_real_escape_string($con, $_POST['email']);
    $Password = mysqli_real_escape_string($con, $_POST['password']);
    $Confirm_Password = mysqli_real_escape_string($con, $_POST['c_password']);

    $emailquery = "SELECT * FROM `user-info` WHERE Email='$Email'";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "Email already exist";
    } else {
        if ($Password == $Confirm_Password) {
            $insertquery = "insert into `user-info` (First_name,Last_name,Phone_no,Email,Password,Confirm_Password)
    values('$First_name', '$Last_name', '$Phone_no','$Email','$Password','$Confirm_Password')";
            $result = mysqli_query($con, $insertquery);


            if ($result) {
                echo '<script>alert("Account Created Successfully")</script>';
            } else {
                die(mysqli_error($con));
            }
        } else {
            echo '<script>alert("Password Doesnot match")</script>';
        }
    }
}
?>
<?php
include 'connect.php';
if (isset($_POST['login'])) {
    $email = $_POST['lemail'];
    $password = $_POST['lpassword'];
    $email_search = "SELECT * FROM `user-info` WHERE Email='$email'";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);
    if ($email_count) {
        $user_data = mysqli_fetch_assoc($query);
        $db_pass = $user_data['Password'];
        if ($db_pass == $password) {
            session_start();
            $_SESSION['user_id'] = $user_data["ID"];
            echo '<script>alert("Login Successfully")</script>';
            header("Location: index.php");
        } else {
            echo '<script>alert("Incorrect password")</script>';
        }
    } else {
        echo '<script>alert("Invalid Email")</script>';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/loginStyles.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <img src="assets/images/LOGO.png" class="sitebrand" alt="" />
                <nav>
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <button class="btnLogin-popup">Login</button>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--Login start-->
    <section class="login-page">
        <div class="container">
            <div class="wrapper" id="wrapper">
                <div class="form-box login">
                    <span class="icon-close">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                    <h2>Login</h2>
                    <form action="#" method="post">
                        <div class=" input-box">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" required name="lemail" />
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="lock-open"></ion-icon>
                            </span>
                            <input type="password" required name="lpassword" />
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox" />Remember me</label>
                            <a href="#">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn" name="login">
                            <a href="index.php" class="login">Login</a>
                        </button>
                        <div class="login-register">
                            <p>
                                Don't have an account?
                                <a href="#" class="register-link">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
                <!--Register Start-->
                <div class="form-box register">
                    <span class="icon-close">
                        <ion-icon name="close-outline"></ion-icon>
                    </span>
                    <h2>Registration</h2>
                    <form action="#" method="post">
                        <div class="usernames">
                            <div class="input-box">
                                <span class="icon">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </span>
                                <input type="text" required name="f_name" />
                                <label>Firstname</label>
                            </div>

                            <div class="input-box">
                                <span class="icon">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </span>
                                <input type="text" required name="l_name" />
                                <label>Lastname</label>
                            </div>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="phone-portrait-outline"></ion-icon>
                            </span>
                            <input type="number" required name="mobile" />
                            <label>Phone Number</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" required name="email" />
                            <label>Email</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="lock-open"></ion-icon>
                            </span>
                            <input type="password" required class="password" name="password" />
                            <label>Password</label>
                        </div>

                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="lock-open"></ion-icon>
                            </span>
                            <input type="password" required class="c_password" name="c_password" />
                            <label>Confirm Password</label>
                        </div>

                        <div class="remember-forgot">
                            <label><input type="checkbox" /> I agree to the terms &
                                condition</label>
                        </div>

                        <button type="submit" class="btn" name="submit">Register</button>

                        <div class="login-register">
                            <p>
                                Already have an account?
                                <a href="#" class="login-link">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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

    <script src="../frontend/assets/js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/
    ionicons.js"></script>
</body>

</html>
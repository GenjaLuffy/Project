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
    $Profile = $_FILES['profilepic'];

    $pname = rand(1000, 10000) . '-' . $Profile['name'];
    $tname = $Profile['tmp_name'];
    $upload_dir = 'uploads/';


    move_uploaded_file($tname, $upload_dir . $pname);

    $emailquery = "SELECT * FROM `user_info` WHERE Email='$Email'";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "Email already exist";
    } else {
        if ($Password == $Confirm_Password) {
            $insertquery = "insert into `user_info` (First_name,Last_name,Phone_no,Email,Password,Confirm_Password,userimage)
                values('$First_name', '$Last_name', '$Phone_no','$Email','$Password','$Confirm_Password','$pname')";
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
    $email_search = "SELECT * FROM `user_info` WHERE Email='$email'";
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

<?php include_once 'includes/header.php'; ?>


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
                <form action="#" method="post" enctype="multipart/form-data">
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

                    <div class="form-field">
                        <label for="profilepic">Upload Profile Picture</label>
                        <input type="file" name="profilepic" id="profilepic" />
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

<?php include_once 'includes/footer.php'; ?>
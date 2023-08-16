<?php
<<<<<<< HEAD
session_start();
include 'functions.php';
if (!is_login()):
=======
require 'connect.php';
include 'includes/header.php';

if (!is_login()) :
>>>>>>> 28d1ccfc6f5cb8c5da26bbfede302f01c52c1334

    header('Location: login.php');

endif;

<<<<<<< HEAD
<?php
require 'connect.php';
function get_user_image()
=======
function  get_user_image()
>>>>>>> 28d1ccfc6f5cb8c5da26bbfede302f01c52c1334
{
    global $con;
    $statement = $con->prepare("SELECT * FROM `user_info` WHERE ID = ? ");
    $statement->bind_param('i', $_SESSION['user_id']);

    if ($statement->execute()) {
        $result = $statement->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);
    }
    return $data;
}

$user_data = get_user_image();

?>
<!-- start of profile detail  -->
<div class="profile-detail">
    <div class="container">
        <div class="profile-header">
            <h1>Profile</h1>
            <?php if (isset($user_data[0]['userimage'])): ?>
                <figure class="profile-avatar">


                    <img src="uploads/<?php echo $user_data[0]['userimage']; ?>" alt="" />

                </figure>
            <?php else: ?>
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
<!-- end of profile detail  -->


<?php include_once 'includes/footer.php'; ?>
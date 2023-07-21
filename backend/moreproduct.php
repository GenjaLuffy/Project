<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>





<?php
$sql = "SELECT * FROM items";
$result = mysqli_query($con, $sql);
?>




<div class="mobilegame">
    <div class="mobilegame-container">
        <div class="mobile-game">
            <h1 class="mobilegame-heading">Mobile Games</h1>
        </div>


        <div class="img-wrap">

            <?php
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="best-content">';
                    echo '<img src="' . $row['image_path'] . '" alt="' . $row['item_name'] . '" />';
                    echo '<h5>' . $row['item_name'] . '</h5>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }

            ?>
        </div>
    </div>
</div>

<div class="mobilegame">
    <div class="mobilegame-container">
        <div class="mobile-game">
            <h1 class="mobilegame-heading">Subscription</h1>
        </div>



        <?php
        $sql = "SELECT * FROM media";
        $result = mysqli_query($con, $sql);
        ?>

        <div class="img-wrap">
            <?php
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="best-content">';
                    echo '<img src="' . $row['image_path'] . '" alt="' . $row['item_name'] . '" />';
                    echo '<h5>' . $row['item_name'] . '</h5>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            ?>
            <!-- <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Netflix</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Youtube premium</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Spotify</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>U-turrent</h5>
            </div> -->
        </div>
    </div>
</div>

<div class="mobilegame">
    <div class="mobilegame-container">
        <div class="mobile-game">
            <h1 class="mobilegame-heading">Gift Card</h1>
        </div>

        <div class="img-wrap">
            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Google gift card</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>I-tunes</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Steam</h5>
            </div>

            <div class="mobilegame-content">
                <img src="./assets/images/img.jpg" alt="" />
                <h5>Playstation Gift Card</h5>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
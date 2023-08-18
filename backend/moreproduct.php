Shrestha Paw-won
<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>

<div class="mobilegame">
    <div class="mobilegame-container">
        <div class="mobile-game">
            <h1 class="mobilegame-heading">Mobile Games</h1>
        </div>


        <div class="img-wrap">

            <?php
            $sql = "SELECT * FROM items";
            $result = mysqli_query($con, $sql);
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="best-content">
                        <figure>
                            <a href="singleitem.php?id=<?php echo $row['id']; ?>">
                                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                            </a>
                        </figure>
                        <h5>
                            <?php echo $row['item_name']; ?>
                        </h5>
                    </div>
            <?php
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
            $sql = "SELECT * FROM media";
            $result = mysqli_query($con, $sql);

            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="best-content">
                        <figure>
                            <a href="singleitem.php?media_id=<?php echo $row['id']; ?>">
                                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                            </a>
                        </figure>
                        <h5>
                            <?php echo $row['item_name']; ?>
                        </h5>
                    </div>
            <?php
                }
            } else {
                echo "No media found.";
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

        <?php
        $sql = "SELECT * FROM cards";
        $result = mysqli_query($con, $sql);
        ?>

        <div class="img-wrap">

            <?php
            $sql = "SELECT * FROM cards";
            $result = mysqli_query($con, $sql);
            ?>
            <?php
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="best-content">';
            ?>
                    <figure>

                        <a href="singleitem.php?cards_id=<?php echo $row['id']; ?>">
                            <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                        </a>
                    </figure>
            <?php
                    echo '<h5>' . $row['item_name'] . '</h5>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            ?>


            <!-- <div class="mobilegame-content">
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
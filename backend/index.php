<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>

<!-- Best seling image and content -->
<?php
$sql = "SELECT * FROM items LIMIT 4";
$result = mysqli_query($con, $sql);
?>
<div class="bestselling">
    <div class="bestselling-container">
        <div class="best-selling">
            <h1 class="bestselling-heading">Best-Selling</h1>
            <ion-icon name="bag-handle-outline"></ion-icon>
        </div>

        <div class="img-wrap">
            <?php
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="best-content">';
                    ?>
                    <figure>

                        <?php echo '<img src="' . $row['image_path'] . '" alt="' . $row['item_name'] . '" />'; ?>
                    </figure>
                    <?php
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
<div class="bestselling">
    <div class="bestselling-container">
        <?php
        $sql = "SELECT * FROM items LIMIT 8";
        $result = mysqli_query($con, $sql);
        ?>

        <div class="best-selling">
            <h1 class="bestselling-heading">Products</h1>
            <ion-icon name="bag-handle-outline"></ion-icon>
        </div>

        <div class="img-wrap">
            <?php
            // Display data in HTML
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="best-content">';
                    ?>
                    <figure>

                        <?php echo '<img src="' . $row['image_path'] . '" alt="' . $row['item_name'] . '" />'; ?>
                    </figure>
                    <?php
                    echo '<h5>' . $row['item_name'] . '</h5>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }

            // Close the database connection
            mysqli_close($con);
            ?>
            <!-- <div class="best-content">
                <img src="./assets/images/img.jpg" alt="PUBG Mobile" />
                <h5>PUBG Mobile UC</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Mobile Legend" />
                <h5>Mobile Legend Diamond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Free fire" />
                <h5>Free Fire Daimond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Apex Legend" />
                <h5>Apex Legend Coins</h5>
            </div>
            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="PUBG Mobile" />
                <h5>PUBG Mobile UC</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Mobile Legend" />
                <h5>Mobile Legend Diamond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Free fire" />
                <h5>Free Fire Daimond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Apex Legend" />
                <h5>Apex Legend Coins</h5>
            </div>
            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="PUBG Mobile" />
                <h5>PUBG Mobile UC</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Mobile Legend" />
                <h5>Mobile Legend Diamond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Free fire" />
                <h5>Free Fire Daimond</h5>
            </div>

            <div class="best-content">
                <img src="./assets/images/img.jpg" alt="Apex Legend" />
                <h5>Apex Legend Coins</h5>
            </div> -->
        </div>
    </div>
</div>

<div class="moreproduct">
    <div class="btn-container">
        <a href="moreproduct.php" class="moreproduct-btn">More Product <ion-icon name="arrow-forward-outline">
            </ion-icon>
        </a>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
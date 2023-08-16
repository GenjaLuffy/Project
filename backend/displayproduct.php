<?php

function display_bestselling()
{
    global $con;
    $sql = "SELECT * FROM items LIMIT 4";
    $result = mysqli_query($con, $sql); ?>

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
                        <a href="singleitem.php?id=<?php echo $row['id']; ?>">
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
        </div>
    </div>
<?php }
function display_product()
{ ?>
    <div class="bestselling-container">
        <?php
        global $con;
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

            // Close the database connection
            mysqli_close($con);
            ?>
        </div>

    <?php }

?>
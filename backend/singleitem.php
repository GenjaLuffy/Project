<?php
include_once 'includes/header.php';
include 'connect.php';
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['productAmount'];
    $customer_id = get_user_id();
    $product_id = $_GET['id'];
    $user_id = $_POST['user_id'];
    $zone_id = $_POST['zone_id'];
    $qty = $_POST['qty'];
    // $product_name = get_product_name($product_id);
    // echo $customer_id . "<br>";
    // echo $product_id . "<br>";
    // echo $product_name . "<br>";
    // echo $user_id . "<br>";
    // echo $amount . "<br>";
    // echo $zone_id . "<br>";
    // echo $qty;
    global $con;
    $stmt = $con->prepare("INSERT INTO orders(customer_id, user_id, product_id, product_detail, product_qty)VALUES(?,?,?,?,?)");
    $stmt->bind_param("iiisi", $customer_id, $user_id, $product_id, $amount, $qty);
    $stmt->execute();
}

if (isset($_GET['id'])) {
    // Retrieve the item ID from the URL parameter
    $item_id = $_GET['id'];

    // Retrieve data from the `items` table for the selected item
    $sql = "SELECT * FROM items WHERE id = $item_id";
    $result = mysqli_query($con, $sql);

    // Display data in HTML
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                <div class="page-header">
                    <div class="container">
                        <h2 class="page-title">
                            <?php echo $row['item_name']; ?>
                        </h2>
                    </div>
                </div>

                <div class="single-item-container">
                    <section class="single-wrapper">
                        <div class="container">
                            <div class="grid column-2 gap-2">
                                <div class="grid-item">
                                    <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                                </div>
                                <div class="grid-item">
                                    <ul class="item-description">
                                        <li>Delivery mode:
                                            <?php echo $row['delivery_mode']; ?>
                                        </li>
                                        <li>Delivery time:
                                            <?php echo $row['delivery_time']; ?>
                                        </li>
                                        <li>Platform:
                                            <?php echo $row['platform']; ?>
                                        </li>
                                        <li>Region:
                                            <?php echo $row['region']; ?>
                                        </li>
                                        <li>Publisher:
                                            <?php echo $row['publisher']; ?>
                                        </li>
                                        <li>Developer:
                                            <?php echo $row['developer']; ?>
                                        </li>
                                        <li>Genres:
                                            <?php echo $row['genre']; ?>
                                        </li>
                                    </ul>
                                    <!-- Your form goes here -->
                                    <form method="post">

                                        <label for="productAmount"></label>
                                        <select name="productAmount" id="productAmount" class="productAmount">
                                            <option value="" selected>Select Amount</option>
                                            <option value="Diamond">Diamond</option>
                                            <option value="UC">Uc</option>
                                            <option value="Coin">Coin</option>
                                        </select>
                                        <div class="gameuserid">
                                            <input type="text" name="user_id" id="userid" placeholder="Enter User ID" />
                                        </div>
                                        <div class="gameuserid">
                                            <input type="text" name="zone_id" id="zoneid" placeholder="Enter Zone ID" />
                                        </div>
                                        <div class="buy-button">
                                            <input type="number" class="qty" value="1" name="qty" />
                                            <button type="submit" class="btn-buy">
                                                BUY
                                                <ion-icon name="cart-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        <?php

    } else {
        echo "Item not found.";
    }
} elseif (isset($_GET['media_id'])) {
    $media_id = $_GET['media_id'];

    // Retrieve data from the 'media' table for the selected item
    $sql = "SELECT * FROM media WHERE id = $media_id";
    $result = mysqli_query($con, $sql);

    // Display data in HTML
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                <div class="page-header">
                    <div class="container">
                        <h2 class="page-title">
                            <?php echo $row['item_name']; ?>
                        </h2>
                    </div>
                </div>
                <div class="single-item-container">
                    <section class="single-wrapper">
                        <div class="container">
                            <div class="grid column-2 gap-2">
                                <div class="grid-item">
                                    <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                                </div>
                                <div class="grid-item">
                                    <ul class="item-description">
                                        <li>Delivery mode:
                                            <?php echo $row['delivery_mode']; ?>
                                        </li>
                                        <li>Delivery time:
                                            <?php echo $row['delivery_time']; ?>
                                        </li>
                                        <li>Platform:
                                            <?php echo $row['platform']; ?>
                                        </li>
                                        <li>Region:
                                            <?php echo $row['region']; ?>
                                        </li>
                                    </ul>
                                    <!-- Your form goes here -->
                                    <form action="#" method="post">

                                        <label for="productAmount"></label>
                                        <select name="productAmount" id="productAmount" class="productAmount">
                                            <option value="" selected>Select Amount</option>
                                            <option value="5">5</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                        <div class="gameuserid">
                                            <input type="text" name="user_id" id="userid" placeholder="Enter Email ID" />
                                        </div>
                                        <div class="buy-button">
                                            <input type="number" class="qty" value="1" name="qty" />
                                            <button type="submit" class="btn-buy">
                                                BUY
                                                <ion-icon name="cart-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        <?php }

} elseif (isset($_GET['cards_id'])) {
    $cards_id = $_GET['cards_id'];

    // Retrieve data from the 'cards' table for the selected item
    $sql = "SELECT * FROM cards WHERE id = $cards_id";
    $result = mysqli_query($con, $sql);

    // Display data in HTML
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>
                <div class="page-header">
                    <div class="container">
                        <h2 class="page-title">
                            <?php echo $row['item_name']; ?>
                            </h2>
                    </div>
                </div>
                <div class="single-item-container">
                    <section class="single-wrapper">
                        <div class="container">
                            <div class="grid column-2 gap-2">
                                <div class="grid-item">
                                    <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['item_name']; ?>" />
                                </div>
                                <div class="grid-item">
                                    <ul class="item-description">
                                        <li>Delivery mode:
                                            <?php echo $row['delivery_mode']; ?>
                                        </li>
                                        <li>Delivery time:
                                            <?php echo $row['delivery_time']; ?>
                                        </li>
                                        <li>Platform:
                                            <?php echo $row['platform']; ?>
                                        </li>
                                        <li>Region:
                                            <?php echo $row['region']; ?>
                                        </li>
                                    </ul>
                                    <!-- Your form goes here -->
                                    <form action="#" method="post">

                                        <label for="productAmount"></label>
                                        <select name="productAmount" id="productAmount" class="productAmount">
                                            <option value="" selected>Select Amount</option>
                                            <option value="5">5</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                        <div class="gameuserid">
                                            <input type="text" name="user_id" id="userid" placeholder="Enter Email ID" />
                                        </div>
                                        <div class="buy-button">
                                            <input type="number" class="qty" value="1" name="qty" />
                                            <button type="submit" class="btn-buy">
                                                BUY
                                                <ion-icon name="cart-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        <?php }

}
?>



<?php include_once 'includes/footer.php'; ?>
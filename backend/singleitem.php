<?php include 'connect.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $item_name = $_POST["item_name"];
    $delivery_mode = $_POST["delivery_mode"];
    $delivery_time = $_POST["delivery_time"];
    $platform = $_POST["platform"];
    $region = $_POST["region"];
    $publisher = $_POST["publisher"];
    $developer = $_POST["developer"];
    $genres = $_POST["genres"];
    $product_amount = $_POST["productAmount"];
    $user_id = $_POST["user_id"];
    $zone_id = $_POST["zone_id"];
    $quantity = $_POST["qty"];
    $image_path = "path_to_image"; // You can modify this to store the actual image path in the database

    // Perform validation if needed

    // Insert the data into the database
    $sql = "INSERT INTO `single item` (item_name, delivery_mode, delivery_time, platform, region, publisher, developer, genres, product_amount, user_id, zone_id, quantity, image_path) 
            VALUES ('$item_name', '$delivery_mode', '$delivery_time', '$platform', '$region', '$publisher', '$developer', '$genres', '$product_amount', '$user_id', '$zone_id', $quantity, '$image_path')";

    if (mysqli_query($con, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

<?php include_once 'includes/header.php'; ?>

<div class="page-header">
    <div class="container">
        <h2 class="page-title">Mobile Legend Diamonds</h2>
    </div>
</div>
<div class="single-item-container">
    <section class="single-wrapper">
        <div class="container">
            <div class="grid column-2 gap-2">
                
                <div class="grid-item">
                    <img src="assets/images/img.jpg" alt="" />
                </div>
                <div class="grid-item">
                    <ul class="item-description">
                        <li>Delivery mode: VIA UID and Username</li>
                        <li>Delivery time: 30 min</li>
                        <li>Platform: Android, IOS</li>
                        <li>Region: Global</li>
                        <li>Plubisher: Moontoon</li>
                        <li>Developer: Moontoon</li>
                        <li>Genres: MMO</li>
                    </ul>
                    <form action="#" method="post">
                        <label for="productAmount"></label>
                        <select name="productAmount" id="productAmount" class="productAmount">
                            <option value="" selected>Select Amount</option>
                            <option value="a">Diamond</option>
                            <option value="b">Uc</option>
                            <option value="c">Coin</option>
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
<?php include_once 'includes/footer.php'; ?>

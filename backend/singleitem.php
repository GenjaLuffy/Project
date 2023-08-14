<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>

<?php
if (isset($_GET['item_id'])) {
    // Retrieve the item ID from the URL parameter
    $item_id = $_GET['item_id'];

    // Retrieve data from the `single_item` table for the selected item
    $sql = "SELECT * FROM single_item WHERE id = $item_id";
    $result = mysqli_query($con, $sql);

    // Display data in HTML
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the detailed information of the item
            echo '<div class="single-item-container">';
            echo '<section class="single-wrapper">';
            echo '<div class="container">';
            echo '<div class="grid column-2 gap-2">';
            echo '<div class="grid-item">';
            echo '<img src="' . $row['image_path'] . '" alt="' . $row['item_name'] . '" />';
            echo '</div>';
            echo '<div class="grid-item">';
            echo '<ul class="item-description">';
            echo '<li>Delivery mode: ' . $row['delivery_mode'] . '</li>';
            echo '<li>Delivery time: ' . $row['delivery_time'] . '</li>';
            echo '<li>Platform: ' . $row['platform'] . '</li>';
            echo '<li>Region: ' . $row['region'] . '</li>';
            echo '<li>Publisher: ' . $row['publisher'] . '</li>';
            echo '<li>Developer: ' . $row['developer'] . '</li>';
            echo '<li>Genres: ' . $row['genres'] . '</li>';
            echo '</ul>';
            echo '<form action="submit_form.php" method="post">';
            echo '<label for="productAmount"></label>';
            echo '<select name="productAmount" id="productAmount" class="productAmount">';
            echo '<option value="" selected>Select Amount</option>';
            echo '<option value="a">Diamond</option>';
            echo '<option value="b">Uc</option>';
            echo '<option value="c">Coin</option>';
            echo '</select>';
            echo '<div class="gameuserid">';
            echo '<input type="text" name="user_id" id="userid" placeholder="Enter User ID" />';
            echo '</div>';
            echo '<div class="gameuserid">';
            echo '<input type="text" name="zone_id" id="zoneid" placeholder="Enter Zone ID" />';
            echo '</div>';
            echo '<div class="buy-button">';
            echo '<input type="number" class="qty" value="1" name="qty" />';
            echo '<button type="submit" class="btn-buy">';
            echo 'BUY';
            echo '<ion-icon name="cart-outline"></ion-icon>';
            echo '</button>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
            echo '</div>';
        }
   
    } else {
        echo "Item not found.";
    }
}
?>


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

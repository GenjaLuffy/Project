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
    $sql = "INSERT INTO single item (item_name, delivery_mode, delivery_time, platform, region, publisher, developer, genres, product_amount, user_id, zone_id, quantity, image_path) VALUES ('$item_name', '$delivery_mode', '$delivery_time', '$platform', '$region', '$publisher', '$developer', '$genres', '$product_amount', '$user_id', '$zone_id', $quantity, '$image_path')";

    if (mysqli_query($con, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>

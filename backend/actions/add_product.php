<?php
require_once '../connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $product_image = $_FILES['product_image'];
        $delivery_mode = $_POST['delivery_mode'];
        $delivery_time = $_POST['delivery_time'];
        $platform = $_POST['platform'];
        $region = $_POST['region'];
        $publisher = $_POST['publisher'];
        $developer = $_POST['developer'];
        $genre = $_POST['genre'];

        $pname = rand(1000, 10000) . '-' . $product_image['name'];
        $tname = $product_image['tmp_name'];
        $upload_dir = '../assets/images/';

        $img_url = './assets/images/' . $pname;

        move_uploaded_file($tname, $upload_dir . $pname);

        $stmt = $con->prepare("INSERT INTO items(item_name, image_path, delivery_mode, delivery_time, platform, region, publisher, developer, genre) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssssss', $product_name, $img_url, $delivery_mode, $delivery_time, $platform, $region, $publisher, $developer, $genre);

        if ($stmt->execute()) {
            echo "<script>alert('Product added succesfully')</script>";

        } else {
            echo "<script>alert('Error occured during the adding product')</script>";
        }
        header('Location: ../add-product.php');

    }
}
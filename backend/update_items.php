<?php
if (!isset($_GET['edit_id'])) {
    header('Location: ./addproduct.php');
}

$edit_id = $_GET['edit_id'];


?>

<?php include_once 'includes/header.php';

$stmt = $con->prepare('SELECT * FROM items where id = ?');
$stmt->bind_param('i', $edit_id);
$stmt->execute();
$result = $stmt->get_result();
$items = $result->fetch_array(MYSQLI_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['edit_product'])) {
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
        $upload_dir = 'assets/images/';

        $img_url = './assets/images/' . $pname;

        move_uploaded_file($tname, $upload_dir . $pname);


        $query = $con->prepare('UPDATE items SET item_name =  ?, image_path = ?, delivery_mode = ?, delivery_time = ?, platform = ?, region = ?,  publisher = ?,developer = ?, genre = ? WHERE id = ?');

        $query->bind_param('sssssssssi', $product_name, $img_url, $delivery_mode, $delivery_time, $platform, $region, $publisher, $developer, $genre, $edit_id);

        if ($query->execute()) {
            echo "<script>alert('Product updated succesfully')</script>";

        } else {
            echo "<script>alert('Error occured during the updating product')</script>";
        }
    }
}

?>



<?php



if (!is_admin()):

    header('Location: login.php');

endif; ?>


<!-- Add Product -->
<div class="admin-container">
    <aside class="sidebar">
        <ul class="admin-links">
            <li>
                <a href="admin.php"><span><i class="fas fa-chart-line"></i></span>Dashboard</a>
            </li>
            <li>
                <a href="user.php"><span><i class="fas fa-user"></i></span>User</a>
            </li>
            <li>
                <a href="products.php"><span><i class="fas fa-box"></i></span>Product</a>
                <ul class="sub-admin-links">
                    <li>
                        <a href="orders.php"><span><i class="fas fa-box-open"></i></span>Orders</a>
                    </li>
                    <li>
                        <a href="add-product.php"><span><i class="fas fa-plus"></i></span>Add Product</a>
                    </li>
                    <!-- <li>
                        <a href="#"><span><i class="fas fa-list-alt"></i></span>Product
                            Category</a>
                    </li> -->
                </ul>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-cog"></i></span>Settings</a>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a>
            </li>
        </ul>
    </aside>
    <div class="admin-content">
        <h2>Edit Product</h2>
        <div class="dashboard">
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="product_name" value="<?php echo $items['item_name'] ?>">
                <input type="file" name="product_image">
                <input type="text" name="delivery_mode" value="<?php echo $items['delivery_mode'] ?>">
                <input type="text" name="delivery_time" value="<?php echo $items['delivery_time'] ?>">
                <input type="text" name="platform" value="<?php echo $items['platform'] ?>">
                <input type="text" name="region" value="<?php echo $items['region'] ?>">
                <input type="text" name="publisher" value="<?php echo $items['publisher'] ?>">
                <input type="text" name="developer" value="<?php echo $items['developer'] ?>">
                <input type="text" name="genre" value="<?php echo $items['genre'] ?>">
                <button type="submit" name="edit_product">Update</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php include_once 'includes/footer.php'; ?>
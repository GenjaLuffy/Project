<?php include_once 'includes/header.php';

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
        <div class="dashboard">
            <form action="actions/add_product.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="product_name" placeholder="Product Name">
                <input type="file" name="product_image">
                <input type="text" name="delivery_mode" placeholder="Delivery mode">
                <input type="text" name="delivery_time" placeholder="Delivery time">
                <input type="text" name="platform" placeholder="Platform">
                <input type="text" name="region" placeholder="Region">
                <input type="text" name="publisher" placeholder="Publisher">
                <input type="text" name="developer" placeholder="Developer">
                <input type="text" name="genre" placeholder="Genre">
                <button type="submit" name="add_product">Add Product</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php include_once 'includes/footer.php'; ?>
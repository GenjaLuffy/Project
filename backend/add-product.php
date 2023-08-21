<?php include_once 'includes/header.php';

?>



<?php



if (!is_admin()):

    header('Location: login.php');

endif; ?>

<style>

.admin-content {
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.admin-content label {
    display: block;
  font-weight: bold;
  margin-bottom: 5px;
}
.admin-content input[type="text"],
.admin-content input[type="file"] {
  
  padding: 10px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

.admin-content button[name="add_product"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.admin-content button[name="add_product"]:hover {
  background-color:#0056b3;
}

</style>


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
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name" placeholder="Product Name">.

                <input type="file" name="product_image">

                <label for="delivery_mode" class="">Delevery Mode:</label>
                <input type="text" name="delivery_mode" placeholder="Delivery mode">

                <label for="delivery_time" class="">Delevery Time:</label>
                <input type="text" name="delivery_time" placeholder="Delivery time">

                <label for="platform" class="">Platform::</label>
                <input type="text" name="platform" placeholder="Platform">

                <label for="region" class="">Region:</label>
                <input type="text" name="region" placeholder="Region">

                <label for="publisher" class="">Publisher:</label>
                <input type="text" name="publisher" placeholder="Publisher">

                <label for="developer" class="">Developer:</label>
                <input type="text" name="developer" placeholder="Developer">

                <label for="genre" class="">Genre:</label>
                <input type="text" name="genre" placeholder="Genre">

                <button type="submit" name="add_product">Add Product</button>
            </form>
        </div>
    </div>
</div>
</div>

<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/header.php';

global $con;
$stmt = $con->prepare("SELECT * FROM orders");
$stmt->execute();
$result = $stmt->get_result();
$orders = $result->fetch_all(MYSQLI_ASSOC);

?>

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
                <a href="logout.php "><span><i class="fas fa-sign-out-alt"></i></span>Logout</a>
            </li>
        </ul>
    </aside>

    <div class="pro-content">
        <div class="pro">
            <div class="prodetail-content">
                <form>
                    <table class="protable">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Product Name</th>
                            <th>Details</th>
                            <th>Qty</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td>
                                    <?php echo $order['id']; ?>
                                </td>
                                <td>
                                    <?php echo get_user_name($order['customer_id']); ?>
                                </td>
                                <td>
                                    <?php echo get_product_name($order['product_id']); ?>
                                </td>
                                <td>
                                    <?php echo $order['product_detail']; ?>
                                </td>
                                <td>
                                    <?php echo $order['product_qty']; ?>
                                </td>
                                <td>
                                    <?php echo $order['status']; ?>
                                    <?php if ($order['status'] == 'pending'): ?>
                                        <a class="btn btn-primary"
                                            href="action.php?id=<?php echo $order['id']; ?>&status=completed">Update</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
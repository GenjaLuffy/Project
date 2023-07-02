<?php include_once 'includes/header.php'; ?>

<div class="admin-container">
    <aside class="sidebar">
        <ul class="admin-links">
            <li>
                <a href="admin.html"><span><i class="fas fa-chart-line"></i></span>Dashboard</a>
            </li>
            <li>
                <a href="user.html"><span><i class="fas fa-user"></i></span>User</a>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-box"></i></span>Product</a>
                <ul class="sub-admin-links">
                    <li>
                        <a href="product.php"><span><i class="fas fa-box-open"></i></span>Products</a>
                    </li>
                    <li>
                        <a href="#"><span><i class="fas fa-plus"></i></span>Add Product</a>
                    </li>
                    <li>
                        <a href="#"><span><i class="fas fa-list-alt"></i></span>Product
                            Category</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-cog"></i></span>Settings</a>
            </li>
            <li>
                <a href="logout.php"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a>
            </li>
        </ul>
    </aside>

    <div class="user-content">
        <div class="user">
            <div class="userdetail-content">
                <form>
                    <table class="usertable">
                        <thead>
                            <th>S.no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
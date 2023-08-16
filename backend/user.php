<?php
include_once 'includes/header.php';
include 'connect.php';

$query = "SELECT ui.ID, CONCAT(ui.First_name, ' ', ui.Last_name) AS Full_Name, ui.Email, ur.user_role 
          FROM user_info ui
          LEFT JOIN user_roles ur ON ui.ID = ur.user_id";

$result = mysqli_query($con, $query);
?>

<div class="admin-container">
    <!-- ... Your existing HTML code ... -->

    <aside class="sidebar">
        <ul class="admin-links">
            <li>
                <a href="#"><span><i class="fas fa-chart-line"></i></span>Dashboard</a>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-user"></i></span>User</a>
            </li>
            <li>
                <a href="#"><span><i class="fas fa-box"></i></span>Product</a>
                <ul class="sub-admin-links">
                    <li>
                        <a href="product.php"><span><i class="fas fa-box-open"></i></span>Products</a>
                    </li>
                    <li>
                        <a href="addproduct.php"><span><i class="fas fa-plus"></i></span>Add Product</a>
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
                <a href="#"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a>
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
                        <tbody>
                            <?php
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $counter . "</td>";
                                echo "<td>" . $row['Full_Name'] . "</td>";
                                echo "<td>" . $row['Email'] . "</td>";
                                echo "<td>" . $row['user_role'] . "</td>";
                                echo "</tr>";
                                $counter++;
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>

<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>


<?php

$sql = "SELECT * FROM items";
$result = mysqli_query($con, $sql);

?>
<style>
  .item-table {
  width: 100%;
  border-collapse: separate; 
  border-spacing: 10px; 
  margin-top: 20px;}
</style>
<div class="admin-container">
<<<<<<< HEAD
    <aside class="sidebar">
        <ul class="admin-links">
            <li>
                <a href="admin.php"><span><i class="fas fa-chart-line"></i></span>Dashboard</a>
            </li>
            <li>
                <a href="user.php"><span><i class="fas fa-user"></i></span>User</a>
            </li>
            <li>
                <a href="product.php"><span><i class="fas fa-box"></i></span>Product</a>
                <ul class="sub-admin-links">
                    <li>
                        <a href="product.php"><span><i class="fas fa-box-open"></i></span>Orders</a>
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
=======
  <aside class="sidebar">
    <ul class="admin-links">
      <li>
        <a href="admin.php"><span><i class="fas fa-chart-line"></i></span>Dashboard</a>
      </li>
      <li>
        <a href="user.php"><span><i class="fas fa-user"></i></span>User</a>
      </li>
      <li>
        <a href="product.php"><span><i class="fas fa-box"></i></span>Product</a>
        <ul class="sub-admin-links">
          <li>
            <a href="product.php"><span><i class="fas fa-box-open"></i></span>Orders</a>
          </li>
          <li>
            <a href="#"><span><i class="fas fa-plus"></i></span>Add Product</a>
          </li>
          <li>
            <a href="#"><span><i class="fas fa-list-alt"></i></span>Product
              Category</a>
          </li>
>>>>>>> 4df1aafa1922381c8d485280cd2ab80f1a458cc2
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
      <h2 class="dashboard-title">Products</h2>
      <div class="dashboard-content">


        <table class="item-table">
          <thead>
            <tr>
              <th>Item Name</th>
              <th>Availability</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Loop through the data and populate the table rows
            while ($row = mysqli_fetch_assoc($result)) {
              $itemName = $row['item_name'];
              $availability = 'Available';
              ?>
              <tr>
                <td>
                  <?php echo $itemName; ?>
                </td>
                <td>
                  <?php echo $availability; ?>
                </td>
                <td>
                  <a href="edit.php?id=" class="btn-primary" <?php echo $row['id']; ?>>Update</a>
                  <a href="delete.php?id=" class="btn-primary" <?php echo $row['id']; ?>>Delete</a>
                </td>
              </tr>
            <?php }
            ?>

<<<<<<< HEAD
                            // Assuming the image_path column holds the path to the images
                            // You can display the image if needed using <img> tag
                            // $imagePath = $row['image_path'];

                            // Output the table row
                            echo '<tr>';
                            echo '<td>' . $itemName . '</td>';
                            echo '<td>' . $availability . '</td>';
                            echo '<td>';
                            echo '<a href="update.php? id=' . $row['id'] . '">Update</a> ';
                            echo '<a href="edit.php?id=' . $row['id'] . '">Edit</a> ';
                            echo '<a href="delete.php?id=' . $row['id'] . '">Delete</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>

                    </tbody>
                </table>
=======
          </tbody>
        </table>
>>>>>>> 4df1aafa1922381c8d485280cd2ab80f1a458cc2


      </div>
    </div>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>


<?php

$sql = "SELECT * FROM items";
$result = mysqli_query($con, $sql);

?>

    <div class="admin-container">
      <aside class="sidebar">
        <ul class="admin-links">
          <li>
            <a href="admin.html"
              ><span><i class="fas fa-chart-line"></i></span>Dashboard</a
            >
          </li>
          <li>
            <a href="user.html"
              ><span><i class="fas fa-user"></i></span>User</a
            >
          </li>
          <li>
            <a href="product.html"
              ><span><i class="fas fa-box"></i></span>Product</a
            >
            <ul class="sub-admin-links">
              <li>
                <a href="#"
                  ><span><i class="fas fa-box-open"></i></span>Products</a
                >
              </li>
              <li>
                <a href="#"
                  ><span><i class="fas fa-plus"></i></span>Add Product</a
                >
              </li>
              <li>
                <a href="#"
                  ><span><i class="fas fa-list-alt"></i></span>Product
                  Category</a
                >
              </li>
            </ul>
          </li>
          <li>
            <a href="#"
              ><span><i class="fas fa-cog"></i></span>Settings</a
            >
          </li>
          <li>
            <a href="#"
              ><span><i class="fas fa-sign-out-alt"></i></span>Logout</a
            >
          </li>
        </ul>
      </aside>
      <div class="admin-content">
        <div class="dashboard">
          <h2 class="dashboard-title">Dashboard</h2>
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
              $availability = 'Available'; // You can add logic here to determine the availability based on the data

              // Assuming the image_path column holds the path to the images
              // You can display the image if needed using <img> tag
              // $imagePath = $row['image_path'];

              // Output the table row
              echo '<tr>';
              echo '<td>' . $itemName . '</td>';
              echo '<td>' . $availability . '</td>';
              echo '<td>';
              echo '<a href="update.php?id=' . $row['id'] . '">Update</a> ';
              echo '<a href="edit.php?id=' . $row['id'] . '">Edit</a> ';
              echo '<a href="delete.php?id=' . $row['id'] . '">Delete</a>';
              echo '</td>';
              echo '</tr>';
            }
            ?>
       
        </tbody>
        </table>


          </div>
        </div>
      </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
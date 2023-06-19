<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/admin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-******" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
</head>

<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <img src="./assets/images/LOGO.png" class="sitebrand" alt="" />
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="./loginin.html">LogIn</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- Add Product -->
  <div class="admin-container">
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
              <a href="#"><span><i class="fas fa-box-open"></i></span>Products</a>
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
          <a href="#"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a>
        </li>
      </ul>
    </aside>
    <div class="admin-content">
      <div class="dashboard">
        <h2 class="dashboard-title">Dashboard</h2>
        <div class="dashboard-content">
          <p>Welcome to the admin dashboard! You can manage your website here.</p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            vestibulum, velit id rutrum feugiat, sem urna volutpat enim, a
            interdum ipsum orci sed dui.
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-item">
          <img src="assets/images/LOGO.png" alt="" />
        </div>
        <div class="footer-item">
          <h2>PRODUCTS</h2>
          <br />
          <ul>
            <li class="footer-list"><a href="#">Top Up</a></li>
            <br />
            <li class="footer-list"><a href="#">Gift Cards</a></li>
          </ul>
        </div>
        <div class="footer-item">
          <h2>PAYMENTS</h2>
          <a href="#">
            <img src="./assets/images/khalti.png" alt="" class="footer-img" />
          </a>
          <a href="#">
            <img src="./assets/images/esewa.png" alt="" class="footer-img" />
          </a>
        </div>
        <div class="footer-item">
          <h2>CONNECT WITH US</h2>
          <div class="connect-container">
            <a href="#">
              <img src="./assets/images/facebook.png" alt="" class="footerconnect-img" />
            </a>
            <a href="#">
              <img src="./assets/images/insta.png" alt="" class="footerconnect-img" />
            </a>
            <a href="#">
              <img src="./assets/images/gmail.png" alt="" class="footerconnect-img" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
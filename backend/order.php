<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./assets/css/profile.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/order.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <div class="header-inner">
          <img src="./assets/images/LOGO.png" class="sitebrand" alt="" />
          <nav>
            <ul>
              <li><a href="./index.html">Home</a></li>
              <li><a href="#">Search</a></li>
              <li><a href="#">Cart</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="./loginin.html">LogIn</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="profile-detail">
      <div class="container">
        <div class="page-header">
          <h1>Orders</h1>
          <figure class="profile-avatar">
            <img src="/frontend/assets/images/img.jpg" alt="" />
          </figure>
        </div>
        <div class="profile-container">
          <div class="profile-nav">
            <ul class="menu">
              <li>
                <a href="#">Orders</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li> 
              <li>
                <a href="#">Setting</a>
              </li>
              <li>
                <a href="#">Sign-Out</a>
              </li>
            </ul>
          </div>
          <div class="order-content">
              <div class="order-field">
                <label for="Order">Order</label>
                  <table>
                    <thead>
                      <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                  </table>
               
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="footer-inner">
          <div class="footer-item">
            <img src="../frontend/assets/images/LOGO.png" alt="" />
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
                <img
                  src="./assets/images/facebook.png"
                  alt=""
                  class="footerconnect-img"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/images/insta.png"
                  alt=""
                  class="footerconnect-img"
                />
              </a>
              <a href="#">
                <img
                  src="./assets/images/gmail.png"
                  alt=""
                  class="footerconnect-img"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <div class="container">
          <p>&copy; COPYRIGHT2023. All right reserved.</p>
        </div>
      </div>
    </footer>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/
    ionicons.js"
    ></script>
  </body>
</html>

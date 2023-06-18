<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <div class="form_container">
      <div class="form-control">
        <div class="formh">
          <h1>Admin Dashboard</h1>
          <form id="add-product-form">
            <!-- <h2>Product</h2> -->
            <!-- <input type="text" id="Productname" name="Productname" > --> 
            <div class="adminp">

              <label for="Productname" class="Product">Product-Name</label>
              <input type="submit" value="Update" />
              <input type="submit" value="Delete" />
            </div>
            
            <div class="adminp">
            <label for="Productname" class="Product">Product-Name</label>
            <input type="submit" value="Update" />
            <input type="submit" value="Delete" />
            </div>
            

          </form>
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
    </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/singleitem.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>single item</title>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <img src="./assets/images/LOGO.png" class="sitebrand" alt="" />
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Search</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="./loginin.php">LogIn</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--Start of single items-->

    <div class="page-header">
        <div class="container">
            <h2 class="page-title">Mobile Legend Diamonds</h2>
        </div>
    </div>
    <div class="single-item-container">
        <section class="single-wrapper">
            <div class="container">
                <div class="grid column-2 gap-2">
                    <div class="grid-item">
                        <img src="assets/images/img.jpg" alt="" />
                    </div>
                    <div class="grid-item">
                        <ul class="item-description">
                            <li>Delivery mode: VIA UID and Username</li>
                            <li>Delivery time: 30 min</li>
                            <li>Platform: Android, IOS</li>
                            <li>Region: Global</li>
                            <li>Plubisher: Moontoon</li>
                            <li>Developer: Moontoon</li>
                            <li>Geners: MMO</li>
                        </ul>
                        <form action="#">
                            <label for="productAmount"></label>
                            <select name="productAmount" id="productAmount" class="productAmount">
                                <option value="" selected>Select Amount</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                            </select>
                            <div class="gameuserid">
                                <input type="text" name="userid" id="userid" placeholder="Enter User ID" />
                            </div>
                            <div class="gameuserid">
                                <input type="text" name="userid" id="userid" placeholder="Enter Zone ID" />
                            </div>
                            <div class="buy-button">
                                <input type="number" class="qty" value="1" />
                                <button class="btn-buy">
                                    BUY
                                    <ion-icon name="cart-outline"></ion-icon>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
        <div class="copyright">
            <div class="container">
                <p>&copy; COPYRIGHT2023. All right reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
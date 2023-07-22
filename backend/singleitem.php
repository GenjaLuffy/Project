<?php include_once 'includes/header.php'; ?>
<?php include 'connect.php'; ?>

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
                            <option value="a">Diamond</option>
                            <option value="b">Uc</option>
                            <option value="c">Coin</option>
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
<?php include_once 'includes/footer.php'; ?>
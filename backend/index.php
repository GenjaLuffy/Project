<?php include_once 'includes/header.php';
include 'connect.php';
include_once 'includes/header.php';
require_once 'displayproduct.php';
?>

<!-- Best seling image and content -->
<div class="bestselling">
    <?php display_bestselling(); ?>
</div>
<div class="bestselling">
    <?php display_product(); ?>
</div>

<div class="moreproduct">
    <div class="btn-container">
        <a href="moreproduct.php" class="moreproduct-btn">More Product <ion-icon name="arrow-forward-outline">
            </ion-icon>
        </a>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
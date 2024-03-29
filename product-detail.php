<!DOCTYPE html>
<?php
require_once "includes.php";
$wished_list_count = 0;
if(!$invt->check_item_in_existance($_GET['itemid'])) { echo "Item does not exist <a href='index.php'>click here to go home page</a>"; exit();}
if(isset($_SESSION['uid']))
$wished_list_count = $wishlist->get_wished_list_item($_SESSION["uid"]);

$sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID WHERE `InventoryItemID` =".$_GET['itemid'];
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
$category = $row['category'];
$icudrop = $row['productItemID'];
$product_info =  $row['product_information'];
$product_add_info =  $row['additional_information'];
$shipping_returns = $row['shipping_returns'];

$id_of_what_get_image =  $_GET['itemid'];


function getrelatedproducts($category9, $_id_of_what_get_image){
include "conn.php";
$sql = "SELECT * FROM `inventoryitem` WHERE `category` = ".$category9. " and InventoryItemID != ". $_id_of_what_get_image." limit 5";
$result = $mysqli->query($sql);
return $result;

}

$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<html lang="en">


<!-- molla/product-sidebar.html  22 Nov 2019 10:03:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Page</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">

    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script src="rateit.js-master\rateit.js-master\scripts\jquery.rateit.js"></script>
    <link href="//rawgit.com/gjunge/rateit.js/master/scripts/rateit.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="page-wrapper">
        <?php

         include "header-for-other-pages.php";
        ?>
             <main class="main">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                                <div class="container d-flex align-items-center">
                                        <ol class="breadcrumb">
                                                   <?php  echo breadcrumbs();  ?>
                                        </ol>

                                        <nav class="product-pager ml-auto" aria-label="Product">
                                                <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                                                        <i class="icon-angle-left"></i>
                                                        <span>Prev</span>
                                                </a>

                                                <a class="product-pager-link product-pager-next" href="product-detail?itemid=<?php  +1?>" aria-label="Next" tabindex="-1">
                                                        <span>Next</span>
                                                        <i class="icon-angle-right"></i>
                                                </a>
                                        </nav><!-- End .pager-nav -->
                                </div><!-- End .container -->
                        </nav><!-- End .breadcrumb-nav -->

                        <div class="page-content">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-9">
                                                        <div class="product-details-top">
                                                                <div class="row">
                                                                        <div class="col-md-6 main-product-cover" product-info=<?= $_GET['itemid'] ?> product-cat=<?= $row['category'] ?>>
                                                                                <div class="product-gallery">
                                                                                        <figure class="product-main-image">
                                                                                                <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($_GET['itemid'])) != null){  ?>
                                                                                                <span class="product-label label-sale">Sale</span>
                                                                                                <?php } ?>

                                                                                                <?php 
                                                                                                //if(in_array($product_obj->get_product_id($_GET['itemid']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ 
                                                                                                if(in_array($_GET['itemid'], $product_obj->get_all_product_items_that_are_less_than_one_month())) { ?>
                                                                                                <span class="product-label label-top">NEW</span>
                                                                                                <?php } ?>

                                                                                                <img id="product-zoom" src="<?= getImage($id_of_what_get_image); ?>" data-image="<?= getImage($id_of_what_get_image);?>" data-zoom-image="<?= getImage($id_of_what_get_image); ?>" alt="product image">

                                                                                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                                                                        <i class="icon-arrows"></i>
                                                                                                </a>
                                                                                        </figure><!-- End .product-main-image -->

                                                                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                                                                                <?php  $p_obj  = new ProductItem();
                                                                                                       $stmt = $p_obj->get_other_images_of_item_in_inventory($id_of_what_get_image);

                                                                                                if($stmt != null){
                                                                                                while($r = $stmt->fetch()) { ?>
                                                                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                                                                </a>
                                                                                                <?php }
                                                                                                 }
                                                                                                ?>

                                                                                      </div><!-- End .product-image-gallery -->
                                                                                </div><!-- End .product-gallery -->
                                                                        </div><!-- End .col-md-6 -->

                                                                        <div class="col-md-6">
                                                                                <div class="product-details product-details-sidebar">
                                                                                        <h1 class="product-title"><?= $row['description']?></h1><!-- End .product-title -->

                                                                                        <div class="ratings-container">

                                                                                                <div class="ratings">

                                                                                                    <div class="ratings-val" style="width: <?=$Orvi->get_rating_($_GET['itemid'])?>%"></div><!-- End .ratings-val -->
                                                                                                </div><!-- End .ratings -->
                                                                                                <a class="ratings-text" href="#product-review-link" id="review-link">( <?= $Orvi->get_rating_review_number($_GET['itemid']); ?> Reviews )</a>
                                                                                        </div><!-- End .rating-container -->
                                                                                         <?php if($promotion->check_if_item_is_in_inventory_promotion($row['InventoryItemID'])){ ?>
                                                                                        <span class="product-price" style="margin-bottom: 0px;">N<?= $promotion->get_promoPrice_price($row['InventoryItemID']) ?></span>
                                                                                        <span class="old-price">Was N<?= $promotion->get_regular_price($row['InventoryItemID']) ?></span>
                                                                                        <?php } else { ?>
                                                                                          <div class="product-price">
                                                                                            Naira  <?= $row['cost']?>
                                                                                        </div><!-- End .product-price -->
                                                                                        <?php } ?>
                                                                                        <div class="product-content">
                                                                                                <p><?= $row['small_description']?></p>
                                                                                        </div><!-- End .product-content -->

                                                                                        <div class="details-filter-row details-row-size">

                                                                                                <label>Color:</label>

                                                                                                <div class="product-nav product-nav-dots">
                                                                                                        <?php

                                                                                                            $arr_color = array();
                                                                                                            $var_obj = new Variation();
                                                                                                            $var_obj_size = new Variation();
                                                                                                            $product_obj = new ProductItem();
                                                                                                            $stmt = $var_obj->get_color_variation($product_obj->get_product_id($_GET['itemid']));
                                                                                                            $stmt2 = $var_obj_size->get_size_variation($product_obj->get_product_id($_GET['itemid']), 'green');
                                                                                                             while($row = $stmt->fetch()){
                                                                                                             $data = json_decode($row['sku'], true);
                                                                                                             array_push($arr_color, $data['color']);
                                                                                                             $arr_color = array_unique($arr_color);

                                                                                                        ?>

                                                                                                    <?php
                                                                                                       }
                                                                                                       foreach($arr_color as $color){

                                                                                                    ?>
                                                                                                     <a href="color-variation-finder.php?pid=<?=$product_obj->get_product_id($_GET['itemid'])?>&p_color=<?=$color ?>" style="background: <?= $color ?>"><span class="sr-only">Color name</span></a>
                                                                                                    <?php } ?>
                                                                                                </div><!-- End .product-nav -->
                                                                                        </div><!-- End .details-filter-row -->

                                                                                    <div class="details-filter-row details-row-size">
                                                                                           <label for="size">Size:</label>
                                                                                                <div class="select-custom">
                                                                                                                   <select name="size" id="size" class="form-control">
                                                                                                                <option value="#" selected="selected">Select a size</option>
                                                                                                                <?php
                                                                                                                  while($row2 = $stmt2->fetch()){
                                                                                                                 ?>


                                                                                                                    <option value="<?=$row2['InventoryItemID'] ?>"><?=$row2['size']?></option>
                                                                                                                       <?php }  ?>

                                                                                                        </select>
                                                                                                </div><!-- End .select-custom -->

                                                                                                <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                                                                        </div><!-- End .details-filter-row -->



                                                                                        <div class="product-details-action">
                                                                                                <div class="details-action-col">
                                                                                                        <label for="qty">Qty:</label>
                                                                                                        <div class="product-details-quantity">
                                                                                                             <form action="cart.php" method="post">
                                                                                                                     <input type="hidden" name="inventory_product_id" value="<?= $_GET['itemid'] ?>" />
                                                                                                                <input type="number" name="qty" id="qty" class="form-control" value="1" min="1" max="20" step="1" data-decimals="0" required>
                                                                                                             </form>
                                                                                                        </div><!-- End .product-details-quantity -->

                                                                                                         <a href="#" product-info ="<?=$_GET['itemid']?>" class="submit-cart btn-product btn-cart submit-cart"><span>add to cart</span></a>
                                                                                                </div><!-- End .details-action-col -->

                                                                                                <div class="details-action-wrapper">
                                                                                                        <a href="add-to-watch-list.php?itemid=<?= $_GET['itemid'] ?>" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                                                                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>

                                                                                                </div><!-- End .details-action-wrapper -->
                                                                                                   <!-- End .details-action-wrapper -->
                                                                                        </div><!-- End .product-details-action -->

                                                                                        <div class="product-details-footer details-footer-col">
                                                                                                <div class="product-cat">
                                                                                                        <span>Category:</span>
                                                                                                        <?php
                                                                                                        $obj = new Category();
                                                                                                        $stmt = $obj->get_related_categories($_GET['itemid'] );
                                                                                                        $num_count = 1;
                                                                                                        $number_of_rows = $stmt->rowCount();

                                                                                                        while($row = $stmt->fetch()){?>
                                                                                                        <a href="#"><?= $row['categoryName'] ?></a>
                                                                                                        <?php
                                                                                                        if ($num_count < $number_of_rows) {
                                                                                                                echo ", ";
                                                                                                            }
                                                                                                         ?>

                                                                                                        <?php $num_count++; }?>

                                                                                                </div><!-- End .product-cat -->


                                                                                                        <a href="product-review.php?inventory-item=<?=$_GET['itemid']?>&product_id=<?=$icudrop?>" class="btn-product " title="Compare"><span>Add a Review</span></a>

                                                                                                <div class="social-icons social-icons-sm">
                                                                                                        <span class="social-label">Share:</span>
                                                                                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                                                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                                                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                                                                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                                                                                </div>
                                                                                        </div><!-- End .product-details-footer -->
                                                                                </div><!-- End .product-details -->
                                                                        </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                        </div><!-- End .product-details-top -->

                                                        <div class="product-details-tab">
                                                                <ul class="nav nav-pills justify-content-center" role="tablist">
                                                                        <li class="nav-item">
                                                                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (<?=$Orvi->get_rating_review_number($_GET['itemid'])?>)</a>
                                                                        </li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                                                                <div class="product-desc-content">
                                                                                        <h3>Product Information</h3>
                                                                                        <p>    <?= $product_info?>   </p>
                                                                                </div><!-- End .product-desc-content -->
                                                                        </div><!-- .End .tab-pane -->
                                                                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                                                                <div class="product-desc-content">
                                                                                        <h3>Information</h3>
                                                                                        <?= $product_add_info ?>
                                                                                </div><!-- End .product-desc-content -->
                                                                        </div><!-- .End .tab-pane -->
                                                                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                                                                <div class="product-desc-content">
                                                                                        <h3>Delivery & returns</h3>
                                                                                        <p><?= $shipping_returns  ?></p>
                                                                                </div><!-- End .product-desc-content -->
                                                                        </div><!-- .End .tab-pane -->
                                                                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">

                                                                       <?php
                                                                        $obj = new Review();
                                                                        ?>
                                                                        <div class="reviews">
                                                                            <span class="slider-loader" style="visibility: hidden;"></span>
                                                                                        <h3>Reviews (<?= $obj->get_total_review_of_product($_GET['itemid']);    ?>)</h3>
                                                                                    <div id="main-review">

                                                                                    </div>


                                                                                </div><!-- End .reviews -->
                                                                        <?php ?>

                                                                        </div><!-- .End .tab-pane -->
                                                                </div><!-- End .tab-content -->
                                                        </div><!-- End .product-details-tab -->

                                                        <!--<h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                                                        <?php //include "also-like.php" ?>
                                                </div><!-- End .col-lg-9 -->

                                                <aside class="col-lg-3">
                                                        <div class="sidebar sidebar-product">
                                                                <div class="widget widget-products">
                                                                        <h4 class="widget-title">Related Product</h4><!-- End .widget-title -->

                                                                        <div id="products" class="products">




                                                                        </div><!-- End .products -->


                                                                        <?php

                                                                          $obj2 = new Category();
                                                                          $r = $obj2->get_category_by_id($_GET['itemid']);
                                                                        ?>
                                                                        <a href="<?='category.php?catid='.$r ?>" class="btn btn-outline-dark-3"><span>View More Products</span><i class="icon-long-arrow-right"></i></a>
                                                                </div><!-- End .widget widget-products -->

                                                                <div class="widget widget-banner-sidebar">
                                                                        <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                                                        <div class="banner-sidebar banner-overlay">
                                                                                <a href="#">
                                                                                        <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                                                                </a>
                                                                        </div><!-- End .banner-ad -->
                                                                </div><!-- End .widget -->
                                                        </div><!-- End .sidebar sidebar-product -->
                                                </aside><!-- End .col-lg-3 -->
                                        </div><!-- End .row -->

                                </div><!-- End .container -->
                        </div><!-- End .page-content -->
                </main><!-- End .main -->


        <footer class="footer">
               <?php include "footer.php"; ?>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
       <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <?php include "mobile-menue-index-page.php"; ?>
    <!-- Sign in / Register Modal -->
    <?php include "login-modal.php"; ?>

    <!-- Plugins JS File -->
    <?php include "jsfile.php"; ?>

     
 
</body>
 <script src="assets/js/loadrelateditems.js"></script>

<!-- molla/product-sidebar.html  22 Nov 2019 10:03:37 GMT -->
</html>
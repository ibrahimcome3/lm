<?php
session_start();
//echo getpromotionending(1);
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
    require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\class\Category.php';
    require_once  'C:\wamp64\www\lm\class\Review.php';
    require_once  'C:\wamp64\www\lm\class\ProductItem.php';
    require_once  'C:\wamp64\www\lm\class\Variation.php';
    require_once  "C:\wamp64\www\lm\class\Promotion.php";
    include 'breadcrumps.php';
    $Orvi = new Review();
$var_obj = new Variation();
$p = new ProductItem();
$product_obj = new ProductItem();
$promotion = new Promotion();
$cat = new Category();
?>

<!DOCTYPE html>
<html lang="en">


<!-- molla/index-13.html  22 Nov 2019 09:59:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LM - LagosMarket</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
    <link rel="stylesheet" href="assets/css/demos/demo-13.css">
</head>

<body>
    <div class="page-wrapper">

         <?php include 'header.php'; ?>

        <main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(index_pics/slide-23.png);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Trade-In Offer</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Pure heaven Grape Juice <br>Can
                                        <span>
                                            <sup class="font-weight-light">from</sup>
                                            <span class="text-primary">N14,900<sup></sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(index_pics/slide-2-cloves.png);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Spices in Lagos Market</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Original Cloves <br>
                                        <span>
                                            <sup class="font-weight-light line-through">N5000</sup>
                                            <span class="text-primary">N4500<sup></sup></span> <span class="intro-subtitle">per kg</span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.html" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(index_pics/slide-2-oak-perfume.png);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Perfumes</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Original Oak <br>
                                        <span>
                                            <sup class="font-weight-light line-through">N35,000</sup>
                                            <span class="text-primary">N29,000<sup></sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.html" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-4"></div><!-- End .mb-2 -->

            <div class="container">
                <h2 class="title text-center mb-2">Explore Popular Categories</h2><!-- End .title -->

                <div class="cat-blocks-container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-13/cats/1.jpg" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="index_pics/spices.PNG" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Spices</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-13/cats/3.jpg" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-13/cats/4.jpg" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="index_pics/c.JPG" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Clotheing</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/demos/demo-13/cats/6.jpg" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Furniture</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

            <div class="mb-2"></div><!-- End .mb-2 -->

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="index_pics/b6.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white"><a href="#">Weekend Sale</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Lighting <br>& Accessories <br><span>25% off</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-sm-6 col-lg-3 order-lg-last">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="index_pics/b5.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white"><a href="#">Smart Offer</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Anniversary <br>Special <br><span>15% off</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-3 -->

                    <div class="col-lg-6">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="index_pics/b4.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Clothes Trending <br>Spring Collection 2019 <br><span>from $12,99</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-3 -->
            
            <div class="bg-light pt-3 pb-5">
                <div class="container">
                    <div class="heading heading-flex heading-border mb-3">
                        <div class="heading-left">
                            <h2 class="title">Hot Deals Products</h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                       <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="hot-all-link" data-toggle="tab" href="#hot-all-tab" role="tab" aria-controls="hot-all-tab" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hot-elec-link" data-toggle="tab" href="#hot-elec-tab" role="tab" aria-controls="hot-elec-tab" aria-selected="false">Electronics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hot-furn-link" data-toggle="tab" href="#hot-furn-tab" role="tab" aria-controls="hot-furn-tab" aria-selected="false">Furniture</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hot-clot-link" data-toggle="tab" href="#hot-clot-tab" role="tab" aria-controls="hot-clot-tab" aria-selected="false">Clothes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hot-acc-link" data-toggle="tab" href="#hot-acc-tab" role="tab" aria-controls="hot-acc-tab" aria-selected="false">Accessories</a>
                                </li>
                            </ul>
                       </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel" aria-labelledby="hot-all-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <?php
                                $sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID where productitem.productID in ( SELECT `productID` FROM `promooffering` left join productitem on promooffering.`product_id` = productitem.`productID` ) ORDER BY RAND() LIMIT 7";
                                $result = $mysqli->query($sql);


                                ?>
                                <?php function getpromotionending($invitemid){

                                     include "conn.php";
                                     $sql = "select * from inventoryitem left join (select `enddate`, `product_id`, promotionid from promooffering left join promotion on promooffering.promotionid_ = promotion.promotionid) as t on inventoryitem.productItemID = t.`product_id` left join productitem on inventoryitem.productItemID = productitem.productID where `InventoryItemID`= ".$invitemid;
                                     $result = $mysqli->query($sql);
                                     if($result){
                                     if($result->num_rows > 0){
                                     $row = mysqli_fetch_array($result);
                                     $now = new DateTime();
                                     $later = new DateTime($row['enddate']);

                                     $difference = $now->diff($later);

                                     //var_dump($now);
                                     //var_dump($later);
                                     //var_dump($difference);
                                     //var_dump($compare);
                                    // echo "<b>".$difference->h."</b>";
                                     if((int)$difference->y == 0 and (int)$difference->m == 0 and (int)$difference->d == 0 and (int)$difference->h < 24){
                                         return (int)$difference->h;
                                     }
                                    }
                                }else{ return 0;}

                                }



                                ?>
                               <?php
                                $id_of_what_get_image = null;
                                while($row = mysqli_fetch_array($result)){
                                  
                               ?>
                                <div class="product">
                                    <figure class="product-media">
                                    <!--    <span class="product-label label-top">Top</span>    -->
                                       <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                       <span class="product-label label-sale">Sale</span>
                                       <?php
                                       }


                                        if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                        <span class="product-label label-new">New</span>
                                        <?php } ?>
                                        <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                            <img src="<?php if ($p->get_image($row['InventoryItemID']) !== null) echo $p->get_image($row['InventoryItemID']); else echo "e.jpeg"; ?>" alt="Product image" class="product-image">
                                        </a>
                                        <?php if(getpromotionending($row['InventoryItemID'])){  ?>
                                        <div class="product-countdown" data-until="+<?=getpromotionending($row['InventoryItemID'])?>h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                        <?php } ?>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                            <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html"><?=$row['description'] ?></a></h3><!-- End .product-title -->
                                        <?php if($promotion->check_if_item_is_in_inventory_promotion($row['InventoryItemID'])){ ?>
                                        <div class="product-price">
                                            <span class="new-price">N<?= $promotion->get_promoPrice_price($row['InventoryItemID']) ?></span>
                                            <span class="old-price">Was N<?= $promotion->get_regular_price($row['InventoryItemID']) ?></span>
                                        </div><!-- End .product-price -->
                                        <?php }else{ ?>
                                        <div class="product-price">
                                        <span class="new-price">N<?= $row['cost'] ?></span>
                                        </div><!-- End .product-price -->
                                        <?php } ?>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                               <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                        </div><!-- End .rating-container -->

                                       <div class="product-nav product-nav-dots">

                                            <?php
                                             $arr_color = array();
                                             $stmt_ = $var_obj->get_color_variation($product_obj->get_product_id($row['InventoryItemID']));
                                             while($row_ = $stmt_->fetch()){
                                             $data = json_decode($row_['sku'], true);
                                             array_push($arr_color, $data['color']);
                                             $arr_color = array_unique($arr_color);
                                             }
                                             foreach($arr_color as $color){
                                            ?>
                                                <a href="color-variation-finder.php?pid=<?=$product_obj->get_product_id($row['InventoryItemID'])?>&p_color=<?=$color ?>" style="background: <?= $color ?>"><span class="sr-only">Color name</span></a>

                                            <?php } ?>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                                  <div  class="product-image-gallery">
                                      <?php  $p_obj  = new ProductItem();
                                                  $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);
                                                  if($stmt != null){
                                                  while($r = $stmt->fetch()) { ?>
                                                      <a class="product-gallery-item active" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                            <img src="<?= $r['image_path'] ?>" alt="product side">
                                                      </a>
                                                <?php }
                                                    }
                                                ?>
                                                    </div>
                                </div><!-- End .product -->

                                 <?php } ?>





                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="hot-elec-tab" role="tabpanel" aria-labelledby="hot-elec-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>

                                <?php

                                $sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID where productitem.productID in  ( SELECT `productID` FROM `promooffering` left join productitem on promooffering.`product_id` = productitem.`productID` ) and `category` in (select `cat_id` from category_new where `cat_path` like '20%')";
                                 $result = $mysqli->query($sql);
                                ?>
                                     <?php while($row = mysqli_fetch_array($result)){
                                     ?>
                                <div class="product">
                                    <figure class="product-media">
                                    <!--    <span class="product-label label-top">Top</span>    -->
                                       <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                       <span class="product-label label-sale">Sale</span>
                                       <?php
                                       }
                                       if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                       <span class="product-label label-new">New</span>
                                       <?php } ?>
                                        <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                            <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                        </a>
                                        <?php if(getpromotionending($row['InventoryItemID'])){  ?>
                                        <div class="product-countdown" data-until="+<?=getpromotionending($row['InventoryItemID'])?>h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                        <?php } ?>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                            <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html"><?=$row['description'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">N<?= $row['cost'] - ($row['cost']* 0.10) ?></span>
                                            <span class="old-price">Was N<?= $row['cost'] ?></span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                               <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">

                                            <?php
                                             $arr_color = array();
                                             $stmt_ = $var_obj->get_color_variation($product_obj->get_product_id($row['InventoryItemID']));
                                             while($row_ = $stmt_->fetch()){
                                             $data = json_decode($row_['sku'], true);
                                             array_push($arr_color, $data['color']);
                                             $arr_color = array_unique($arr_color);
                                             }
                                             foreach($arr_color as $color){
                                            ?>
                                                <a href="color-variation-finder.php?pid=<?=$product_obj->get_product_id($row['InventoryItemID'])?>&p_color=<?=$color ?>" style="background: <?= $color ?>"><span class="sr-only">Color name</span></a>

                                            <?php } ?>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                 <?php } ?>

                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="hot-furn-tab" role="tabpanel" aria-labelledby="hot-furn-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                       <?php

                                $sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID where productitem.productID in  ( SELECT `productID` FROM `promooffering` left join productitem on promooffering.`product_id` = productitem.`productID` ) and `category` in (select `cat_id` from category_new where `cat_path` like '37%')";
                                 $result = $mysqli->query($sql);
                                ?>
                                      <?php while($row = mysqli_fetch_array($result)){ ?>
                                <div class="product">
                                    <figure class="product-media">
                                            <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                         <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                            <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                        </a>
                                        <?php if(getpromotionending($row['InventoryItemID'])){  ?>
                                        <div class="product-countdown" data-until="+<?=getpromotionending($row['InventoryItemID'])?>h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                        <?php } ?>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                            <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html"><?=$row['description'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">N<?= $row['cost'] - ($row['cost']* 0.10) ?></span>
                                            <span class="old-price">Was N<?= $row['cost'] ?></span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                               <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">

                                            <?php
                                             $arr_color = array();
                                             $stmt_ = $var_obj->get_color_variation($product_obj->get_product_id($row['InventoryItemID']));
                                             while($row_ = $stmt_->fetch()){
                                             $data = json_decode($row_['sku'], true);
                                             array_push($arr_color, $data['color']);
                                             $arr_color = array_unique($arr_color);
                                             }
                                             foreach($arr_color as $color){
                                            ?>
                                                <a href="color-variation-finder.php?pid=<?=$product_obj->get_product_id($row['InventoryItemID'])?>&p_color=<?=$color ?>" style="background: <?= $color ?>"><span class="sr-only">Color name</span></a>

                                            <?php } ?>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                             <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                                </div><!-- End .product -->
                                 <?php } ?>





                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="hot-clot-tab" role="tabpanel" aria-labelledby="hot-clot-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                    <?php

                                $sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID where productitem.productID in  ( SELECT `productID` FROM `promooffering` left join productitem on promooffering.`product_id` = productitem.`productID` ) and `category` in (select `cat_id` from category_new where `cat_path` like '16%')";
                                 $result = $mysqli->query($sql);
                                ?>
                                      <?php while($row = mysqli_fetch_array($result)){ ?>
                                <div class="product">
                                    <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                         <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                            <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                        </a>
                                        <?php if(getpromotionending($row['InventoryItemID'])){  ?>
                                        <div class="product-countdown" data-until="+<?=getpromotionending($row['InventoryItemID'])?>h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                        <?php } ?>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                            <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                         <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html"><?=$row['description'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">N<?= $row['cost'] - ($row['cost']* 0.10) ?></span>
                                            <span class="old-price">Was N<?= $row['cost'] ?></span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                             <div class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item active" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                                </div><!-- End .product -->
                                 <?php } ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="hot-acc-tab" role="tabpanel" aria-labelledby="hot-acc-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                    <?php

                                $sql = "SELECT * from productitem left join inventoryitem on productitem.productID = inventoryitem.productItemID where productitem.productID in  ( SELECT `productID` FROM `promooffering` left join productitem on promooffering.`product_id` = productitem.`productID` ) and `category` in (select `cat_id` from category_new where `cat_path` like '36%')";
                                 $result = $mysqli->query($sql);
                                ?>
                                      <?php while($row = mysqli_fetch_array($result)){ ?>
                                <div class="product">
                                    <figure class="product-media">
                                       <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                        <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                            <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                        </a>
                                        <?php if(getpromotionending($row['InventoryItemID'])){  ?>
                                        <div class="product-countdown" data-until="+<?=getpromotionending($row['InventoryItemID'])?>h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                        <?php } ?>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                            <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" product-info ="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                         <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html"><?=$row['description'] ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">N<?= $row['cost'] - ($row['cost']* 0.10) ?></span>
                                            <span class="old-price">Was N<?= $row['cost'] ?></span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                 <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                           <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                                </div><!-- End .product -->
                                 <?php } ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-5 -->

            <div class="mb-3"></div><!-- End .mb-3 -->

            <div class="container electronics">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">Electronics</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="elec-new-link" data-toggle="tab" href="#elec-new-tab" role="tab" aria-controls="elec-new-tab" aria-selected="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="elec-featured-link" data-toggle="tab" href="#elec-featured-tab" role="tab" aria-controls="elec-featured-tab" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="elec-best-link" data-toggle="tab" href="#elec-best-tab" role="tab" aria-controls="elec-best-tab" aria-selected="false">Best Seller</a>
                            </li>
                        </ul>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>

                            <?php
                            $sql = "select * from inventoryitem where `category` in (select `cat_id` from category_new where `cat_path` like '20%' ) ORDER BY RAND() LIMIT 7";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>
                            <div class="product">
                                <figure class="product-media">
                                       <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->

                            <?php }  ?>



                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="elec-featured-tab" role="tabpanel" aria-labelledby="elec-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>

                            <?php
                            $sql = "select * from inventoryitem right JOIN featured on featured.`inventoryItemId` = inventoryitem.InventoryItemID left join category_new on category_new.cat_id = inventoryitem.category where category_new.cat_path like '20%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                     <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                     </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item active" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="elec-best-tab" role="tabpanel" aria-labelledby="elec-best-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                             <?php
                            $sql = "select * from inventoryitem inner join category_new on  category_new.cat_id = inventoryitem.category where `InventoryItemID` in (select `InventoryItemID` from lm_order_line group by `InventoryItemID` having count(`InventoryItemID`)> 0) and category_new.cat_path like '20%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-3 -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner banner-overlay banner-overlay-light">
                            <a href="#">
                                <img src="assets/images/demos/demo-13/banners/banner-4.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-none d-sm-block"><a href="#">Spring Sale is Coming</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">All Smart Watches <br>Discount <br><span class="text-primary">15% off</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link banner-link-dark">Discover Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="assets/images/demos/demo-13/banners/banner-5.png" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white  d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Headphones Trending <br>JBL Harman <br><span>from $59,99</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-1"></div><!-- End .mb-1 -->

            <div class="container furniture">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">Furniture</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="furn-new-link" data-toggle="tab" href="#furn-new-tab" role="tab" aria-controls="furn-new-tab" aria-selected="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="furn-featured-link" data-toggle="tab" href="#furn-featured-tab" role="tab" aria-controls="furn-featured-tab" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="furn-best-link" data-toggle="tab" href="#furn-best-tab" role="tab" aria-controls="furn-best-tab" aria-selected="false">Best Seller</a>
                            </li>
                        </ul>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="furn-new-tab" role="tabpanel" aria-labelledby="furn-new-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                     <?php
                            $sql = "select * from inventoryitem where `category` in (select `cat_id` from category_new where `cat_path` like '37%' ) ORDER BY RAND() LIMIT 7";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>


                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="furn-featured-tab" role="tabpanel" aria-labelledby="furn-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                              <?php
                            $sql = "select * from inventoryitem right JOIN featured on featured.`inventoryItemId` = inventoryitem.InventoryItemID left join category_new on category_new.cat_id = inventoryitem.category where category_new.cat_path like '37%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info ="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                     <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>


                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="furn-best-tab" role="tabpanel" aria-labelledby="furn-best-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                             <?php
                            $sql = "select * from inventoryitem inner join category_new on  category_new.cat_id = inventoryitem.category where `InventoryItemID` in (select `InventoryItemID` from lm_order_line group by `InventoryItemID` having count(`InventoryItemID`)> 0) and category_new.cat_path like '37%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                        <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                       <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>


                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-3 -->

            <div class="container clothing ">
                <div class="heading heading-flex heading-border mb-3">
                    <div class="heading-left">
                        <h2 class="title">Clothing & Apparel</h2><!-- End .title -->
                    </div><!-- End .heading-left -->

                   <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="clot-new-link" data-toggle="tab" href="#clot-new-tab" role="tab" aria-controls="clot-new-tab" aria-selected="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="clot-featured-link" data-toggle="tab" href="#clot-featured-tab" role="tab" aria-controls="clot-featured-tab" aria-selected="false">Featured</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="clot-best-link" data-toggle="tab" href="#clot-best-tab" role="tab" aria-controls="clot-best-tab" aria-selected="false">Best Seller</a>
                            </li>
                        </ul>
                   </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="clot-new-tab" role="tabpanel" aria-labelledby="clot-new-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                              <?php
                            $sql = "select * from inventoryitem where `category` in (select `cat_id` from category_new where `cat_path` like '16%' ) ORDER BY RAND() LIMIT 15";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                       <div  class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="clot-featured-tab" role="tabpanel" aria-labelledby="clot-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>


                                 <?php
                            $sql = "select * from inventoryitem inner join category_new on  category_new.cat_id = inventoryitem.category where `InventoryItemID` in (select `InventoryItemID` from lm_order_line group by `InventoryItemID` having count(`InventoryItemID`)> 0) and category_new.cat_path like '20%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                    <?php
                                                    }
                                                    if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span class="product-label label-new">New</span>
                                                    <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                   <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->>
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                            <div id="product-zoom-gallery" class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>


                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="clot-best-tab" role="tabpanel" aria-labelledby="clot-best-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                             <?php
                            $sql = "select * from inventoryitem inner join category_new on  category_new.cat_id = inventoryitem.category where `InventoryItemID` in (select `InventoryItemID` from lm_order_line group by `InventoryItemID` having count(`InventoryItemID`)> 0) and category_new.cat_path like '20%'";
                            $result = $mysqli->query($sql);
                            $getallproduct = 4;

                            while($row = mysqli_fetch_array($result)){  ?>

                            <div class="product">
                                <figure class="product-media">
                                        <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                        <span class="product-label label-sale">Sale</span>
                                        <?php
                                        }
                                        if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                        <span class="product-label label-new">New</span>
                                        <?php } ?>
                                    <a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
                                        <img src="<?= $p->get_image($row['InventoryItemID']) ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>

                                        <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" product-info ="<?=$row['InventoryItemID']?>" class="submit-cart btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                     <div class="product-cat">
                                            <a href="category.php?catid=<?=$cat->get_category_by_id($row['category'])?>"><?= $cat->get_parent_category_name($row['InventoryItemID']) ?></a>
                                        </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>"><?= $row['small_description'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                       <?= $row['cost'] ?>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: <?=$Orvi->get_rating_($row['InventoryItemID'])?>%"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( <?= $Orvi->get_rating_review_number($row['InventoryItemID']); ?> Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                                         <div class="product-image-gallery">
                                                <?php  $p_obj  = new ProductItem();
                                                $stmt = $p_obj->get_other_images_of_item_in_inventory_not_1($row['InventoryItemID']);

                                                if($stmt != null){
                                                while($r = $stmt->fetch()) { ?>
                                                <a class="product-gallery-item" href="#" data-image="<?= $r['image_path'] ?>" data-zoom-image="<?= $r['image_path'] ?>">
                                                        <img src="<?= $r['image_path'] ?>" alt="product side">
                                                </a>
                                                <?php }
                                                                                                 }
                                                ?>

                                            </div>
                            </div><!-- End .product -->
                              <?php } ?>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-3"></div><!-- End .mb-3 -->

            <div class="container">
                <h2 class="title title-border mb-5">Shop by Brands</h2><!-- End .title -->
                <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1280": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/7.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="cta cta-horizontal cta-horizontal-box bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2xl-5col">
                            <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                            <p class="cta-desc text-white">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-3xl-5col">
                            <form action="newslatter.php" method="POST">
                                <div class="input-group">
                                    <input type="email" name="newsletter" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                        </div><!-- End .col-lg-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->


        </main><!-- End .main -->

        <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rocket"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>When you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-13.js"></script>


    <script>
        $(document).ready(function(){

            $("a.submit-cart").click(function(e){
                var product_id = $(this).attr( "product-info" );
                 //inventory_product_id
                //inventory_product_id
                $.ajax({
                    method: "POST",
                    url: "test3.php",
                    data: { inventory_product_id: product_id, qty: 1 }
                })
                    .done(function( msg ) {
                        $(".cart-count").text(msg);
                        console.log( "Data Saved: " + msg );
                    });
                e.preventDefault(); // Submit the form
            });
        });
    </script>
</body>


<!-- molla/index-13.html  22 Nov 2019 09:59:31 GMT -->
</html>
<?php


?>
      <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left" style="margin: 20px;">
                      <!-- 1 <div class="header-dropdown">
                            <a href="#">Usd</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">Eur</a></li>
                                    <li><a href="#">Usd</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                       <!-- 2 </div><!-- End .header-dropdown -->

                     <!-- 2    <div class="header-dropdown">
                            <a href="#">Eng</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                     <!-- 2    </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +2348051067944</a></li>
                                    <li><a href="wishlist.php"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <?php if(!isset($_SESSION["uid"])){ ?>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                   <?php }else{ ?>
                                   <li><a href="logout.php" data-toggle="modal"><i class="icon-user"></i>Log Out</a></li>
                                    <?php } ?>
                             </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.php" class="logo">
                            <img src="assets/logo/lagosmarketngcom-logos_black2.png" alt="Lagos Market" width="205" >
                        </a>

                        <nav class="main-nav">

                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                            <!--
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <i class="icon-random"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                    </li>
                                </ul>
                              <!--
                                <div class="compare-actions">
                                    <a href="#" class="action-link">Clear All</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                </div>

                              -->
                        <!--    </div><!-- End .dropdown-menu -->
                       <!-- </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="cart_.php" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;   ?></span>
                            </a>
                            <?php
                             if(isset($_SESSION['cart']) and count($_SESSION['cart']) > 0){   ?>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                <?php
                                $arr = array();
                                foreach($_SESSION['cart'] as $key => $value){
                                 $stmt = $pdo->prepare('SELECT * FROM inventoryitem WHERE InventoryItemID = ?');
                                 $stmt->execute([$key]);
                                 $row_ = $stmt->fetch(PDO::FETCH_ASSOC);
                                 array_push($arr, $row_['InventoryItemID']);
                                 }

                                 $tags = implode(',', $arr);
                                 $sql = "SELECT * FROM inventoryitem WHERE InventoryItemID in ($tags)";
                                 $stmt = $pdo->query($sql);

                                 $sum = 0;
                                 while($row_ = $stmt->fetch()){
                                       if($promotion->check_if_item_is_in_inventory_promotion($row_['InventoryItemID'])){
                                        $row_['cost'] = $promotion->get_promoPrice_price($row_['InventoryItemID']);
                                       }

                                 ?>
                                <div class="product">

                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html"><?= $row_['small_description'] ?></a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty"><?= $_SESSION['cart'][$row_['InventoryItemID']] ?></span>
                                                &nbsp;x N&nbsp;<?= $row_['cost'] ?>
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                             <a href="product-detail?itemid=<?=$row_['InventoryItemID'] ?>" class="product-image">
                                                <img src="<?= getImage($row_['InventoryItemID']); ?>" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                <?php
                                $sum += $_SESSION['cart'][$row_['InventoryItemID']] *  $row_['cost'];

                                } ?>

                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">N&nbsp;<?= $sum ?></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart_.php" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.php" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                            <?php } ?>
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->
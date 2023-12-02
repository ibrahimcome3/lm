<!DOCTYPE html>
<?php
session_start();
//var_dump($_SESSION['cart']);
include "conn.php";

function getImage($id_of_what_get_image){
    include "conn.php";
    $sql = "SELECT `InventoryItemID`, `quantityOnHand`, `cost`, `reorderQuantity`, `productItemID`, `date_added`, `description`, `size`, `color`, `image`, `category` FROM `inventoryitem` WHERE `InventoryItemID` =".$id_of_what_get_image;
    $result = $mysqli->query($sql);
    $row = mysqli_fetch_array($result);
    return "data_img/".$row['image'];
}


// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {

    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_keys($products_in_cart));
            var_dump($array_to_question_marks);
    $r = $result = $mysqli->query('SELECT * FROM inventoryitem WHERE InventoryItemID IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    //$stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array

    // Calculate the subtotal
    while ($product = mysqli_fetch_array($result)) {

        $subtotal += (float)$product['cost'] * (int)$products_in_cart[$product['InventoryItemID']];
    }
}

?>
<html lang="en">


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
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
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
      hr {
    border: none;
    border-top: 1px solid #ebebeb;
    /* margin: 3rem auto 2.5rem; */
}

.label-top {
    color: #fff;
    background-color: #7dd2ea;
}

.product-label- {
    font-weight: 400;
    font-size: 1.6rem;
    line-height: 1.6rem;
    letter-spacing: -.01em;
    padding: .5rem .9rem;
    min-width: 45px;
    text-align: center;
}

hr {
    border: none;
    border-top: 1px solid #ebebeb;
    margin: 5px;
}

tr, td{
    margin: 2px;
    padding: 1px;
}

td{
    min-width: 60px;
}

.table-padding-5px{
    padding-left: 5px;
}

    </style>
</head>

<body>
    <div class="page-wrapper">
       <?php include "header1.php"; ?>

        <main class="main">

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
              <?php
               if ($products_in_cart) {
                    $array_to_question_marks = implode(',', array_keys($products_in_cart));
                    $result = $mysqli->query('SELECT * FROM inventoryitem WHERE InventoryItemID IN (' . $array_to_question_marks . ')');
                    //while($row = mysqli_fetch_assoc($result)){
                        // var_dump($row);
               //}
               }
               ?>
            <div class="page-content">
            	<div class="cart">
                    <div class="container">
                        <div><h3>Thank you for your order</h3></div>

                         <div class="deal-top">
                               You will recive a confirmation by email to verify your order.

            			      </div>

                    	<div class="row">
                    		<div class="col-lg-7">
                        <form  action="update_cart.php" method="post" class="update_cart_form" >

                            <table class="table table-cart table-mobile">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody><?php if(empty($result)){ ?>
                                            <tr class="summary-shipping-row">
                                                <td style="text-align:center;">You have no products added in your Shopping Cart</td>
                                            </tr>
                                            <?php }else{ ?>
                                         <?php
                                         while($row = mysqli_fetch_assoc($result)){ ?>
                                            <?php //var_dump($row); ?>
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="<?php echo getImage($row['InventoryItemID']); ?>" alt="Product image">
                                                        </a>
                                                    </figure>

                                                    <h3 class="product-title">
                                                        <a href="#"><?=$row['description']?></a>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="price-col"><?="&#x20A6;". $row['cost']?></td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <label  name="quantity-<?=$row['InventoryItemID']?>" class="form-control"><?= $products_in_cart[$row['InventoryItemID']]?></label>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td class="total-col"><?="&#8358; ".$row['cost'] * $products_in_cart[$row['InventoryItemID']]?></td>

                                        </tr>
                                        <?php }} ?>
                                    </tbody>

                                </table><!-- End .table table-wishlist -->
                                </form>


                    			<div class="cart-bottom">
                                   <!--
                                <div class="cart-discount">
                        				<form action="#">
                        					<div class="input-group">
                        						<input type="text" class="form-control" required placeholder="coupon code">
                        						<div class="input-group-append">
                                                    <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                                </div><!-- .End .input-group-append -->
                    					  <!-- 	</div>--> <!-- End .input-group -->
                        			   <!-- 	</form>  -->
                        		   <!-- 	</div>--> <!-- End .cart-discount -->

                        			<button   class="update_cart btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
                    			</div><!-- End .cart-bottom -->
                    		</div><!-- End .col-lg-9 -->
                    		<aside class="col-lg-5">
                    			<div class="summary summary-cart">
                    				<h3>Order detail</h3><!-- End .summary-title -->
                                    <p><b>Order No:</b> 1100001.</p>
                                    <p><b>Order date:</b> December 2, 2023.</p>
                                    <hr/>
                    				<table>
                    				    <input type="hidden" id="subtotal" value=<?=$subtotal?> />
                    					<tbody>

                    						<tr>
                    							<td><b>Billing Information:</b></td>
                    							<td>&nbsp;</td>
                                            </tr>
                                            <tr>
                    							<td class="table-padding-5px">Order Subtotal Amount:</td>
                                            	<td><?="&#8358; ".$subtotal?></td>

                    						</tr>
                                             <tr>
                    							<td class="table-padding-5px">Tax:</td>
                                            	<td><?="&#8358; ".$subtotal * 0.07?></td>

                    						</tr> <tr>
                    							<td class="table-padding-5px">Shipping:</td>
                                            	<td><?="&#8358; "."250"?></td>

                    						</tr>
                                            <tr >
                    							<td style="padding-left: 10px;">Order Total:</td>
                                            	<td style="color: #CC1C08"><?="&#8358; ".($subtotal + ($subtotal * 0.07) + 250)?></td>

                    						</tr>
                    					   <!-- End .summary-shipping-row -->
                                        	<tr style="border-top: 1px solid #B6CACC; ">
                                            	<td style="padding-top: 13px;">
                                                     <label class="label-top product-label-"><i>Pay on delivery</i></label>
                                        		</td>
                    						</tr><!-- End .summary-shipping-row -->


                                        						<tr>
                                        							<td><b>Shipping Information:</b></td>
                                        							<td>&nbsp;</td>
                                                                                        </tr>
                                                                                        <tr>
                                        							<td class="table-padding-5px"><b>Address:</b> NDIC Lagos Establishment Office
                                                                        Address: 21/22 Marina Rd, Lagos Island 102273, Lagos</td>

                                        						</tr>
                    					</tbody>
                    				</table><!-- End .table table-summary -->
                                     <br/>
                    				<a href="checkout.php" class="btn btn-outline-primary-2 btn-order btn-block">FINALIZE&nbsp;ORDER</a>
                    			</div><!-- End .summary -->

                    			<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    		</aside><!-- End .col-lg-3 -->
                    	</div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
                <div class="container">
                	<div class="row">
                		<div class="col-sm-6 col-lg-3">
                			<div class="widget widget-about">
                				<img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                				<div class="social-icons">
                					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                					<a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                				</div><!-- End .soial-icons -->
                			</div><!-- End .widget about-widget -->
                		</div><!-- End .col-sm-6 col-lg-3 -->

                		<div class="col-sm-6 col-lg-3">
                			<div class="widget">
                				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                				<ul class="widget-list">
                					<li><a href="about.html">About Molla</a></li>
                					<li><a href="#">How to shop on Molla</a></li>
                					<li><a href="#">FAQ</a></li>
                					<li><a href="contact.html">Contact us</a></li>
                					<li><a href="login.html">Log in</a></li>
                				</ul><!-- End .widget-list -->
                			</div><!-- End .widget -->
                		</div><!-- End .col-sm-6 col-lg-3 -->

                		<div class="col-sm-6 col-lg-3">
                			<div class="widget">
                				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                				<ul class="widget-list">
                					<li><a href="#">Payment Methods</a></li>
                					<li><a href="#">Money-back guarantee!</a></li>
                					<li><a href="#">Returns</a></li>
                					<li><a href="#">Shipping</a></li>
                					<li><a href="#">Terms and conditions</a></li>
                					<li><a href="#">Privacy Policy</a></li>
                				</ul><!-- End .widget-list -->
                			</div><!-- End .widget -->
                		</div><!-- End .col-sm-6 col-lg-3 -->

                		<div class="col-sm-6 col-lg-3">
                			<div class="widget">
                				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                				<ul class="widget-list">
                					<li><a href="#">Sign In</a></li>
                					<li><a href="cart.html">View Cart</a></li>
                					<li><a href="#">My Wishlist</a></li>
                					<li><a href="#">Track My Order</a></li>
                					<li><a href="#">Help</a></li>
                				</ul><!-- End .widget-list -->
                			</div><!-- End .widget -->
                		</div><!-- End .col-sm-6 col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
            	<div class="container">
            		<p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
            		<figure class="footer-payments">
            			<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
            		</figure><!-- End .footer-payments -->
            	</div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>
                    <?php include("login-form-dynamic.php");  ?>

                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <script>
     $(document).ready(function(){
            $("button.update_cart").click(function(event){
                $("form.update_cart_form").submit();
                event.preventDefault() // Submit the form
            });


            $("button.btn-remove").click(function(event){
                   event.preventDefault();
                   var del_title =  $(this).attr('cart-item-id');
                   var item_to_removed = $(this).closest('tr');
                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: 'remove_product_from_cart.php',
                    dataType: "json",
                    data: {remove:del_title},
                    success: function(data) {
                         item_to_removed.remove();
                         location.reload(true);
                    }
                });
            });

        var expressshipping, shipping;
        expressshipping = $("#expressship");
        shipping = $("#shipping");
        if ($('#free-shipping').is(':checked')) {
                 alert(1);
        }

        if ($('#express-shipping').is(':checked')) {
                alert(2);
        }
        $('#free-shipping').add('#express-shipping').on('click', function(event){
                   var subtotal =jQuery(".summary-total").find("td:eq(1)");
                if ($(this).is(':checked')) {
                    subtotal.text(parseInt($("#subtotal").val()) + parseInt($(this).val()));
                    }
                //event.preventDefault() // Submit the form
            });
        //$("#free-shipping #express-shipping").click(function(event){
         //       if ($(this).is(':checked')) {alert(1);}
                //event.preventDefault() // Submit the form
         //   });

        });


    </script>
</body>


<!-- molla/cart.html  22 Nov 2019 09:55:06 GMT -->
</html>
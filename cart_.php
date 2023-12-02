<!DOCTYPE html>
<?php
session_start();
$_SESSION['next_url'] = 'shipping-address-selection.php';//$_SERVER['REQUEST_URI'];

unset($_SESSION['cart_final']);
//var_dump($_SESSION['cart_final']);
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
    require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\class\Category.php';
    require_once  'C:\wamp64\www\lm\class\Review.php';
    require_once  'C:\wamp64\www\lm\class\ProductItem.php';
    require_once  'C:\wamp64\www\lm\class\Variation.php';
    require_once  "C:\wamp64\www\lm\class\Promotion.php";
    include 'breadcrumps.php';

    $promotion = new Promotion();
    $cat = new Category();




function getImage($id_of_what_get_image){
    include "conn.php";
    $sql = "SELECT * FROM `inventoryitem` WHERE `InventoryItemID` =".$id_of_what_get_image;
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
           // var_dump($array_to_question_marks);
    $r = $result = $mysqli->query('SELECT * FROM inventoryitem WHERE InventoryItemID IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    //$stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array

    // Calculate the subtotal
    while ($product = mysqli_fetch_array($result)) {

        if($promotion->check_if_item_is_in_inventory_promotion($product['InventoryItemID'])){
        $subtotal += (float)$promotion->get_promoPrice_price($product['InventoryItemID']) * (int)$products_in_cart[$product['InventoryItemID']];
        }else{
        $subtotal += (float)$product['cost'] * (int)$products_in_cart[$product['InventoryItemID']];
        }
    }
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>
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
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
</head>

<body>
    <div class="page-wrapper">
        <br>
        <?php  include "header1.php"; ?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                      <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
              <?php
               if ($products_in_cart) {
                    //echo "yes";
                    $array_to_question_marks = implode(',', array_keys($products_in_cart));
                    $sql =  'SELECT * FROM inventoryitem left join productitem on inventoryitem.`productItemID` = productitem.`productID` WHERE inventoryitem.InventoryItemID IN (' . $array_to_question_marks . ')';
                    //echo $sql;
                    $result = $mysqli->query($sql);

                    //var_dump($result);

                    //while($row = mysqli_fetch_assoc($result)){
                        // var_dump($row);
               //}
               }
               ?>
            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
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
                                         $p = new ProductItem();
                                         while($row = mysqli_fetch_assoc($result)){ ?>
                                            <?php //var_dump($row);
                                                 $product_id_cost = $row['InventoryItemID'];

                                                 //echo $product_id."<br/>";
                                                if (isset($_SESSION['cart_final']) && is_array($_SESSION['cart_final'])) {
                                                 //echo "yes";
                                                 if (array_key_exists($product_id_cost, $_SESSION['cart_final'])) {

                                                        // Product exists in cart so just update the quanity
                                                        if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
                                                        $_SESSION['cart_final'][$product_id_cost] = $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']];
                                                        }else{
                                                        $_SESSION['cart_final'][$product_id_cost] = $row['cost'] * $products_in_cart[$row['InventoryItemID']];
                                                        }
                                                 }
                                                    else {
                                                        // Product is not in cart so add it
                                                        if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
                                                        $_SESSION['cart_final'][$product_id_cost] = $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']];
                                                        }else{
                                                        $_SESSION['cart_final'][$product_id_cost] = $row['cost'] * $products_in_cart[$row['InventoryItemID']];
                                                        }
                                                    }
                                                } else {
                                                     echo "no";
                                                    // There are no products in cart, this will add the first product to cart
                                                    if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
                                                    $_SESSION['cart_final'] = array($product_id_cost =>  $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']]);
                                                    }else{
                                                    $_SESSION['cart_final'] = array($product_id_cost =>  $row['cost'] * $products_in_cart[$row['InventoryItemID']]);
                                                    }
                                                    //var_dump( $_SESSION);
                                                }


                                            ?>
										<tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="<?php if ($p->get_image($row['InventoryItemID']) !== null) echo $p->get_image($row['InventoryItemID']); else echo "e.jpeg"; ?>" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#"><?=$row['description']?></a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
                                            <?php if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){  ?>

                                            <td class="price-col"><?="&#x20A6;". $promotion->get_promoPrice_price($row['InventoryItemID'])?></td>
                                            <?php }else{ ?>

                                            <td class="price-col"><?="&#x20A6;". $row['cost']?></td>
                                            <?php  } ?>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" name="quantity-<?=$row['InventoryItemID']?>" class="form-control" value="<?= $products_in_cart[$row['InventoryItemID']]?>" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <?php if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){  ?>
                                            <td class="total-col"><?="&#8358; ".$promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']]?></td>
                                            <?php }else{ ?>
                                            <td class="total-col"><?="&#8358; ".$row['cost'] * $products_in_cart[$row['InventoryItemID']]?></td>
                                            <?php } ?>
                                            <td class="remove-col"><button class="btn-remove" cart-item-id=<?=$row['InventoryItemID']?> ><i class="icon-close"></i></button></td>
										</tr>
                                        <?php }} //var_dump($_SESSION['cart_final']);     ?>
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
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                				    <input type="hidden" id="subtotal" value=<?=$subtotal?> />
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td><?="&#8358; ".$subtotal?></td>
	                						</tr><!-- End .summary-subtotal -->
	                						<tr class="summary-shipping">
	                							<td>Shipping:</td>
	                							<td>&nbsp;</td>
	                						</tr>



	                						<tr class="summary-shipping-row">
	                							<td>
													<div class="custom-control custom-radio">
														<input value="1300" type="radio" id="free-shipping" name="shipping" checked = "checked" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Shipping</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td><?="&#8358; ". 1300 ?></td>
                                               <input type="hidden" id="shipping" value="1300">

	                						</tr><!-- End .summary-shipping-row -->

	                					   <!-- End .summary-shipping-row -->

	                						<tr class="summary-shipping-row">
	                							<td>
	                								<div class="custom-control custom-radio">
														<input value="3000" type="radio" id="express-shipping" name="shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div><!-- End .custom-control -->
	                							</td>
	                							<td>&#8358; 3000</td>
                                                <input type="hidden" id="expressship" value="3000">
	                						</tr><!-- End .summary-shipping-row -->



	                						<tr class="summary-total">
	                							<td>Total:</td>
	                							<td id="subtotal" orginal-subtotal=<?=$subtotal?>><?=$subtotal ?></td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="checkout-process-validation.php" id="proceed" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
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
    <?php include "login-module.php"; ?>

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
              $("#express-shipping").click(function() {
                   if ($('#express-shipping').is(':checked')) {
               //var newvalue = parseInt($("#subtotal").val()) + parseInt($("#express-shipping").val());
               //$("td#subtotal").text(newvalue);
               $("#proceed").attr('href', "checkout.php?express_shipping=3000");

        }

           });

                   $("#free-shipping").click(function() {
                    if ($('#free-shipping').is(':checked')) {
               //var newvalue = parseInt($("#subtotal").val()) + parseInt($("#free-shipping").val());
               //$("td#subtotal").text(newvalue);
               $("#proceed").attr('href', "checkout.php?shipping=1300");

        }
       });
        if ($('#free-shipping').is(':checked')) {

                var newvalue = parseInt($("#subtotal").val()) + parseInt($("#free-shipping").val());

                $("td#subtotal").text(newvalue);
                var href = $("#proceed").attr('href');

                $("#proceed").attr('href', href+"?shipping=1300");
        }

        if ($('#express-shipping').is(':checked')) {
               var newvalue = parseInt($("#subtotal").val()) + parseInt($("#express-shipping").val());
               var href = $("#proceed").attr('href');
               $("td#subtotal").text(newvalue);
               $("#proceed").attr('href', href+"?express_shipping=3000");

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
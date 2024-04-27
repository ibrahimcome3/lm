<!DOCTYPE html>
<?php include 'includes.php'; ?>

<html lang="en">


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cart</title>
    <?php include "htlm-includes.php/metadata.php"; ?>
</head>

<body>
    <div class="page-wrapper">
        <br/>
           <?php

         include "header-for-other-pages.php";
        ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <center><h4>Step 2 of 3</h4></center>
            	<div class="checkout">
                    <div class="container">
            			<form action="registration-process.php" method="post">
                        	<div class="row">
                        		<div class="col-lg-9">
                        			<h2 class="checkout-title">Registration Continued</h2><!-- End .checkout-title -->
                        				<div class="row">
                        					<div class="col-sm-6">
                        						<label>First Name *</label>
                        						<input type="text" name="firstname" class="form-control" required>
                        					</div><!-- End .col-sm-6 -->

                        					<div class="col-sm-6">
                        						<label>Last Name *</label>
                        						<input type="text" name="lastname" class="form-control" required>
                        					</div><!-- End .col-sm-6 -->
                        				</div><!-- End .row -->

                						<label>Street address *</label>
                						<input type="text" class="form-control" name="streetaddress1" placeholder="House number and Street name" required>
                						<input type="text" class="form-control" name="streetaddress2" placeholder="Appartments, suite, unit etc ..." required>

                						<div class="row">
                        					<div class="col-sm-6">
                        						<label>Town / City *</label>
                        						<input type="text" name="city" class="form-control" required>
                        					</div><!-- End .col-sm-6 -->

                        					<div class="col-sm-6">
                        						<label>State *</label>
                        						<input type="text" name="state" class="form-control" required>
                        					</div><!-- End .col-sm-6 -->
                        				</div><!-- End .row -->

                        				<div class="row">
                        					<div class="col-sm-6">
                        						<label>Postcode / ZIP *</label>
                        						<input type="text" name="zip" class="form-control">
                        					</div><!-- End .col-sm-6 -->

                        					<div class="col-sm-6">
                        						<label>Phone *</label>
                        						<input type="tel" name="phone" class="form-control" required>
                        					</div><!-- End .col-sm-6 -->
                        				</div><!-- End .row -->
                        				
                        				<div class="row">			
                        				<div class=" col-sm-6">
                                       

                                          
                                           
                                                    <label for="sortby" style="color: blue;">Select shipping area *</label>
                                                   
                                                        <select name="shipment" id="shipment" class="form-control">
                                                            <option shipment-price="0.00" value="-1">select shipping
                                                                cost</option>
                                                            <?php
                                                            $ship = new Shipment();
                                                            $s = $ship->get_shipment_area();
                                                            while ($row = mysqli_fetch_array($s)) {
                                                                ?>

                                                                <option shipment-price="<?= $row['area_cost'] ?>"
                                                                    value="<?= $row['area_id'] ?>">
                                                                    <?= $row['area_name'] ?>
                                                                    <?= "(N" . $row['area_cost'] . ")" ?>
                                                                </option>
                                                            <?php } ?>
                                                        </select>

                                         </div>
                                         
                                         </div>

                    					<label>Email address *</label>

            							<input type="email" name="email"  value="<?php if(isset($_SESSION['r_email'])){echo $_SESSION['r_email'];}?>" class="form-control" readonly>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="is_this_your_Shipping_address" class="custom-control-input" id="checkout-diff-address">
                                            <label class="custom-control-label" for="checkout-diff-address">is this your Shipping address?</label>
                                        </div><!-- End .custom-checkbox -->

                                         <div><button type="submit" class="btn btn-outline-dark-3">NEXT</button></div>
                        		</div><!-- End .col-lg-9 -->

                        	</div><!-- End .row -->
            			</form>
                    </div><!-- End .container -->
                </div><!-- End .checkout -->
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

    <?php include "jsfile.php"; ?>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
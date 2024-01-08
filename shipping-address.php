<!DOCTYPE html>
<?php
session_start();
include "conn.php";
include 'breadcrumps.php';
?>
<html lang="en">


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shipping address</title>
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
    <link rel="stylesheet" href="assets/css/demos/demo-13.css">
</head>

<body>
    <div class="page-wrapper">
        <br/>
        <?php include "header1.php"; ?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                          <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
                    <div class="container">
            			<form action="checkout-process.php" method="post">
                        	<div class="row">
                        		<div class="col-lg-9">
                        		    <div>
                        		        <a>+ Add another shipping address</a>
                        		    </div>
                        			<h2 class="checkout-title">Shipping address</h2><!-- End .checkout-title -->
                                    	<div class="row">
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
                                        </div>
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
    <!-- Sign in / Register Modal -->
    <?php include "login-modal.php"; ?>
    <!-- Sign in / Register Modal -->
    <!-- Plugins JS File -->
     <?php include "jsfile.php"; ?>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
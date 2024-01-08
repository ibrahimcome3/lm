<!DOCTYPE html>

<?php
session_start();
 if(!isset($_SESSION['INCOMPLETE-REGISTRATION']['uid'])){
    var_dump($_SESSION);
    //header("location: index.php");
} ?>
<html lang="en">



<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Address addition page</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
        <link rel="manifest" href="assets/images/icons/site.html">
        <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
        <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
        <!-- Plugins CSS File -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Main CSS File -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css"> 
</head>

<body>
        <div class="page-wrapper">
                <br/>
                <?php  include "header-for-other-pages.php"; ?>
                <main class="main">
                        <nav aria-label="breadcrumb" class="breadcrumb-nav">
                                <div class="container">
                                       
                                </div><!-- End .container -->
                        </nav><!-- End .breadcrumb-nav -->

                        <div class="page-content">
                        	<div class="checkout">
                                        <div class="container">
                                            <?php if(isset($error)) echo "<h4 style='color: red'>".$error."</h4>"; ?>
                    <form action="small-registration-completion-page-process.php" method="POST">
                        	<div class="row">
                        		<div class="col-lg-9">
                        			<h4 class="widget-title">Customer Registration</h4><!-- End .checkout-title -->
                        				<div class="row">
                        					<div class="col-sm-6">
                        						<label>First Name *</label>
                        						<input type="text" name="firstname"  class="form-control" required>
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
                                        <input type="hidden" value="<?= $_SESSION['INCOMPLETE-REGISTRATION']['uid'] ?>" name="customer_id" >

                    					<label>Email address *</label>
            							<input type="email"  name="email" value=<?php echo $_SESSION['INCOMPLETE-REGISTRATION']['email'] ?> class="form-control" readonly>

                                        <label>Password *</label>
            							<input type="password" name="password" type="password" value=<?php echo  $_SESSION['INCOMPLETE-REGISTRATION']['password'] ?> class="form-control" required>
                                           <button type="submit" class="btn btn-primary btn-round">
                                                					<span>Submit</span><i class="icon-long-arrow-right"></i>
                                                			 </button>
                        		</div><!-- End .col-lg-9 -->

                        	</div><!-- End .row -->
            			</form>
                                        </div><!-- End .container -->
                                </div><!-- End .checkout -->
                        </div><!-- End .page-content -->
                </main><!-- End .main -->

    <footer class="footer">
               <?php include "footer.php" ?>

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


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
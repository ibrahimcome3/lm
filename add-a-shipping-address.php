<?php
session_start();
include 'breadcrumps.php';
//var_dump($_SESSION['cart']);
include "conn.php";

if(!empty($_POST)){
    $customer_id = $_SESSION['uid'];
    $streetaddress1=$_POST['streetaddress1'];
    $streetaddress2=$_POST['streetaddress2'];
    $country= 'NIGERIA';
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];

    if(empty($city)){
    $error =   "City field is empty";

    }else if(empty($zip)){
    $error =   "Zip field is empty";

    }else if(empty($customer_id)){
    header("Location: login.php");
    exit(5);

    }else if(empty($state)){
    $error =   "State field is empty";

    }else if(empty($streetaddress1)){
    $error =   "Address line one is empty";

    }else if(empty($streetaddress2)){
    $error =   "Address line toe is empty";


    }else{
    try{
      $sql = "INSERT INTO `shipping_address` (`shipping_address_no`, `customer_id`, `address1`, `address2`, `state`, city,  `zip`) VALUES (NULL, '$customer_id', '$streetaddress1', '$streetaddress2', '$state', '$city', '$zip');";
       $res = $mysqli->query($sql);

    if($res){
        header("Location: shipping-address-selection.php");
    }else{
        throw new Exception('Could not submit your form. pls try again later');
    }
    }catch(Exception $e)
    {
        echo $e->getMessage();
        exit();

    }
    }



    var_dump($_POST);
    /*
    else{
    $sql = "UPDATE `customer` SET `customer_fname`='$fname',`customer_lname`='$lname', `customer_city`= '$city',`customer_email`= '$email',`customer_address1`='$streetaddress1',`customer_address2`='$streetaddress2',`customer_country`='$country',`customer_state`='$state',`customer_phone`= '$phone_number',`customer_zip`='$zip',`customer_status`='MEMBER',`password`='$password',`profile_image`='anonymous.jpg' WHERE customer_id = $customer_id ";
    echo $sql;
    $res = $mysqli->query($sql);
    if($res){
        header("Location: complete-registration-confermation-page.php");
    }

    }
    */
}

?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Customer Shippinh address registration page</title>
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

    <style>
    .product-label-.label-top- {
    color: #fff;
    background-color: #3366FF;
    }
    .product-label- {

    font-weight: 600;
    font-size: 1.8rem;
    line-height: 1.6rem;
    letter-spacing: -.01em;
    padding: 0.5rem 0.9rem;
    min-width: 45px;
    text-align: center;

    }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <?php
         include "header-for-other-pages.php";
        ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                          <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page pb-8  pb-md-12 pt-lg-17 pb-lg-17">
            	<div class="container">
            	    <?php if(isset($error)){ ?>
                     <div class="row error"><?= $error; ?></div>
                    <?php } ?>
                 <div class="row">
                        		<div class="col-lg-9">
                        		    <form action="" method="post">
                        			<h2 class="checkout-title product-label- label-top- ">Customer Address form</h2><!-- End .checkout-title -->
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

                        				</div><!-- End .row -->
                                        <button type="submit" class="btn btn-primary btn-round">
                                                					<span>Submit</span><i class="icon-long-arrow-right"></i>
                                                			 </button>
                                    </form>
                        		</div><!-- End .col-lg-9 -->

                        	</div><!-- End .row -->



            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->

        <footer class="footer">

                <?php include "footer.php"; ?>

        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->
        <?php include "mobile-menue.php"; ?>

    <!-- Sign in / Register Modal -->
    <?php include "login-module.php"; ?>

    <!-- Sign in / Register Modal -->


    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>
<!DOCTYPE html>
<?php
require_once "includes.php";
var_dump($_SESSION);
if(!empty($_POST)){
  $customer_id = $_SESSION['small-registration']['new-customer-id'];
  $fname= $_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $streetaddress1=$_POST['streetaddress1'];
  $streetaddress2=$_POST['streetaddress2'];
  $country= 'NIGERIA';
  $state=$_POST['state'];
  $city=$_POST['city'];
  $phone_number=$_POST['phone'];
  $zip=$_POST['zip'];

  if(empty($city) || empty($zip) ||  empty($customer_id) || empty($password) || empty($fname) || empty($lname) || empty($email) || empty($country) || empty($state) || empty($streetaddress1) || empty($streetaddress2)){
  $error =   "some field missing";
  //exit(0);
  }else{
  $sql = "UPDATE `customer` SET `customer_fname`='$fname',`customer_lname`='$lname', `customer_city`= '$city',`customer_email`= '$email',`customer_address1`='$streetaddress1',`customer_address2`='$streetaddress2',`customer_country`='$country',`customer_state`='$state',`customer_phone`= '$phone_number',`customer_zip`='$zip',`customer_status`='MEMBER',`password`='$password',`profile_image`='anonymous.jpg' WHERE customer_id = $customer_id ";
  echo $sql;
  $res = $mysqli->query($sql);
  if($res){
    header("Location: complete-registration-confermation-page.php");
  }

  }
}

?>
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
                                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

                    					<label>Email address *</label>
            							<input type="email" name="email" value=<?php if(isset($_SESSION['small-registration'])){ echo($_SESSION['small-registration']['new-customer-email']); } ?> class="form-control" required>

                                        <label>Password *</label>
            							<input type="password" name="password" type="password" value=<?php if(isset($_SESSION['small-registration'])){ echo($_SESSION['small-registration']['new-customer-password']); } ?> class="form-control" required>
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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.hoverIntent.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/superfish.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
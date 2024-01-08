<?php
include "includes.php";

if(isset($_SESSION['cart']) and count($_SESSION['cart']) > 0){
$er = Array();
        $sql = "SELECT * FROM `shipping_address` WHERE `customer_id` =  '" . $_SESSION['uid'] ."'";
        $result = $mysqli->query($sql);
        if($result){
        $check2 = mysqli_num_rows($result);
        if ($check2 > 0)
        {
        }elseif($check2 == 0){
             echo "you do not have a shipping address<br/>";
             echo "<a href='add-a-shipping-address.php'>Click here to add an address</a>";
             exit();
        }

}
}else{
     echo "<a href='index.php'>Click here to shop. shopping cart empty</a>";
     exit();
}


?>
<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LM - Shopping address selection page </title>
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
    .product-label-123{
    font-weight: 400;
    font-size: 1.3rem;
    line-height: 1.6rem;
    letter-spacing: -.01em;
    padding: .5rem .9rem;
    min-width: 45px;
    text-align: center;
    color: #fff;
    background-color: #66CC66;

    }

    </style>
</head>

<body>
    <div class="page-wrapper">
        <br/>
<?php include "header-for-other-pages.php"; ?>       
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                            <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="container">
                <form action="final-order-confirmation-page.php" method="post">
                    <a href="add-a-shipping-address.php"><span class="product-label-123 label-new" style="position: relative;">Add a new address</span></a>
                    <table class="table table-hover table-sm">

                         <caption>Shipping Address</caption>
                        <tr>
                            <th  scope="col"><b>Select</b></th>
                            <th scope="col"><b>Address</b></th>
                            <th scope="col"><b>Make Changes</b></th>
                        </tr>
                  <?php  if ($check2 > 0)
                 {
                   while($row = $result->fetch_array()){
                 ?>
                        <tr>

                            <td><input name="ship-address" type="radio" value="<?= $row['shipping_address_no'] ?>" checked="checked"> </td>
                            <td><?php     echo ucwords($row['address1']." ".$row['address2']." <b>".$row['state']."</b> (Zip:".$row['zip'].")");              ?></td>
                            <td> <a href="edit-shipping_address.php?sno=<?= $row['shipping_address_no'] ?>">Edit</a>   </td>
                        </tr>
         <?php
                }
         }
           ?>

                    </table>




          <button type="submit" class="btn btn-outline-dark btn-rounded">Next</button>

                </form>
                    <br/>
            </div><!-- End .login-page section-bg -->
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


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>
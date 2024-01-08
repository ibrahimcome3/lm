<!DOCTYPE html>
 <?php
require_once "includes.php";
  ?>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order Detail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
	.table.table-summary tbody td {
    padding: 5px;
    height: 10px;
    border-bottom: .1rem solid #ebebeb;
}
	</style>
</head>

<body>
    <div class="page-wrapper">
    <div class="container">

               <?php

         include "header-for-other-pages.php";
        ?>

                   </div>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                          <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
             <div class="container">
            <div class="login-page" >
                <div class="container">
				<div class="table-responsive small">
				                <p>Order #<?= $_GET['order_id'] ?></p>
										<table class="table table-striped table-sm table table-summary">
										  <thead>
											<tr>
											  <th scope="col">Item</th>
											  <th scope="col">Description</th>
											  <th scope="col">Price</th>
											  <th scope="col">Quantity</th>
											  <th scope="col">Status</th>
											  <th scope="col">Delete</th>
											  
											</tr>
										  </thead>
										  <tbody class="table-summary table">
										  <?php $order_id = $_GET['order_id'] ?>
										<?php $stmt = $orders->get_order_item($_GET['order_id']);
												while($row = $stmt->fetch()){
													//var_dump($row);
										?>
										
											<tr>
											  <td>
											  <div>
												<figure>
													<a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
														<img src="<?= $invt->get_product_image($row['InventoryItemID']) ?>" width="70" alt="post">
													</a>
												</figure>
													<?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'] )) != null){  ?>
                                                    <span style="margin-left: 10px;color: green; background-color: yellow;">On Sale</span>
                                                    <?php } ?>
													<?php if(in_array((int)$row['InventoryItemID'], $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                    <span>NEW</span>
                                                    <?php } 
													//echo $row['InventoryItemID'];
													//var_dump($product_obj->get_all_product_items_that_are_less_than_one_month());
													?>
												 
											   </div>
										      </td>
											  <td><div>
													
													<a href="product-detail?itemid=<?=$row['InventoryItemID'] ?>">
													<?= $invt->get_description($row['InventoryItemID']) ?>
													</a>
												</div></td>
											  <td> <?= $orders->get_order_item_price($row['InventoryItemID'], $order_id) ?></td>
											  <td><?= $row['quwantitiyofitem'] ?></td>
											  <td><?= $row['status'] ?></td>
											  <?php $s = "delete-order-item.php?oid=".$_GET['order_id']."&oitem=".$row['InventoryItemID']; ?>
											  <td><a onclick="return confirm('Are you sure?');" href="<?php echo $s; ?>" style="color: blue;">remove</a></td>
											</tr>
											
											<?php } ?>
										</tbody>
										</table>	
											
					</div>
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
            </div>
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

    <?php include "jsfile.php"; ?>
</body>
</html>
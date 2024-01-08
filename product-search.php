<?php
require_once "includes.php";
$string = "XXXXX";
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
if(isset($_GET['q'])){
	$p = $_GET['q'];
}else{
	$p = '';
}
$no_of_records_per_page = 25;
$offset = ($pageno-1) * $no_of_records_per_page;
$sql = "SELECT * FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where lower(small_description) LIKE \"%$p%\" or lower(description) like \"%$p%\";";
$sql_ = "SELECT count(*) as c FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where lower(small_description) LIKE \"%$p%\" or lower(description) like \"%$p%\";";
$stmt = $pdo->query($sql);

$total_pages_sql = $sql_;

$result = mysqli_query($mysqli,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


$limit = 25;
$paginationPrev="";
$paginationnext="";
$prev = $pageno - 1;                          //previous page is page - 1
$next = $pageno + 1;
$initial_page = ($pageno-1) * $limit;
$lastpage = ceil($total_pages/$limit);
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Search</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
</head>

<body>
    <div class="page-wrapper">
         <?php include "header-for-other-pages.php" ?>

        <main class="main">
            <!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                         <?php  echo breadcrumbs();  ?>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
				<?php if($total_rows == 0){
					echo "<center><span style=\"
						padding-top: .25rem;
						padding-right: .5rem;
						padding-left: .5rem;
						margin-bottom: 1rem;
						background-color: black; 
						padding-bottom: .25rem;color: Yellow\">No result for your search term <b>$p</b></span></center>";
				} ?>
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="toolbox">
                                <div class="toolbox-left">
                                    <div class="toolbox-info">

                                        <?php
                                        $items_per_page=$no_of_records_per_page;
                                        $displayed_items = ($total_rows - $items_per_page*($pageno - 1)) > $items_per_page ? $items_per_page*$pageno : $total_rows;
                                        //echo "Display results " . $displayed_items . "/" . $total_rows;
                                        ?>
                                        Showing <span><?= $displayed_items ?> of <?= $total_rows ?></span> search results
                                    </div><!-- End .toolbox-info -->
                                </div><!-- End .toolbox-left -->
                                <!--
                                <div class="toolbox-right">
                                    <div class="toolbox-sort">
                                        <label for="sortby">Sort by:</label>
                                        <div class="select-custom">
                                            <select name="sortby" id="sortby" class="form-control">
                                                <option value="popularity" selected="selected">Most Popular</option>
                                                <option value="rating">Most Rated</option>
                                                <option value="date">Date</option>
                                            </select>
                                        </div>
                                    </div><!-- End .toolbox-sort -->

                               <!-- </div><!-- End .toolbox-right -->
                               
                            </div><!-- End .toolbox -->
                               <?php $inventory_items = new InventoryItem();
                                     $p = new ProductItem();
                                     $category = new Category();
                                     //$selected_category_for_selection = implode(",", $inventory_items->decript_string($_GET['arr']));
                                     //$stmt = $inventory_items->get_multiple_inventory_items_product2(implode(",", $inventory_items->decript_string($_GET['arr'])));
                                if( isset($_GET['arr'])  && $_GET['arr'] == '0'){
                                $stmt = $inventory_items->get_all_drinks();
                                }else{
                              //  $stmt = $inventory_items->get_multiple_inventory_items_product2($sql, $starting_limit, $limit);
                                }
                                ?>
                            <div class="products mb-3">
                                <div class="row justify-content-center">
                                       <?php
                                       while ($row = $stmt->fetch()) {

                                       ?>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                  <?php if($promotion->check_if_item_is_in_promotion($product_obj->get_product_id($row['InventoryItemID'])) != null){  ?>
                                                  <span class="product-label label-sale">Sale</span>
                                                  <?php } ?>

                                                  <?php if(in_array($product_obj->get_product_id($row['InventoryItemID']), $product_obj->get_all_product_items_that_are_less_than_one_month())){ ?>
                                                  <span class="product-label label-top">NEW</span>
                                                  <?php } ?>
                                                <a href="product-detail.php?itemid=<?=$row['InventoryItemID']?>">
                                                    <img src="<?= $p->get_image($row['InventoryItemID']); ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="<?= $p->get_image($row['InventoryItemID']) ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="#" class="submit-cart btn-product btn-cart" product-info="<?=$row['InventoryItemID']?>"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?= $category->get_categorie_name($row['category']); ?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html"><?= $row['description']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <?= "Naira ". $row['cost']?>
                                                </div><!-- End .product-price -->
                                                 <?php
                                                    $obj = new Review();
                                                 ?>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: <?=$obj->get_rating_($row['InventoryItemID'])?>%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->

                                                    <span class="ratings-text">( <?= $obj->get_total_review_of_product($row['InventoryItemID'])?> Reviews )</span>
                                                </div><!-- End .rating-container -->
                                                  <!--
                                                <div class="product-nav product-nav-thumbs">
                                                    <a href="#" class="active">
                                                        <img src="assets/images/products/product-4-thumb.jpg" alt="product desc">
                                                    </a>
                                                    <a href="#">
                                                        <img src="assets/images/products/product-4-2-thumb.jpg" alt="product desc">
                                                    </a>

                                                    <a href="#">
                                                        <img src="assets/images/products/product-4-3-thumb.jpg" alt="product desc">
                                                    </a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                                      <?php
                                       }
                                       ?>


                                </div><!-- End .row -->



                            </div><!-- End .products -->


                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <?php
                                    $paginationPrev .= "";
                                        $paginationnext .= "";
                                        if ($pageno > 1){   $paginationPrev .="<li class='page-item active' aria-current='page'><a class='page-link' href='{$_SERVER['PHP_SELF']}?catid=DRINKS&pageno={$prev}'>prev</a></li>"; }else{ $paginationPrev .="<span>prev</span>";}
                                        if ($pageno < $total_pages){   $paginationnext .="<li class='page-item active' aria-current='page'><a class='page-link' href='category.php?catid=DRINKS&pageno={$next}'>Next</a></li>"; }else{ $paginationnext .="<span>Next</span>";}
                                    $skipped = false;
                                    echo $paginationPrev;
                                    ?>
                                    <?php for($page_number = 1; $page_number<= $total_pages; $page_number++) {   ?>
                                    <?php
                                    if ($page_number < 3 || $total_pages- $page_number < 5 || abs($pageno - $page_number) < 3) {
                                           if ($skipped)
                                            echo '<li class="page-item active" aria-current="page"><span> ... </span></li>';
                                           $skipped = false;
                                          // echo "<a href='test2.php?pageno=" . $page_number . "'>" . $page_number . "</a>";
                                       ?>
                                    <li class="page-item active" aria-current="page"><a class='page-link' href="<?=$_SERVER['REQUEST_URI']?>&pageno=<?=$page_number?>"><?=$page_number?></a></li>
                                    <?php
                                         }else {
                                        $skipped = true;
                                        }
                                    }
                                     ?>


                                    <li class="page-item-total" style="margin-right: 10px">of <?= $total_pages." "?> </li>
                                    <?php echo $paginationnext; ?>
                                </ul>
                            </nav>
                        </div><!-- End .col-lg-9 -->
             
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
            <?php include "footer.php"; ?>
        </footer><!-- End .footer -->
    </div>

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <?php include "mobile-menue-index-page.php"; ?>
    <!-- Sign in / Register Modal -->
    <?php include "login-modal.php"; ?>





    <!-- Main JS File -->

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-13.js"></script>
    <script src="login.js"></script>
 
    <!-- Main JS File -->


     <script>
        $(document).ready(function(){
            //$(".pagination span").css('margin-right', '10px');
        $("a.submit-cart").click(function(e){
        var product_id = $(this).attr( "product-info" );
         alert("adding: "+product_id );
                 //inventory_product_id
                //inventory_product_id
        $.ajax({
            method: "POST",
            url: "test3.php",
            data: { inventory_product_id: product_id, qty: 1 }
                })
                    .done(function( msg ) {
                        $(".cart-count").text(msg);
                        console.log( "Data Saved: " + msg );
                    });
                e.preventDefault();
            });
        });
    </script>

</body>



</html>

<?php
    function decript_string($string){
           $string2 = explode(",",$string);
           foreach ($string2 as $key => $value) {
            if (strlen($value) === 0) {
                unset($string2[$key]);
              }
           }
           return(array_unique($string2));
    }
?>
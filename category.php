<?php
    session_start();
    //if((!isset($_GET['arr'])))
   // header("location: http://localhost/lm/category.php?arr=2");
    require_once  'C:\wamp64\www\lm\class\Conn.php';
     require_once  'C:\wamp64\www\lm\conn.php';
    require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\class\Category.php';
    require_once  'C:\wamp64\www\lm\class\ProductItem.php';
    require_once  'C:\wamp64\www\lm\class\Review.php';
    require_once  'C:\wamp64\www\lm\class\Promotion.php';
    include 'breadcrumps.php';
    $product_obj = new ProductItem();
    $promotion = new Promotion();
    $var= array();
    $var1= array();
    $options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
      $host = 'localhost';
      $db   = 'lm';
      $user = 'root';
      $pass = '';
      $port = "3306";
      $charset = 'utf8mb4';
      $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
         $pdo = new \PDO($dsn, $user, $pass, $options);
         $db = $pdo;
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
/************************************************************************************************/
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 25;
$offset = ($pageno-1) * $no_of_records_per_page;

/************************************************************************************************/

$n = sizeof($_GET);

//var_dump($_GET);
if(sizeof($_GET) === 1){
 $sql = "SELECT * FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where inventoryitem.category in (SELECT `cat_id` FROM category_new WHERE `cat_path` LIKE '%".$_GET['catid']."%')";
 //$stmt = $pdo->query($sql);
 //$row = $stmt->fetch();
 }

 if(isset($_GET['catid'])){
  if(isset($_GET['category'])){
       $sql = "SELECT * FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where inventoryitem.category in (". implode(", ", $_GET['category']) .")";
 $stmt = $pdo->query($sql);

 $sql_ = "SELECT count(*) FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where inventoryitem.category in (". implode(", ", $_GET['category']) .")";
 }else{
   $sql = "select * from inventoryitem left join productitem on productitem.productID = inventoryitem.productItemID where inventoryitem.category in (SELECT cat_id FROM `category_new` WHERE JSON_EXTRACT(`json_`, '$.roots[0]') = '".$_GET['catid']."')";
    $stmt = $pdo->query($sql);
    $sql_ = "select count(*) from inventoryitem left join productitem on productitem.productID = inventoryitem.productItemID where inventoryitem.category in (SELECT cat_id FROM `category_new` WHERE JSON_EXTRACT(`json_`, '$.roots[0]') = '".$_GET['catid']."')";
 }
 }
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

        //next button




 if(isset($_GET['catid'])){
  if(isset($_GET['category'])){
       $sql = "SELECT * FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where inventoryitem.category in (". implode(", ", $_GET['category']) .") LIMIT " . $initial_page . ',' . $limit;
 $stmt = $pdo->query($sql);
 $sql_ = "SELECT count(*) FROM `inventoryitem`INNER join productitem on inventoryitem.productItemID = productitem.productID left join brand on productitem.brand = brand.brandID where inventoryitem.category in (". implode(", ", $_GET['category']) .")";
 }else{
   $sql = "select * from inventoryitem left join productitem on productitem.productID = inventoryitem.productItemID where inventoryitem.category in (SELECT cat_id FROM `category_new` WHERE JSON_EXTRACT(`json_`, '$.roots[0]') = '".$_GET['catid']."') LIMIT " . $initial_page . ',' . $limit;
    $stmt = $pdo->query($sql);
    $sql_ = "select count(*) from inventoryitem left join productitem on productitem.productID = inventoryitem.productItemID where inventoryitem.category in (SELECT cat_id FROM `category_new` WHERE JSON_EXTRACT(`json_`, '$.roots[0]') = '".$_GET['catid']."')";
 }
 }
 // echo $sql;
?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Category</title>
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
                                        Showing <span><?= $displayed_items ?> of <?= $total_rows ?></span> Products
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
                                                    <a href="#" class="btn-product btn-cart" product-info="<?=$row['InventoryItemID']?>"><span>add to cart</span></a>
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
                                    <li class="page-item active" aria-current="page"><a class='page-link' href="category.php?catid=DRINKS&pageno=<?=$page_number?>"><?=$page_number?></a></li>
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
                        <aside class="col-lg-3 order-lg-first">
                            <div class="sidebar sidebar-shop">
                                <div class="widget widget-clean">
                                    <label>Filters:</label>
                                    <a href="#" class="sidebar-filter-clear">Clean All</a>
                                </div><!-- End .widget widget-clean -->
                                 <a href="http://localhost/lm/category.php?arr=0&arrysize=&arrybrand=#">Drinks (<?= $inventory_items->get_all_drinks_count() ?>)</a>
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">

                                        <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                            Category
                                        </a>
                                    </h3><!-- End .widget-title -->
                                    <div class="collapse show" id="widget-1">
                                        <div class="widget-body">
                                            <div class="filter-items filter-items-count">

                                                <?php $cat = new Category();
                                                     //echo  substr($_GET['catid'], 0, -2);

                                                     $stmt = $cat->get_subcategories($_GET['catid']);
                                                     if($stmt->rowCount() <= 0){
                                                     $stmt = $cat->get_categories($_GET['catid']);
                                                     }

                                                    if(isset($_GET['category']))
                                                    $selected_category_for_selection =  explode(',', implode(", ", $_GET['category']));
                                                    else{
                                                    $selected_category_for_selection = explode(',', "-1, -2");
                                                    }

                                                ?>
                                                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
                                                <?php $i = 1; while ($row = $stmt->fetch()) {  $i?>
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">

                                                        <input type="checkbox" name="category[]"  value="<?=$row['cat_id'];?>" class="custom-control-input" id="cat-<?=$i?>" <?php if( (in_array($row['cat_id'], $selected_category_for_selection))) echo "checked"?>>

                                                        <label class="custom-control-label" for="cat-<?=$i?>"> <?=$row['categoryName']?></label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <span class="item-count"><?= $cat->count_inventory_items_by_category($row['cat_id']); ?></span>
                                                </div><!-- End .filter-item -->
                                                <?php $i++; } ?>
                                                <input hidden="hidden" name="catid" value= <?=$_GET['catid'] ?>>

                                                <p style="text-align: left; margin-top: 12px;"><input style="width: 95%;" class="btn btn-outline-dark" type="submit">   </p>
                                                </form>

                                            </div><!-- End .filter-items -->
                                        </div><!-- End .widget-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .widget -->


                              <!--
                                </div><!-- End .widget -->

                            <!--    <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                            Price
                                        </a>
                                    </h3><!-- End .widget-title -->
                                   <!--
                                    <div class="collapse show" id="widget-5">
                                        <div class="widget-body">
                                            <div class="filter-price">
                                                <div class="filter-price-text">
                                                    Price Range:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->

                                            <!--    <div id="price-slider"></div><!-- End #price-slider -->
                                       <!--     </div><!-- End .filter-price -->
                                    <!--    </div><!-- End .widget-body -->
                                   <!-- </div><!-- End .collapse -->


                            </div><!-- End .sidebar sidebar-shop -->
                        </aside><!-- End .col-lg-3 -->
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
            $(".pagination span").css('margin-right', '10px');

            $("a.btn-cart").click(function(e){
                var product_id = $(this).attr( "product-info" );
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
                e.preventDefault(); // Submit the form
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
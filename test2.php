<?php
session_start();
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\ProductItem.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\conn.php';
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 10;
$offset = ($pageno-1) * $no_of_records_per_page;

$sql_ = "SELECT count(*) FROM `inventoryitem`";
$total_pages_sql = $sql_;
$result = mysqli_query($mysqli,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
printf("total pages %d\n", $total_pages);
$paginationPrev="";
$paginationnext="";
$prev = $pageno - 1;                          //previous page is page - 1
$next = $pageno + 1;
$limit = 10;
$initial_page = ($pageno-1) * $limit;
$lastpage = ceil($total_rows/$limit);
printf("Last page %d\n", $lastpage);

$sql = "SELECT * FROM `inventoryitem` LIMIT " . $initial_page . ',' . $limit;
$result = mysqli_query($mysqli,$sql);


while ($row = mysqli_fetch_array($result)) {
echo "<li>".$row['InventoryItemID']." ".$row['cost']."</li>";
}
$paginationPrev .= "";
$paginationnext .= "";
if ($pageno > 1){   $paginationPrev .="<a href='{$_SERVER['PHP_SELF']}?pageno={$prev}'>prev</a>"; }else{ $paginationPrev .="<span>prev</span>";}
if ($pageno < $total_pages){   $paginationnext .="<a href='test2.php?pageno={$next}'>Next</a>"; }else{ $paginationnext .="<span>Next</span>";}
echo $paginationPrev." ";
$skipped = false;
for($page_number = 1; $page_number<= $total_pages; $page_number++) {


        if ($page_number < 3 || $total_pages- $page_number < 5 || abs($pageno - $page_number) < 3) {
           if ($skipped)
            echo '<span> ... </span>';
           $skipped = false;
           echo "<a href='test2.php?pageno=" . $page_number . "'>" . $page_number . "</a>";
        }else {
        $skipped = true;
        }

       // if((int)$pageno === $page_number ){
       // echo '<span ><a style="color: green;" href = "test2.php?pageno=' . $page_number . '">' . $page_number . ' </a></span>';
       // }else{
       // echo '<a href = "test2.php?pageno=' . $page_number . '">' . $page_number . ' </a></span>';
       // }
}
echo $paginationnext;


?>
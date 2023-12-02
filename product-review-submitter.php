
<?php
session_start();
include "conn.php";
if($_POST){
if(isset($_SESSION['uid'])){
$user_id  =  $_SESSION['uid'];
$product_id = $_POST['icudrop'];
$review = $_POST['reply-message'];
$inventory_item = $_POST['inventory-item'];
$rate = $_POST['rate'];
$sql = "INSERT INTO `product_review` (`review_id`, `user_id`, `review_text`, `date_created`, `product_id`, `inventory_item`, `rating`) VALUES (NULL, '$user_id', '$review', CURRENT_TIMESTAMP, '$product_id', '$inventory_item', '$rate')";

$result = $mysqli->query($sql);
if($result){
  header("Location: http://localhost/lm/product-detail?itemid=$inventory_item");
  exit(0);
}else{
  echo "Check your data you have an error";
}

}else{
 echo "You must login to provide a review <a href='login.php'>click here to login</a>";
 exit(1);
}
}else{
    echo 'Error submitting post';
}
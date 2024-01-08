<?php
session_start();
//var_dump($_SESSION);

require_once  'C:\wamp64\www\lm\conn.php';
$item = $_GET["itemid"];

if(isset($_SESSION['uid'])){
$uid = $_SESSION['uid'];
$sql = "INSERT INTO `wishlist` (`wishlistid`, `customer_id`, `inventory_item_id`) VALUES (null, $uid, $item);";
$result = $mysqli->query($sql);
if($result){
    echo "Wish list registred";
}
}else{
header("Location: login.php");
}

?>
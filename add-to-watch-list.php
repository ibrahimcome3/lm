<?php
session_start();
var_dump($_SESSION);

require_once  'C:\wamp64\www\lm\conn.php';
$item = $_GET["itemid"];
echo $item;
if(isset($_SESSION['uid'])){
$uid = $_SESSION['uid'];
$sql = "INSERT INTO `wishlist` (`wishlistid`, `customer_id`, `inventory_item_id`) VALUES (null, $uid, $item);";
$result = $mysqli->query($sql);
if($result){
    echo "your wish list is inserted and hope god will answer your prayers";
}
}else{
header("Location: login.php");
}

?>
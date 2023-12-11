<?php
include "conn.php";
session_start();
if(isset($_SESSION['cart_final'])){
if($_SESSION['uid']){
   $customer_id = $_SESSION['uid'];
}else{
   echo "<a href='login.php'>click here to login</a><br/>";
   exit();

}
 if(!isset($_POST['ship-address'])){

 }
 $total_item_ordered = count($_SESSION['cart_final']);
 $total_price_of_items = 0;
 foreach($_SESSION['cart_final'] as $key => $value){
 $total_price_of_items += $value;
 }
 $shiping_address = $_POST['ship-address'];
 $sql = "INSERT INTO `lm_orders`(`order_id`, `customer_id`, `order_total`, `order_total_items`, `order_status`, `order_date_created`, `order_shipping_address`)
        VALUES (null, $customer_id,  $total_price_of_items,$total_item_ordered,'NOT COMPLETED', CURRENT_TIMESTAMP, $shiping_address)";
 $result = $mysqli->query($sql);
 if($result){
 $last_id = mysqli_insert_id($mysqli);
 foreach($_SESSION['cart'] as $key => $value){
 $sql2 = "select cost from inventoryitem where InventoryItemID  = $key";
 $result = $mysqli->query($sql2);
 $row = mysqli_fetch_array($result);
 $cost = $row['cost'];
 $sql = "INSERT INTO `lm_order_line`(`orderID`, `InventoryItemID`, `delivery_date`, `quwantitiyofitem`, `item_price`, `status`)
  VALUES ($last_id, $key, DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 2 DAY),$value, $cost,'NOT DELIVERED')";
 $result = $mysqli->query($sql);
 if($result){
     //echo "item inserted into your order has been created click here to shop again";
 }

}
   echo "item inserted into your order has been created click here to shop again";
   unset($_SESSION['cart']);
   unset($_SESSION['cart_final']);
   header("Location: order-confermation-last-page.php");

}

}else{
   header("Location: index.php");  
}
?>
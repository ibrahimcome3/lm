<?php session_start();
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\ProductItem.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
require_once  'C:\wamp64\www\lm\class\InventoryItem.php';



include "conn.php";
$sql = "SELECT * FROM inventoryitem WHERE `productItemID` = ".$_GET['pid']." and JSON_EXTRACT(`SKU` , '$.color') in ('".$_GET['p_color']."');";
echo $sql;
$result = $mysqli->query($sql);
$rowcount=mysqli_num_rows($result);
var_dump($rowcount);
if($rowcount == 1){
$row = mysqli_fetch_array($result);
header("Location: product-detail?itemid=".$row['InventoryItemID']);
die();
}
if($rowcount > 1){
$arr_product = array();
while($row = mysqli_fetch_array($result)){
 array_push($arr_product, $row['InventoryItemID']);
}
$a = implode(", ", $arr_product);
echo $a;
header("Location: many-product-variation.php?items=".$a);
die();
}
?>
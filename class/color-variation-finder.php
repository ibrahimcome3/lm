<?php session_start();
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\ProductItem.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
require_once  'C:\wamp64\www\lm\class\InventoryItem.php';


$_GET['product_id'];


$sql = "SELECT * FROM variation_option left join variation on variation_option.variation_id = variation.vid left join product_configuration on variation_option.vopid = product_configuration.variation_option_id left join inventoryitem on inventoryitem.InventoryItemID = product_configuration.inventory_item_id left join productitem on productitem.productID = inventoryitem.productItemID WHERE variation_option.vopid = ".$_GET['void'];
$pdo = $this->dbc;
$stmt = $pdo->query($sql);
var_dump($stmt);

?>
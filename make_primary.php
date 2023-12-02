<?php
include "conn.php";
$id = $_GET['id'];
$inid = $_GET['inid'];
$sql = "UPDATE `inventory_item_image` SET `is_primary`='0' WHERE `inventory_item_id` =  $inid";
echo $sql;
$result = $mysqli->query($sql);
if ($result) {
  $sql = "UPDATE `inventory_item_image` SET `is_primary`='1' WHERE `inventory_item_image_id` =  $id";
  $result = $mysqli->query($sql);
  if($result){
      header('Location: ' . $_SERVER['HTTP_REFERER']);          
  }
}
?>
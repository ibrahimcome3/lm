<?php
include "conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `inventory_item_image` WHERE `inventory_item_image_id` = $id";
echo $sql;
$result = $mysqli->query($sql);
if ($result) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
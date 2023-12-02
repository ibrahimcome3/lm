<?php
function getImage($id_of_what_get_image){
include "conn.php";
$sql = "select * from inventory_item_image where inventory_item_id = $id_of_what_get_image and `is_primary` = 1";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0)
    return $row['image_path'];
    else return "e.jpg";
}


?>
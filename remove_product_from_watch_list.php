<?php
session_start();
require_once  'C:\wamp64\www\lm\conn.php';


   $sql = "DELETE FROM `wishlist` WHERE `inventory_item_id` = ".$_POST['remove'];
   $result = $mysqli->query($sql);
   if($result){
   $arr=array('msg' => 'Success');
    echo json_encode($arr);
}else{
   $arr=array('error' => 'error');
     echo json_encode($arr);

}



?>
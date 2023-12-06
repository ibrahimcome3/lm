<?php
   class WishList extends Conn
   {

   function get_wished_list_item($id){
      $pdo = $this->dbc;
      $stmt = $pdo->query("SELECT count(*) as c FROM `wishlist` WHERE `customer_id` = $id;");
      $row = $stmt->fetch();
      return  $row['c'];


   }

   }

?>
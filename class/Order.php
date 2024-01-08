<?php 
   class Order extends Conn
{
   public $user_id;
   
   function  __construct(){
      parent::__construct();
      $this->user_id =  $_SESSION['uid'];
   }   

   function get_orders(){
       
   $sql = "SELECT * FROM `lm_orders` WHERE `customer_id` = ".$this->user_id;
   $pdo = $this->dbc;
   $stmt = $pdo->query($sql);
   if($stmt){
       return $stmt;
   }else{
       return false;
   }
   
   }
   
   function get_order_item($id){
      $sql = "SELECT * FROM `lm_order_line` WHERE `orderID` = $id"; 
      $pdo = $this->dbc;
      $stmt = $pdo->query($sql); 
      if($stmt){
          return $stmt;
      }
   }
   
   function remove_order_item_from_an_order($oid,$id){
      $sql = "DELETE FROM `lm_order_line` WHERE `InventoryItemID` = $id and `orderID` = $oid"; 
      $pdo = $this->dbc;
      $stmt = $pdo->query($sql); 
      if($stmt){
         if($this->count_order_item_from_an_order($oid) <= 0){
            $this->cancel_order($oid);
            header("Location: dashboard.php");
            exit();
         } 
          return true;
      }else{
          return false;
      }
      
   }
   
   function count_number_of_orders(){
      $sql = "SELECT count(*) as c FROM `lm_orders` WHERE `customer_id` = ".$this->user_id;
      $pdo = $this->dbc;
      $stmt = $pdo->query($sql); 
      $row = $stmt->fetch();
      return $row['c'];
    
   }
   
   function count_order_item_from_an_order($oid){
      $sql = "SELECT count(*) as c FROM `lm_order_line` WHERE `orderID` = $oid ";
      $pdo = $this->dbc;
      $stmt = $pdo->query($sql); 
      $row = $stmt->fetch();
      return $row['c']; 
   } 
   
   function cancel_order($id){
       $sql = "DELETE FROM `lm_orders` WHERE `order_id` = $id";
       $pdo = $this->dbc;
       $stmt = $pdo->query($sql);
       if($stmt){
          return true;          
       }else{
          return false;
       }
       
   }
   
      function get_order_item_price($id, $order_id){
          $pdo = $this->dbc;
          $stmt = $pdo->query("select * from lm_order_line where orderID = $order_id and InventoryItemID = $id");
          $row_count = $stmt->rowCount();
          if($row_count > 0){
          $row = $stmt->fetch();
          return $row['item_price'];
          }else{ return false;}

        }


   
      
}
   

?>
   
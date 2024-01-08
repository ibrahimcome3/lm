<?php
   class WishList extends Conn
   {
      private $user_id;
      public  $no_of_wish_list_item;
      
   function __construct($id) {
   $pdo = $this->dbc;
   $this->user_id = $id;
   $this->get_wished_list_item_($id);
   }
   
   
      
   
   function get_wished_list_item($id){
      $pdo = $this->pdo___();
      $stmt = $pdo->query("SELECT count(*) as c FROM `wishlist` WHERE `customer_id` = $id;");
      $row = $stmt->fetch();
      return  $row['c'];


   }
   
    function get_wished_list_item_($id){
      $pdo = $this->pdo___();
      $sql = "SELECT count(*) as c FROM `wishlist` WHERE `customer_id` = $id";
      $stmt = $pdo->query($sql);
      $row = $stmt->fetch();
      $this->no_of_wish_list_item = $row['c'];


   }
   
   function pdo___(){
              $options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
    ];
      $host = 'localhost';
      $db   = 'lm';
      $user = 'root';
      $pass = '';
      $port = "3306";
      $charset = 'utf8mb4';
      $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    try {
         $pdo = new \PDO($dsn, $user, $pass, $options);
         $db = $pdo;
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    } 
    
    return $pdo;
   }

   }

?>
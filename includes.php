<?php
session_start();
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
    require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\class\Category.php';
    require_once  'C:\wamp64\www\lm\class\Review.php';
    require_once  'C:\wamp64\www\lm\class\ProductItem.php';
    require_once  'C:\wamp64\www\lm\class\Variation.php';
    require_once  "C:\wamp64\www\lm\class\Promotion.php";
    require_once  "C:\wamp64\www\lm\class\WishList.php";
    include 'breadcrumps.php';
    $product_obj = new ProductItem();
    $promotion = new Promotion();
    $Orvi = new Review();
    $wishlist = new WishList();


  function getImage($id_of_what_get_image){
  include "conn.php";
  $sql = "select * from inventory_item_image where inventory_item_id = $id_of_what_get_image and `is_primary` = 1";
  $result = $mysqli->query($sql);
  $row = mysqli_fetch_array($result);
  if(mysqli_num_rows($result) > 0)
  return $row['image_path'];
  else return "e.jpg";
  }
    $var= array();
    $var1= array();
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

    $var= array();
    $var1= array();
   ?>
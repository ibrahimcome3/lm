<?php session_start();


require_once  'C:\wamp64\www\lm\class\Conn.php';
//require_once  'C:\wamp64\www\lm\class\ProductItem.php';
//require_once  'C:\wamp64\www\lm\class\Category.php';
//require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
require_once  'C:\wamp64\www\lm\class\Review.php';



//$id_of_what_get_image =  $item = 66;
//$result_final = array();
//$SKU =  array('item=66/size=8/color=8', 'item=66/size=9/color=9', 'item=66/size=10/color=8');
//$SKU =  ('item=66/Size=8/color=120');
// $result = array();
//foreach($SKU as $s){
//$SKU_PCIES = explode("/", $s);
//var_dump($SKU_PCIES);
//foreach ($SKU_PCIES as $val) {
 //   $sub = explode("=",$val);
 //   $result[$sub[0]] = $sub[1];
//}
//var_dump($result);
//array_push($result_final,$result);
//$result_final = array_merge($result_final, $result);;
//}
//echo "<pre>".print_r($result,1)."</pre>";
//var_dump($result_final);
//$a = 0;



//    array_push($a, explode("=", $k));
//}
    //session_unset();
    //session_destroy();
    //session_write_close();
    //    $item = [
     // '$fname' => 9,
     // '$lname' => 90,
   // ];
  //  $_SESSION['items'] = $item;
  //  $_SESSION['items']['$fname'] = 999999;
  //  var_dump($_SESSION['items']);
//foreach($_GET as $key => $value){
//}

   // echo "55555";
  // if(GetInt('arr', -1) === -1) echo "it does not exist"; $_GET['arr'] = 2; var_dump($_GET['arr']);
   ///echo GetInt('id', -1);
  //// function GetInt($index, $defaultValue) {
  //  return isset($_GET[$index]) && ctype_digit($_GET[$index])
    //        ? (int)$_GET[$index]
      //      : $defaultValue;
//}
/*
 //spl_autoload_register( function($class) {
 // $path = $_SERVER['DOCUMENT_ROOT'] . '/class/';
  //echo $class;
  require_once  'C:\wamp64\www\lm\class\Conn.php';
  require_once  'C:\wamp64\www\lm\class\ProductItem.php';
  require_once  'C:\wamp64\www\lm\class\Category.php';
  require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
 //});

 $object = new Category();

 $string = "1,1,13,9,7,7,13,9,14,8,9,1,7,7,13,15,1,9,13,7,8,";
 var_dump($object->decript_string($string));
 $inventory_items = new InventoryItem();
 print(implode(",", $object->decript_string($string)));
 $stmt = $inventory_items->get_multiple_inventory_items_product2(implode(",", $object->decript_string($string)));

 //$stmt = $pdo->query("SELECT * FROM category")->fetch();;
 //var_dump($stmt);
 # Loads the class "/classes/Home.php"

 //$object = new ProductItem();
*/


  $obj = new Review();
  echo $obj->get_rating_review_number(99);
 //     $stmt =  $obj->get_reviews_by_inventory_item(23);
 //     var_dump($stmt);
   //                                                                                while($row = $stmt->fetch()){
  //                                                                                           echo $row['review_text'];
   //                                                                               }




<?php
class Variation  extends Conn
{
    private   $timestamp;
    private   $parentIDS;


    function __construct(){
       parent::__construct();
       $defaultTimeZone='UTC';
       date_default_timezone_set($defaultTimeZone);
       $this->timestamp = date('Y-m-d');
       //var_dump( $this->parentIDS);
    }



    function get_variation_for_a_PRODUCT($produt_id){
          $pdo = $this->dbc;
          $stmt = $pdo->query("SELECT DISTINCT(variation.name) FROM `product_configuration`, variation_option left join variation on variation_option.variation_id = variation.vid WHERE product_configuration.`variation_option_id` = variation_option.vopid and variation.`product_id` = $category_id");
          return $stmt;
    }

    function get_color_variation($item_id){
          $pdo = $this->dbc;
          $stmt = $pdo->query("SELECT * FROM lm.inventoryitem WHERE `productItemID` = {$item_id} AND JSON_EXTRACT(`sku` , '$.color')");
          //$stmt = $pdo->query("SELECT * FROM `product_configuration`, variation_option left join variation on variation_option.variation_id = variation.vid WHERE product_configuration.`variation_option_id` = variation_option.vopid AND product_configuration.inventory_item_id = {$item_id} and lower(variation.name) like 'color%'");
          return $stmt;
    }

    function get_variation_values($variation = "color" , $product = 32){
          $pdo = $this->dbc;
          $stmt = $pdo->query("select * from variation left join variation_option on variation_option.variation_id = variation.vid where product_id = {$product} and variation.name like 'color%'");
          return $stmt;
    }

    function get_incentory_item_with_particular_variation($variation = "color"){
        //SELECT * FROM `product_configuration` left join variation_option ON product_configuration.variation_option_id =variation_option.vopid where variation_option.value like "black%"
    }

    function get_combination_of_variation(){
        //SELECT * FROM `product_configuration` left join variation_option ON product_configuration.variation_option_id =variation_option.vopid where variation_option.value like "black%" and variation_option.value like "SMALL%"

    }

    function get_all_variation_and_vaules_for_a_product($id){
         $pdo = $this->dbc;
         $stmt = $pdo->query("select DISTINCT(name) from variation left join variation_option on variation_option.variation_id = variation.vid where product_id = $id");
         return $stmt;
    }

    function return_all_an_array_of_varation_and_values($stmt, $p_id){
           $pdo = $this->dbc;
           $a = array();
           while($row = $stmt->fetch()){
           //array_push($a, $row['name']);
           $i=0;
           $b = array();
           //select * from inventoryitem left join productitem on inventoryitem.productItemID = productitem.productID left join variation on productitem.productID = variation.product_id where variation.name like '%".$row['name']."%'" and productitem.productID = $p_id
           $s =  $pdo->query("select * from product_configuration left join variation_option on variation_option.vopid = product_configuration.variation_option_id left join variation on variation.vid = variation_option.variation_id WHERE product_id = $p_id and name like '%".$row['name']."%'"."group by value");
           while($r = $s->fetch()){

           array_push($b, $r['value'].'/'.$r['vopid']);
           }
            $a[$row['name']] = $b;
           //array_push($a,$b);
           $i++;

           }
               return $a;
    }

    function get_size_variation($pid, $color){
          $color = strtolower($color);
          $pdo = $this->dbc;
          $stmt = $pdo->query("SELECT if(JSON_EXTRACT(`sku` , '$.color') IS null, 'no', 'yes') as color_search from inventoryitem where  `productItemID` = $pid group by JSON_EXTRACT(`sku` , '$.color')");
          $number_of_rows = $stmt->rowCount();
          if($number_of_rows == 1){
             $row = $stmt->fetch();
             if($row['color_search'] == 'no'){
                 $stmt = $pdo->query("SELECT productItemID, InventoryItemID, JSON_EXTRACT(`sku` , '$.size') as size FROM lm.inventoryitem WHERE `productItemID` = $pid and JSON_EXTRACT(`sku` , '$.size') IS NOT NULL;");
                 return $stmt;
             }
          }else{
              $stmt = $pdo->query("SELECT productItemID, InventoryItemID, JSON_EXTRACT(`sku` , '$.size') as size FROM lm.inventoryitem WHERE `productItemID` = $pid AND JSON_EXTRACT(`sku` , '$.color') = '$color';");
                 return $stmt;
          }


          //$stmt = $pdo->query("SELECT * FROM `product_configuration`, variation_option left join variation on variation_option.variation_id = variation.vid WHERE product_configuration.`variation_option_id` = variation_option.vopid AND product_configuration.inventory_item_id = {$item_id} and lower(variation.name) like 'color%'");

    }
    function check_for_item_unveriation_availability($variation_id){
         //echo $variation_id;
           $pdo = $this->dbc;
           $stmt= $pdo->prepare("SELECT * FROM `product_configuration` left join inventoryitem on inventoryitem.InventoryItemID = product_configuration.inventory_item_id where `variation_option_id` = ? and ( inventoryitem.quantityOnHand >= 1)");
           $stmt->execute([$variation_id]);
           $number_of_rows = $stmt->rowCount();
           return $number_of_rows;
    }

    function decript_string($string){
           $string2 = explode(",",$string);
           foreach ($string2 as $key => $value) {
            if (strlen($value) === 0) {
                unset($string2[$key]);
              }
           }
           return(array_unique($string2));
    }

}

?>

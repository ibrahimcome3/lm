<?php
class ProductItem  extends Conn
{
    private  $timestamp;



    function __construct(){
       parent::__construct();
       $defaultTimeZone='UTC';
       date_default_timezone_set($defaultTimeZone);
	   $this->timestamp = date('Y-m-d');
    }

    function add_product(){
           $pdo = $this->dbc;
           $data = ['description_' => 'Heinz', 'date_added_' => $this->timestamp, 'vendor_' => 'lm', 'Brand_' => 'Heinz',];
           $sql = "INSERT INTO `productitem`(`description`, `date_added`, `vendor`, `Brand`) VALUES (:description_, :date_added_, :vendor_, :Brand_)";
           $stmt = $pdo->prepare($sql);
           $stmt->execute($data);
    }

    function get_products(){
          $pdo = $this->dbc;
          $stmt = $pdo->query("select * from productitem");
          while ($row = $stmt->fetch()) {
            echo $row['description']."<br />\n";
        }
    }

    function get_product_inventory($product_id = 1){
        $pdo = $this->dbc;
        $stmt = $pdo->prepare("SELECT * FROM inventoryitem as i WHERE i.productItemID = ?");
        $stmt->execute([$product_id]);
        while ($row = $stmt->fetch()) {
            echo $row['description']."<br />\n";
        }

    }

       function get_product_id($inventory_item_id){
        $pdo = $this->dbc;
        $stmt = $pdo->prepare("select productItemID from inventoryitem where `InventoryItemID`  = ?");
        $stmt->execute([$inventory_item_id]);
        $row = $stmt->fetch();
        if($stmt->rowCount() > 0)
        return $row['productItemID'];
        else return 1;



    }

    function get_image($inventory_item_id){
        $pdo = $this->dbc;
        $stmt = $pdo->prepare("select * from inventory_item_image where inventory_item_id = ? and `is_primary` = 1");
        $stmt->execute([$inventory_item_id]);
        $row = $stmt->fetch();
        if($stmt->rowCount() > 0)
        return $row['image_path'];
        else return "e.jpg";


    }
    function getbrand(){
       $pdo = $this->dbc;
       $stmt = $pdo->query("SELECT brandID, Name FROM brand");
       return $stmt;
    }

    function get_other_images_of_item_in_inventory($inventory_item_id){

        $pdo = $this->dbc;
        $stmt = $pdo->prepare("select * from inventory_item_image where inventory_item_id = ? order by `is_primary` desc");
        $stmt->execute([$inventory_item_id]);
        if($stmt->rowCount() > 0)
        return $stmt;
       // else return "e.jpg";

    }

        function get_other_images_of_item_in_inventory_not_1($inventory_item_id){

        $pdo = $this->dbc;
        $stmt = $pdo->prepare("select * from inventory_item_image where inventory_item_id = ? order by `is_primary` desc LIMIT 18446744073709551615 OFFSET 1;");
        $stmt->execute([$inventory_item_id]);
        if($stmt->rowCount() > 0)
        return $stmt;
       // else return "e.jpg";

    }

    function get_all_product_items_that_are_less_than_one_month(){
        $ar = array();
        $pdo = $this->dbc;
        //$stmt = $pdo->prepare("SELECT * FROM productitem WHERE `date_added` > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
        $stmt = $pdo->prepare("SELECT * FROM inventoryitem WHERE `date_added` BETWEEN NOW() - INTERVAL 30 DAY AND NOW()");
        $stmt->execute();
        if($stmt->rowCount() > 0) {
          while($row = $stmt->fetch()){
               array_push($ar, $row['InventoryItemID']);
          }
         return $ar;
        }else{
               array_push($ar, -1);
               return $ar;
        }



    }

}

?>

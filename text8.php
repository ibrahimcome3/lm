 <?php
 
    include "conn.php";
    include  'class/Conn.php';
    include  'class/InventoryItem.php';
    include  'class/Category.php';
    include  'class/Review.php';
    include  'class/ProductItem.php';
    include  'class/Variation.php';
    include  "class/Promotion.php";
    include 'breadcrumps.php';
    $product_obj = new ProductItem();
    $promotion = new Promotion();
    $Orvi = new Review();

     $records_per_page = 3;
     $page = '';
     $output = '';
     if(isset($_POST["page"]))
     {
          $page = $_POST["page"];
     }
     else
     {
          $page = 1;
     }

    $category9 = $_POST['cat'];
    $_id_of_what_get_image = $_POST['pid'];
    


    $sql = "SELECT count(*)  as counts FROM `inventoryitem` WHERE `category` = ".$category9. " and InventoryItemID != ". $_id_of_what_get_image;
    $rows = mysqli_fetch_array($mysqli->query($sql));
    $total_records = $rows['counts'];
    $total_pages = ceil($total_records/$records_per_page);
    $sql = "SELECT * FROM `inventoryitem` WHERE `category` = ".$category9. " and InventoryItemID != ". $_id_of_what_get_image." limit ".(($page - 1) * $records_per_page) . ', ' . $records_per_page;
    $result = $mysqli->query($sql);

      $output= '';


                 while( $row = mysqli_fetch_array($result)){

        $output .= '<div class="product product-sm">
                               <figure class="product-media">
                                  <a href="product-detail.php?itemid='. $row['InventoryItemID'].'">
                               <img src="'.      $product_obj->get_image_600_199($row['InventoryItemID'],$_id_of_what_get_image).'" alt="Product image" class="product-image">
                        </a>
                 </figure>';

    $output .= '<div class="product-body">
          <h5 class="product-title"><a href="product-detail?itemid='.$row['InventoryItemID'].'">'.$row['small_description'].'</a></h5>
            <div class="product-price">';
              if($promotion->check_if_item_is_in_inventory_promotion($row['InventoryItemID'])){
                $output .= '<span class="product-price" style="margin-bottom: 0px;">N'. $promotion->get_promoPrice_price($row['InventoryItemID']).'&nbsp;</span><div>';
               $output .=  '<span class="old-price" style="font-size: 12px; text-decoration: line-through;"> Was N'.$promotion->get_regular_price($row['InventoryItemID']).'</span></div>';
       } else {
        $output .= '<div class="product-price"> Naira'. $row['cost']. '</div>';
          }


               $output .=  '</div></div></div>';

  }


  $output .= '<div style="display: none;  visibility: hidden;">';
  if ($page < $total_pages) {
   $output .=  '<a href= "#"   class="next-link pagination_link" id="';
   $output .= $page+1;
   $output .= '"><span>next</span></a>';
    } else{
      $output .=  "<a href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>next</span></a>";

    }
          for($i=1; $i<=$total_pages; $i++)
         {
              $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";
         }


  if ($page > 1) {
   $output .=  '<a href= "#" class="prev-link pagination_link" id="';
   $output .= $page - 1;
   $output .= '" aria-label= "Previous" id="{$page}"><span>prevoius</span></a>';
}else{
  $output .=  "<a href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>prevoius</span></a></div>";

}
  $output .= '</div>';
echo $output;

function getrelatedproducts($category9, $_id_of_what_get_image){
include "conn.php";
$sql = "SELECT * FROM `inventoryitem` WHERE `category` = ".$category9. " and InventoryItemID != ". $_id_of_what_get_image." limit 5";
$result = $mysqli->query($sql);
return $result;
}


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
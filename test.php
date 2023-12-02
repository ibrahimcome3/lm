 <?php
 include "conn.php";
    require_once  'C:\wamp64\www\lm\test\class\Conn.php';
    require_once  'C:\wamp64\www\lm\test\class\InventoryItem.php';
    require_once  'C:\wamp64\www\lm\test\class\Review.php';
    require_once  'C:\wamp64\www\lm\test\class\ProductItem.php';
    require_once  'C:\wamp64\www\lm\test\class\Promotion.php';

    $product_obj = new ProductItem();

    $rv = new Review();

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


    $_id_of_what_get_image = $_POST['pid'];


    $total_records = $rv->get_rating_review_number($_id_of_what_get_image);
    $total_pages = ceil($total_records/$records_per_page);
    $result = $rv->get_reviews_by_inventory_item_with_limit($_id_of_what_get_image, $page, $records_per_page);
    $arr = array();


                 while($row = $result->fetch(PDO::FETCH_ASSOC)){
                 array_push($arr, $row);
                //var_dump($row);

               }

  $output= '';
  $output .= '<div style="">';
  if ($page < $total_pages) {
   $output .=  '<a href= "#"   class="next-link pagination_linker" id="';
   $output .= $page+1;
   $output .= '"><span>next</span></a>';
    } else{
      $output .=  "<a href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>next</span></a>";

    }
          for($i=1; $i<=$total_pages; $i++)
         {
              $output .= "<span class='pagination_linker' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";
         }


  if ($page > 1) {
   $output .=  '<a href= "#" class="prev-link pagination_linker" id="';
   $output .= $page - 1;
   $output .= '" aria-label= "Previous" id="{$page}"><span>prevoius</span></a>';
}else{
  $output .=  "<a href='javascript:void(0)' aria-label='Previous'><span aria-hidden='true'>prevoius</span></a></div>";

}
  $output .= '</div>';
  array_push($arr, $output);
  echo json_encode($arr);


 ?>
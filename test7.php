<?php
 //pagination.php
include "conn.php";

 $records_per_page = 20;
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
$sql = "select count(*)  as counts  FROM `inventoryitem` left join productitem on productitem.productID = inventoryitem.`productItemID` ";
$rows = mysqli_fetch_array($mysqli->query($sql));
$total_records = $rows['counts'];
$total_pages = ceil($total_records/$records_per_page);
$sql = "SELECT * FROM `inventoryitem` left join productitem on productitem.productID = inventoryitem.`productItemID` limit ".(($page - 1) * $records_per_page) . ', ' . $records_per_page;
$result = $mysqli->query($sql);
 $output .= "<div><table class=\"table table-bordered border-primary\">
             <thead>
                <tr>
                    <td>#id</td>
                    <td>Date Added</td>
                    <td>Description</td>
                    <td>#Qunatity in store</td>
                    <td>#permitted reorder Quanitity</td>
                    <td>Cost</td>
                    <td>Category</td>
                    <td>SKU (JSON Format)</td>
                    <td>Image</td>
                    <td>Edit</td>
                    <td>Delete </td>
                </tr>
            </thead>";
   if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
   $id  =  $row['InventoryItemID'];
    $output .= '<tr><td>'.$row["InventoryItemID"].'</td>
                  <td>'.$row["date_added"].'</td>
                  <td>'.$row["small_description"].'</td>
                  <td>'.$row["quantityOnHand"].'</td>
                  <td>'.$row["reorderQuantity"].'</td>
                  <td>'.$row["cost"].'</td>
                  <td>'.$row["category"].'</td>
                  <td>'.$row["sku"].'</td>';
    $sql = "select count(*) as no_images from  `inventory_item_image` WHERE `inventory_item_id` =$id";
    $result_inner = $mysqli->query($sql);
    $row_inner = $result_inner->fetch_assoc();
    $output .= '<td><a href=\'inventory_item_image_viewer.php?id=' .$row["InventoryItemID"] .'\'>View Images</a></td>';
    $output .= '<td><a href=\'edit_nventoryItem.php?id=' .$row["InventoryItemID"] . '\'>Edit</a>  </td>';
    $output .= '<td><a href=\'delete_inventoryItem.php?id=' .$row["InventoryItemID"] . '\'>Delete</a> </td>';
    $output .= '</tr>';
    }

$output .= '</table></div>';


 }

for($i=1; $i<=$total_pages; $i++)
 {
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";
 }
 $output .= '</div><br /><br />';

 echo $output;


 ?>

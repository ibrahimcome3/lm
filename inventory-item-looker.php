<!DOCTYPE HTML>
<?php
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
?>
<html>

<head>
  <title>inventory-item-looker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
      <div class="container">
       <?php include "store-navbar.php"; ?>
    <div>
    <table class="table table-bordered border-primary">
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
        </thead>

                <?php
                 $sql = "SELECT * FROM `inventoryitem` ORDER BY `inventoryitem`.`InventoryItemID` ASC";
                 $result = $mysqli->query($sql);
                 if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                  $id  =  $row['InventoryItemID'];
                 ?>
                 <tr>
                <td><?=$row['InventoryItemID'] ?></td>
                <td><?=$row['date_added'] ?></td>
                <td><?=$row['small_description'] ?></td>
                <td><?=$row['quantityOnHand'] ?></td>
                <td><?=$row['reorderQuantity'] ?></td>
                <td><?=$row['cost'] ?></td>
                <td><?=$row['category'] ?></td>
                <td><?=$row['sku'] ?></td>
                <td><?php
                    $sql = "select count(*) as no_images from  `inventory_item_image` WHERE `inventory_item_id` =$id";
                    $result_inner = $mysqli->query($sql);
                    $row_inner = $result_inner->fetch_assoc();
                    echo $row_inner['no_images']." ";
                 ?><?php echo "<a href='inventory_item_image_viewer.php?id=" .$row["InventoryItemID"] . "'>View Images</a>  "; ?></td>
                <td><?php echo "<a href='edit_nventoryItem.php?id=" .$row["InventoryItemID"] . "'>Edit</a>  "; ?> </td>
                <td><?php echo "<a href='delete_inventoryItem.php?id=" .$row["InventoryItemID"] . "'>Delete</a>";?> </td>
                </tr>
                <?php
                   }

                   }else
                   {
                       echo "No Products found"  ;
                   }
                                   ?>

    </table>
    </div>
</div>
</body>

</html>
<!DOCTYPE HTML>
<?php
if(!isset($_GET['id'])){
echo "Cannot select an inventory item";
exit();

}
session_start();
include "conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `inventoryitem` WHERE `InventoryItemID` =$id";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();

}


 ?>
<html>

<head>
  <title>Edit Inventory Item <?php if(isset($_GET['id'])) echo $_GET['id']; ?></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

function updateInput() {
    var number = document.getElementByClass("productitem").value;
    document.getElementById("productid").value = number;
}
</script>
 <style>
  .tabs {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .tabs li {
    display: inline-block;
    margin-right: 10px;
  }

  .tabs li a {
    display: block;
    padding: 5px 10px;
    background-color: #eee;
    color: #333;
    text-decoration: none;
  }

  .tabs li a:hover {
    background-color: #ccc;
  }

  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
                  <?php include "store-navbar.php"; ?>
 <form action="update_inventory_item.php" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td colspan="2"><b>Edit inventory item <?= $_GET['id']; ?></b>
             <br/>
            </td>
        </tr>
        <tr>
            <td>ProductID</td>
            <td><input name="productid"  value="<?php echo $row['productItemID'] ?>" id="productid" placeholder=""></td>
        </tr>
        <tr>
            <td>Inventory Item Identification Number</td>
            <td><input name="InventoryID" value="<?php echo $row['InventoryItemID'] ?>" placeholder="auto generated"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea value="<?php echo $row['small_description'] ?>"  name="description" placeholder=""><?php echo $row['small_description'] ?></textarea></td>
        </tr>

         <tr>
            <td>SKU (SKu is must be in jason)</td>
            <td><textarea  name="sku" value="<?php echo $row['sku'] ?>"><?php echo $row['sku'] ?></textarea></td>
        </tr>
        <tr>
            <td>Quintity in inventory</td>
            <td>
                <input name="quintity_in_inventory" value="<?php echo $row['quantityOnHand'] ?>"/>
            </td>
        </tr>
        <tr>
        <td>Cost Price</td>
            <td>
                <input name="cost" value="<?php echo $row['cost'] ?>"/>
            </td>
        </tr>
        <tr>
        <td>Reorder Qunitiy</td>
            <td>
                <input name="reorder_quintity" value="<?php echo $row['reorderQuantity'] ?>"/>
            </td>
        </tr>
         <tr>
            <td>Date added to inventory</td>
            <td><input name="date_created" disabled="disabled" placeholder="" value="<?php echo $row['date_added'] ?>"/></td>
        </tr>

        <tr>
            <td>Category</td>
            <td>    <select name="category">
                <?php
                $sql2 = "SELECT * FROM `category_new` ORDER BY `category_new`.`categoryName` ASC";
                $result2 = $mysqli->query($sql2);
                 while($row2 = mysqli_fetch_array($result2)){

                ?>

                <option <?= $row2['cat_id'] === $row['category'] ? "selected='selected'": ""  ?> value="<?=$row2['cat_id'] ?>"><?= $row2['categoryName'] ?></option>

               <?php } ?>
                </select>
                 <br>
                 <a href="new-category.php" title="new-brand-creation">create new category</a>
            </td>
        </tr>
        <tr>
            <td>upload more files for this product (*jpg,png only)</td>
            <td>
            <input type="file" name="files[]" multiple name="inventory_item_images" id="fileToUpload" multiple/>

            </td>
        </tr>
         <tr>
             <td><input type="submit" value="submit form for processing" /></td>
         </tr>
    </table>

</form>
       <br>
       <div class="d-flex justify-content-start">
   <?php

     $sql = "SELECT * FROM `inventory_item_image` WHERE `inventory_item_id` =$id";
        $result = $mysqli->query($sql);
                 if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {

                        ?>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php
                 if($row["is_primary"] ==1 ){
                           echo "<div class=' border border-primary text-primary jutify-center text-center'>This is the primary image !</div>";
                 }
                 ?>
            <div style=""><img style="width: 300px;" src="<?php echo $row['image_path']?>" class="img-thumbnail" style="border: 0" alt=""/>
             <a href="delete_image.php?id=<?php echo $row['inventory_item_image_id'] ?>"  class="card-link">Delete</a>
             <a href="make_primary?id=<?php echo $row['inventory_item_image_id'] ?>&inid=<?php echo $id ?>"  class="card-link" >Make it the primary display image</a>
            </div>
        </div>
        </div>
   <?php
            }
             ?>
          </div>
              <?php
                }else{
                ?>
                <div class="alert alert-danger" role="alert">
                 No images found for this item
                </div>

                <?php
                }

    ?>
</div>
</body>

</html>
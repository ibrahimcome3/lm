<!DOCTYPE html>
<?php
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
?>
<html>
<head>
  <title>Product Manager</title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
    $(document).ready(function(){
      $("#fileToUpload").change(function(){
        if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#imagePreview').attr('src', e.target.result);
          }
          reader.readAsDataURL(this.files[0]);
        }
      });
    });
  </script>

</head>

<body>
  <ul><li><a href="add-inventory-items-to-a-product.php">Click here to add inventory items to a product</a></li></ul>
<form action="product_adder.php" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td colspan="2"><b><u>New Product Creation Form</u></b></td>
        </tr>
        <tr>
            <td>ProductID</td>
            <td><input name="productid" disabled="disabled" placeholder="auto generated"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="description" placeholder=""></textarea></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input name="date_created" disabled="disabled" placeholder=""></td>
        </tr>
        <tr>
            <td>Vendor Information</td>
            <td>    <select name="vendor">
                <?php
                $sql = "SELECT * FROM `supplier` ORDER BY `supplier`.`sup_company_name` ASC";
                $result = $mysqli->query($sql);
                 while($row = mysqli_fetch_array($result)){
                ?>

                <option value="<?=$row['sup_id'] ?>"><?= $row['sup_company_name'] ?></option>

               <?php } ?>
                </select>
                 <br>
                 <a href="new-vendor.php" title="new-brand-creation">create new vendor</a>
            </td>
        </tr>
        <tr>
            <td>brand</td>
            <td>

                <select name="brand">
                <?php
                $sql = "SELECT * FROM `brand` ORDER BY `brand`.`Name` ASC";
                $result = $mysqli->query($sql);
                 while($row = mysqli_fetch_array($result)){
                ?>

                <option value="<?=$row['brandID'] ?>"><?= $row['Name'] ?></option>

               <?php } ?>
                </select>
                 <br>
                <a href="new-brand.php" title="new-brand-creation">create new vendor</a>
            </td>

        </tr>
        <tr>
            <td>product_information</td>
            <td><textarea width="162px" height="200px" name="produt_info" placeholder=""></textarea></td>
        </tr>
        <tr>
            <td>additional_information</td>
            <td><textarea width="162px" height="200px" name="additional_info" placeholder=""></textarea></td>
        </tr>
        
        <tr>
            <td>shipping_returns policy of a product</td>
            <td>
                <select name="ship_returns">
                <?php
                $sql = "SELECT * FROM `shipping_policy`";
                $result = $mysqli->query($sql);
                 while($row = mysqli_fetch_array($result)){
                ?>

                <option value="<?=$row['shipping_policy_id'] ?>"><?= $row['shipping_policy'] ?></option>

               <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select a picture for this product (*jpg,png only)</td>
            <td>
            <input type="file" name="product_picture" id="fileToUpload">

            </td>
        </tr>
         <tr>
             <td><input type="submit" value="submit form for processing" /></td>
         </tr>
    </table>
        <div  style="border: 3px solid brown; max-width: 400px;">
              <img id="imagePreview" src="assets/images/backgrounds/cta/OIP.jpg"  width="200px" height="200px" />
        </div>
</form>

</body>
</html>
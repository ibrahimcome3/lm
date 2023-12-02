<!DOCTYPE html>
<?php
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
?>
<html>
<head>
  <title>Product Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-dark bg-primary" style="margin-bottom: 10px;">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">lagos market</a>
          </div>
        </nav>
    <div>
    <table class="table table-bordered border-primary">
        <thead>
        <tr>
            <td>ProductId</td>
            <td>Date Added</td>
            <td>Description</td>
            <td>Vendor</td>
            <td>Brand</td>
            <td>Shipping Return Policy</td>
            <td>Edit</td>
            <td>Delete </td>
        </tr>
        </thead>

                <?php
                 $sql = "SELECT * FROM `productitem`";
                 $result = $mysqli->query($sql);
                 if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                  //      var_dump($row);
                 ?>
                 <tr>
                <td><?=$row['productID'] ?></td>
                <td><?=$row['date_added'] ?></td>
                <td><?=$row['description'] ?></td>
                <td><?=$row['vendor'] ?></td>
                <td><?=$row['brand'] ?></td>
                <td><?=$row['shipping_returns'] ?></td>
                <td><?php   echo "<a href='edit_product.php?id=" .$row["productID"] . "'>Edit</a>  "; ?> </td>
                <td><?php    echo "<a href='delete_product.php?id=" .$row["productID"] . "'>Delete</a>";?> </td>
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
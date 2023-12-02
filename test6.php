<!DOCTYPE HTML>
<?php session_start();
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\ProductItem.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
require_once  'C:\wamp64\www\lm\class\InventoryItem.php';
include "include/Zebra_Pagination.php";


include "conn.php";
//var_dump( $_GET['items']);
$records_per_page = 30;
$pagination = new Zebra_Pagination();

$sql = "select count(*)  as counts  FROM `inventoryitem` left join productitem on productitem.productID = inventoryitem.`productItemID` ";
$rows = mysqli_fetch_array($mysqli->query($sql));

$pagination->records($rows['counts']);
$pagination->records_per_page($records_per_page);
$cal = (($pagination->get_page() - 1) * $records_per_page);

$sql = "SELECT * FROM `inventoryitem` left join productitem on productitem.productID = inventoryitem.`productItemID` limit ".(($pagination->get_page() - 1) * $records_per_page) . ', ' . $records_per_page;
echo $sql;
$result = $mysqli->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Rateit.js by gjunge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
      <script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
      <script src="rateit.js-master\rateit.js-master\scripts\jquery.rateit.js"></script>
    <link href="//rawgit.com/gjunge/rateit.js/master/scripts/rateit.css" rel="stylesheet" type="text/css">
     <style>
        body
        {
            font-family: Tahoma;
            font-size: 12px;
            margin: 1em;
        }
        h1
        {
            font-size: 1.7em;
        }
        h2
        {
            font-size: 1.5em;
        }
        h3
        {
            font-size: 1.2em;
        }
        ul.nostyle
        {
            list-style: none;
        }
        ul.nostyle h3
        {
            margin-left: -20px;
        }

        #toc {
            -moz-column-count: 3;
            -webkit-column-count: 3;
            column-count: 3;
            max-width: 1100px;
        }
    </style>
    <!-- alternative styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="all"><link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="all">
     <script>
 $(document).ready(function(){
      load_data();
      function load_data(page)
      {
           $.ajax({
                url:"text8.php",
                method:"POST",
                data:{page:page},
                success:function(data){
                    console.log(data);
                     $('#pagination_data').html(data);
                }
           })
      }
     // $(document).on('click', '.ib', function(event){
     //      var href = $(this).attr('href');
     //      var page = href.substring(href.lastIndexOf('=') + 1);
           //(page);
     //      load_data(page);
     //      event.preventDefault();
     // });
      $(document).on('click', '.pagination_link', function(){
           var page = $(this).attr("id");
           load_data(page);
      });


 });
 </script>
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
    <?php //$pagination->render(); ?>
</div>

<div id="pagination_data">


</div>
    </body>

</html>
<?php
include "conn.php";
 $file = $_FILES['files'];
 if((int)($_FILES['files']['error'][0]) !== 4) {
     var_dump($_POST);
     $description = $_POST['description'];
     $qonhand = $_POST['quintity_in_inventory'];
     $cost = $_POST['cost'];
     $reorder_quitity = $_POST['reorder_quintity'];
     $product_item = $_POST['productid'];
     $cat = $_POST['category'];
     $sku = $_POST['sku'];

        foreach ($file['name'] as $i => $name) {
        $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
        $detectedType = exif_imagetype($_FILES["files"]["tmp_name"][$i]);
        if (!in_array($detectedType, $allowedTypes)) {
        echo "<b style='color:#CC0000'>".$_FILES["files"]["tmp_name"][$i]." image type not allowed.</b>";
        echo "<a href=". $_SERVER['HTTP_REFERER'].">Back</a>";
        //echo '<img src="'.$_FILES["files"]["tmp_name"][$i].'" width="300" style="border: 0; float: left; vertical-align: middle" alt="image that cannot be uploaded">';
        exit();
        }
        }

     $sql = "INSERT INTO `inventoryitem`(`InventoryItemID`, `small_description`, `quantityOnHand`, `cost`, `reorderQuantity`, `productItemID`, `date_added`, `category`, `sku`) VALUES (null,'$description','$qonhand','$cost','$reorder_quitity','$product_item', CURRENT_TIMESTAMP,'$cat','$sku')";
     $result = $mysqli->query($sql);
     $last_id = mysqli_insert_id($mysqli);

     if($result){
         if (!file_exists("products/product-".$product_item."/"."product-".$product_item."-image/"."inventory-".$product_item."-".$last_id."/")) {
         mkdir("products/product-".$product_item."/"."product-".$product_item."-image/"."inventory-".$product_item."-".$last_id."/", 0777, true);
         }
        foreach ($file['name'] as $i => $name) {
                $target_dir = "products/product-".$product_item."/"."product-".$product_item."-image/"."inventory-".$product_item."-".$last_id."/";
                $temp = explode(".", $file["name"][$i]);
                $newfilename = round(microtime(true))+$i . '.' . end($temp);
                $target_file = $target_dir . $newfilename;
                echo $target_file;
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.<br/>";
                    echo "<a href=". $_SERVER['HTTP_REFERER'].">Back</a>";
                    exit();
                }


                if (move_uploaded_file($file["tmp_name"][$i], $target_file)) {

                    $out = convertImage($target_file, $target_dir, 100, $newfilename);
                    $file_name = $file["name"][$i];
                    $newfilename = explode(".", $newfilename);
                    $inserted_file_name = $newfilename[0].".jpg";
                    $sql = "INSERT INTO `inventory_item_image` (`inventory_item_image_id`, `image_name`, `image_path`, `is_primary`, `inventory_item_id`) VALUES (NULL, '$inserted_file_name', '$out', '0', '$last_id');";
                    $result = $mysqli->query($sql);
                    if($result){
                    echo "The file " . htmlspecialchars(basename($file["name"][$i])) . " has been uploaded.<br>";
                    echo "<a href=". $_SERVER['HTTP_REFERER'].">Back</a>";
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.<br>";
                    echo "<a href=". $_SERVER['HTTP_REFERER'].">Back</a>";
                }
           }
      }






 }else{

 echo "pls select an image to upload<br>";
 echo "<a href=". $_SERVER['HTTP_REFERER'].">Back</a>";
 exit();
 }


/*$sql = " ";
$target_dir = "uploads/";
foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
    $target_file = $target_dir . basename($_FILES["files"]["name"][$key]);
    move_uploaded_file($tmp_name, $target_file);
}
  */
function convertImage($originalImage, $outputImage, $quality, $newfilename)
{
    // jpg, png, gif or bmp?
   // $originalImage = "products/product-140/product-140-image/inventory-140-90/images.png";
    $exploded = explode('.',$originalImage);
    $ext = $exploded[count($exploded) - 1];
    $newfilename = explode(".", $newfilename);
    var_dump($newfilename);

    if (preg_match('/jpg|jpeg/i',$ext))
        $imageTmp=imagecreatefromjpeg($originalImage);
    else if (preg_match('/png/i',$ext))
        $imageTmp=imagecreatefrompng($originalImage);
    else if (preg_match('/gif/i',$ext))
        $imageTmp=imagecreatefromgif($originalImage);
    else if (preg_match('/bmp/i',$ext))
        $imageTmp=imagecreatefrombmp($originalImage);
    else
        return 0;

    // quality is a value from 0 (worst) to 100 (best)
    $outputImage = $outputImage.$newfilename[0].".jpg";
    echo $outputImage;

    imagejpeg($imageTmp, $outputImage, $quality);
    imagedestroy($imageTmp);

    return $outputImage;
}
?>
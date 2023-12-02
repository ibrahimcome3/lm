<?php
include "conn.php";
require_once  'C:\wamp64\www\lm\class\Conn.php';
require_once  'C:\wamp64\www\lm\class\Category.php';
 //var_dump($_POST);
 //var_dump($_FILES);
 $file = $_FILES['product_picture'];
 if(isset($file['name'])){
 $description = $_POST['description'];
 $vendor = $_POST['vendor'];
 $brand = $_POST['brand'];
 $product_information = $_POST['produt_info'];
 $addtional_informatipon = $_POST['additional_info'];
 $shipping_and_returns = $_POST['ship_returns'];
 if(empty($description) or empty($product_information)){ echo "<b>description</b> or <b>product information field</b> is empty"; exit();}
 $sql = "INSERT INTO `productitem`(`productID`, `description`, `date_added`, `vendor`, `brand`, `product_information`, `additional_information`, `shipping_returns`)
  VALUES (null,'$description', CURRENT_TIMESTAMP,'$vendor','$brand','$product_information','$addtional_informatipon','$shipping_and_returns')";

  $result = $mysqli->query($sql);
      if ($result) {
      $last_id = mysqli_insert_id($mysqli);
      if (!file_exists("products/product-".$last_id."/"."product-".$last_id."-image")) {
           if(mkdir("products/product-".$last_id."/"."product-".$last_id."-image", 0777, true)){
                               // Define the target directory
                $target_dir = "products/product-".$last_id."/"."product-".$last_id."-image/";

                $target_file = $target_dir . basename($file["name"]);
              //  echo  $target_file."<br/>";
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    exit();
                }


                if (move_uploaded_file($file["tmp_name"], $target_file)) {

                    $file_name = $file["name"];
                    $sql = "INSERT INTO `product_images` (`p_imgeid`, `image`, `product_id`) VALUES (NULL, '$file_name', '$last_id');";
                    $result = $mysqli->query($sql);
                    if($result){
                    echo "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.<br>";
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
           }
      } else {
            echo "Folder already exists!";
        }
     }

}else{
   echo "Pls provide a a picture for this product"; exit();
}
?>
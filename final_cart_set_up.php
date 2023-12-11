<?php
    require_once "includes.php";
    $products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    if ($products_in_cart) {
                        //echo "yes";
       $array_to_question_marks = implode(',', array_keys($products_in_cart));
       $sql =  'SELECT * FROM inventoryitem left join productitem on inventoryitem.`productItemID` = productitem.`productID` WHERE inventoryitem.InventoryItemID IN (' . $array_to_question_marks . ')';
       $result = $mysqli->query($sql);
    }
    if($result){
                $p = new ProductItem();
                while($row = mysqli_fetch_assoc($result)){
                $product_id_cost = $row['InventoryItemID'];
            if (isset($_SESSION['cart_final']) && is_array($_SESSION['cart_final'])) {
                                                 //echo "yes";
                if (array_key_exists($product_id_cost, $_SESSION['cart_final'])) {

                                                        // Product exists in cart so just update the quanity
                        if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
                        $_SESSION['cart_final'][$product_id_cost] = $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']];
                        }else{
                        $_SESSION['cart_final'][$product_id_cost] = $row['cost'] * $products_in_cart[$row['InventoryItemID']];
                        }
                }
                else {
                                                        // Product is not in cart so add it
                if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
                $_SESSION['cart_final'][$product_id_cost] = $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']];
                }else{
                $_SESSION['cart_final'][$product_id_cost] = $row['cost'] * $products_in_cart[$row['InventoryItemID']];
                }
        }
    } else {
                                                        // There are no products in cart, this will add the first product to cart
    if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
    $_SESSION['cart_final'] = array($product_id_cost =>  $promotion->get_promoPrice_price($row['InventoryItemID']) * $products_in_cart[$row['InventoryItemID']]);
    }else{
    $_SESSION['cart_final'] = array($product_id_cost =>  $row['cost'] * $products_in_cart[$row['InventoryItemID']]);
    }

    }



    }
   if(count($_SESSION['cart_final']) > 0 and isset($_SESSION['cart_final'])){
   header("Location: checkout-process-validation.php");
   }else{
   header("Location: lockout.php");
    }
}

?>
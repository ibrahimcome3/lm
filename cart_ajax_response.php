<?php 
include 'includes.php';
$string_ = '';
//echo ($_POST['arr']);
$cart_copy = array();
$cart_copy = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
//var_dump($cart_copy);
foreach($_SESSION['cart'] as $key => $val){
//var_dump($cart_copy);
$product_id_cost = $key;
if (array_key_exists($product_id_cost, $cart_copy)) {
    //var_dump($cart_copy);
$result = $mysqli->query("SELECT * FROM inventoryitem WHERE InventoryItemID = $product_id_cost");
$row = mysqli_fetch_assoc($result);
	    if($promotion->check_if_item_is_in_inventory_promotion($product_id_cost)){
            $cart_copy[$product_id_cost] = $promotion->get_promoPrice_price($product_id_cost);//$promotion->get_promoPrice_price($product_id_cost) *  $cart_copy[$product_id_cost];
            }else{
            $cart_copy[$product_id_cost] =  $row['cost'];//$row['cost']  * $cart_copy[$product_id_cost];
            }

//var_dump($cart_copy);

  $string_ .= '<div class="product">
         <div class="product-cart-details">             
           <h4 class="product-title">                   
                <a href="product.html">'.$row['small_description'].'</a>               
            </h4>                                        
                <span class="cart-product-info"> 
                    <span class="cart-product-qty">'.$_SESSION['cart'][$product_id_cost] .'</span>  
                        &nbsp;x '.$cart_copy[$product_id_cost].' N&nbsp;                        
                             </span>                                    
                                </div>                                         
        <figure class="product-image-container">       
                       <a href="product-detail?itemid='.$product_id_cost.'" class="product-image">
                            <img src="'.$product_obj->get_image($row['InventoryItemID']).'" alt="product">              
                                    </a>                                       
        </figure>                                      
                <a href="#" class="btn-remove btn-remove-drop-down" itemid="'.$product_id_cost.'" title="Remove Product"><i class="icon-close"></i></a>
        </div>';
		 

}		 
}
echo $string_;
?>


<?php
include "includes.php";
//var_dump($_SESSION);
require_once  'C:\wamp64\www\lm\conn.php';
	if(isset($_POST['itmid']) and is_numeric($_POST['itmid'])){
		if(_delete_item_from_cart($_POST['itmid'])){
			echo 1;
		}else{
			echo 0;
		}
	}
	
   
 function _delete_item_from_cart($id){

      if ( is_numeric($id) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$id])) {
          unset($_SESSION['cart'][$id]);
          return true;
      }else{
          return 0;
      }
   }	
?>
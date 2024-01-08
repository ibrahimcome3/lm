<?php
include 'includes.php';
//var_dump($_SESSION);
if(isset($_SESSION['uid'])){
$uid = $_SESSION['uid'];
if($_POST['phone_number']){
$phone_numner = $_POST['phone_number'];	
if($user_->add_phone_number($phone_numner)){
    header("Location: dashboard.php#tab-phone");
}
}else{
header("Location: login.php");
}
}
?>
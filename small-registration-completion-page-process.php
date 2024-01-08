<?php
require_once "includes.php";
if(isset($_GET['target_id'])){
  $sql = "select * from customer where customer_id = ".$_GET['target_id'] ." AND customer_status != 'MEMBER'"; 
  $res = $mysqli->query($sql);
    if($res){
    if(mysqli_num_rows($res) > 0){
      $row = $res->fetch_assoc();  
    }else{
      echo "<a href='login.php'>click</a> here to login registration already completed";  
      exit();  
    }
  }
}elseif(isset($_POSt['customer_id'])){
  $sql = "select * from customer where customer_id = ".$_POSt['customer_id'] ." AND customer_status != 'MEMBER'"; 
  $res = $mysqli->query($sql);
  if($res){
  if(mysqli_num_rows($res) > 0){
      $row = $res->fetch_assoc();  
    }else{
      echo "<a href='login.php'>click</a> here to login registration already completed"; 
      exit();  
    }
  }  
}
if($_POST){

  $customer_id = $_POST['customer_id'];
  $fname= $_POST['firstname'];
  $lname=$_POST['lastname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $streetaddress1=$_POST['streetaddress1'];
  $streetaddress2=$_POST['streetaddress2'];
  $country= 'NIGERIA';
  $state=$_POST['state'];
  $city=$_POST['city'];
  $phone_number=$_POST['phone'];
  $zip=$_POST['zip'];

  if(empty($city) || empty($zip) ||  empty($customer_id) || empty($password) || empty($fname) || empty($lname) || empty($email) || empty($country) || empty($state) || empty($streetaddress1) || empty($streetaddress2)){
  $error =   "some field missing";
  //exit(0);
  }else{
  $sql = "UPDATE `customer` SET `customer_fname`='$fname',`customer_lname`='$lname', `customer_city`= '$city',`customer_email`= '$email',`customer_address1`='$streetaddress1',`customer_address2`='$streetaddress2',`customer_country`='$country',`customer_state`='$state',`customer_phone`= '$phone_number',`customer_zip`='$zip',`customer_status`='MEMBER',`password`='$password',`profile_image`='anonymous.jpg' WHERE customer_id = $customer_id ";
  echo $sql;
  $res = $mysqli->query($sql);
  if($res){
    unset($_SESSION['INCOMPLETE-REGISTRATION']);  
    
    header("Location: complete-registration-confermation-page.php");
  }

  }
}else{
    echo "<center><span style='color: red;'>Some fileds are empty</span><br/></center>";
    
}



?>
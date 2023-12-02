<?php
session_start();
include 'conn.php';
    //var_dump($_SESSION['registration']);
    $password1 = $_POST['p1'];
    $password2 = $_POST['p2'];
   //echo $fname." ".$lname." ".$email." ".$password." ".$day." ".$month." ".$year." ".$gender;
   if($password1 == $password2){
     $_SESSION['registration']['$password'] = $password1;
   }else{
    exit(0);
   }

   if(isset(  $_SESSION['registration']['$password'])){
      $fname= $_SESSION['registration']['$fname']; $lname=$_SESSION['registration']['$lname']; $email=$_SESSION['registration']['$email'];  $password=$_SESSION['registration']['$password']; $streetaddress1=$_SESSION['registration']['$streetaddress1']; $streetaddress2=$_SESSION['registration']['$streetaddress2']; $state=$_SESSION['registration']['$state'];  $phone_number=$_SESSION['registration']['$phone'];  $zip=$_SESSION['registration']['$zip'];
      $sql = "INSERT INTO `customer`(`customer_id`, `customer_fname`, `customer_lname`,  `customer_email`, `password`,  `customer_address1`, `customer_address2`, `customer_state`, `customer_phone`, `customer_zip`,customer_status) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$streetaddress1', '$streetaddress2',  '$state', '$phone_number','$zip', 'MEMBER');";
      $res = $mysqli->query($sql);
      if($res){
         //header("Location: login.php");
         $last_id = $mysqli->insert_id;
         var_dump($_SESSION['registration']);
         switch ($_SESSION['registration']['$is_this_your_Shipping_address']) {
         case "on":
           $sql="INSERT INTO `shipping_address`(`shipping_address_no`, `customer_id`, `address1`, `address2`, `state`, `zip`) VALUES (null, $last_id,'$streetaddress1','$streetaddress2','$state','$zip')";
           $res = $mysqli->query($sql);
           if($res){
           header("Location: login.php");
           }
         break;
         }
      }
   }
/*
   //echo $_SESSION['registration']['$create_an_account'];
switch (isset(  $_SESSION['registration']['$password'])) {
  case "on":
    $fname= $_SESSION['registration']['$fname']; $lname=$_SESSION['registration']['$lname']; $email=$_SESSION['registration']['$email'];  $password=$_SESSION['registration']['$password']; $streetaddress1=$_SESSION['registration']['$streetaddress1']; $streetaddress2=$_SESSION['registration']['$streetaddress2']; $country=$_SESSION['registration']['$country']; $state=$_SESSION['registration']['$state']; $notes=$_SESSION['registration']['$notes']; $phone_number=$_SESSION['registration']['$phone'];  $zip=$_SESSION['registration']['$zip'];
    if(empty($fname) || empty($lname) || empty($email) || empty($country) || empty($state) || empty($streetaddress1) || empty($streetaddress2)){
    echo "some field missing";
    exit(0);
    }
    if(isset($email)){
    $sql="SELECT count(*) as c, customer_id, customer_status   FROM customer where customer_email = '$email'";
        $result=$mysqli->query($sql);
        $row = $result->fetch_assoc();
        if($row['c'] > 0 and $row['customer_status'] == "NONMEMBER"){
           $sql = "DELETE FROM `customer` WHERE `customer_email` = '$email' and `customer_status` = 'NONMEMBER'";
           $res = $mysqli->query($sql);
           }
         if($row['c'] > 0 and $row['customer_status'] == "MEMBER"){
           echo "<centre><b>You already have an account with us <a href='checkout.php'>Click to go back</a></b></center>";
         }else{
           $sql = "INSERT INTO `customer`(`customer_id`, `customer_fname`, `customer_lname`,  `customer_email`, `password`,  `customer_address1`, `customer_address2`, `customer_country`, `customer_state`, `customer_landmark`, `customer_phone`, `customer_zip`,customer_status) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$streetaddress1', '$streetaddress2', '$country', '$state', '$notes','$phone_number','$zip', 'MEMBER');";
           $res = $mysqli->query($sql);
           if($res){
           $last_id = $mysqli->insert_id;
           $sql= "INSERT INTO `customer_order`(`orderNO`, `CustomerID`, `payment_type`, `delivery_date`, `sale_amount`, `order_status`) VALUES (null, $last_id,'pay on delivery',STR_TO_DATE('1-01-2012', '%d-%m-%Y'), '16000', 'INCOMPLETE')";
           $res = $mysqli->query($sql);
           $last_id_for_order = $mysqli->insert_id;
           $products_in_cart = $_SESSION['cart'];
           $array_to_question_marks = implode(',', array_keys($products_in_cart));
           $result = $mysqli->query('SELECT * FROM inventoryitem WHERE InventoryItemID IN (' . $array_to_question_marks . ')');
           while($product = mysqli_fetch_array($result)){
           $itemid = $product['InventoryItemID'];
           $qty = (int)$products_in_cart[$product['InventoryItemID']];
           $cost = (float)$product['cost'] * (int)$products_in_cart[$product['InventoryItemID']];
           $sql= "INSERT INTO `productorder` (`orderID`, `InventoryItemID`, `delivery_date`, `quwantitiyofitem`, `total_price`, ) VALUES ($last_id_for_order, $itemid, '2023-02-27', $qty, $cost);";
           $res = $mysqli->query($sql);
           if($res)
           echo $sql."is inserted suscefully <br>";
           }
        }
       }
    }


    break;
  case "off":
    echo "it is off";
    break;
 // default:
   // echo "Your favorite color is neither red, blue, nor green!";
}
 exit(1);
//$defaultTimeZone='UTC';
 //   date_default_timezone_set($defaultTimeZone);
//$my_date = date('Y-m-d', strtotime("$month/$day/$year"));


$sql = "INSERT INTO `customer` (`CustomerID`, `Fname`, `Lname`, `email`, `password`, `address1`, `address2`, `zip`) VALUES (NULL, '$fname', '$lname', '$email', '$password', '$streetaddress1', '$streetaddress2', '$zip');";
//$sql = "INSERT INTO `user` (`user_id`,  `password`, `email`,  `fname`, `lname`,  `dob`, gender,country) VALUES (NULL, '$password', '$email', '$fname','$lname', '$my_date', '$gender','$country')";
   $res = $mysqli->query($sql);

   if($res){

       $last_id = $mysqli->insert_id;
       $_SESSION["uid"] = $last_id;
       $sql = "INSERT INTO `email` (`id`, `user_id`, `primary`, `email`) VALUES (NULL, $last_id, 1, '$email')";
       $res = $mysqli->query($sql);

        $sql="SELECT * FROM user where user_id = $last_id";
        $result=$mysqli->query($sql);

    if($result) {

        $row = $result->fetch_assoc();

       $vID = $row["user_id"];
       $vfname = $row["fname"];
       $vlname = $row["lname"];
       $str = filename_safe(strtolower($vfname).'-'.strtolower($vlname).'-'.$vID);
       makedir(preg_replace('/\s+/', '-', $str),$vID );
       $_SESSION["uid"] = $vID;
       $_SESSION['login'] = "1";
       $_SESSION['timeout'] = time();

       if(isset($_SESSION['tar']))
       {
       $afg=$_SESSION['tar']; header("Location: send_message.php?target_id=$afg");
       }else if(isset($_SESSION['target_audio'])){
           $afg=$_SESSION['tar']; header("Location: add_audio.php");
       }
       else
       {
        //header("Location: index.php?target_id=$vID");
        header("Location: profile-picture.php");
       }


       }else{
       printf("error: %s\n", $mysqli->error);
       exit(5);
          }


   }
 */
?>
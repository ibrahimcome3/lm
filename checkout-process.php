<?php
session_start();
include 'conn.php';
$last_id = null;
    $fname = strtolower($_POST['firstname']);   //string
    $lname = strtolower($_POST['lastname']);   //string
    $streetaddress1 = strtolower($_POST['streetaddress1']); //string
    $streetaddress2 = strtolower($_POST['streetaddress2']); //string
    $email = $_POST['email'];   //string
    $country = "NIGERIA";  //string
    $state = $_POST['state'];   //string
    $is_this_your_Shipping_address = (isset($_POST['is_this_your_Shipping_address'])) ? "on" : "off";
    $notes = $_POST['notes']; //string
    $create_an_account =  (isset($_POST['create_an_account'])) ? "on" : "off";
    $zip = $_POST['zip'];
    $password = '123456';
    $phone_number = $_POST['phone'];
    $item = [
      '$fname' => $fname,
      '$lname' => $lname,
      '$email' => $email,
      '$streetaddress1' => $streetaddress1,
      '$streetaddress2' => $streetaddress2,
      '$country' => $country,
      '$state' => $state,
      '$is_this_your_Shipping_address' => $is_this_your_Shipping_address,
      '$notes' => $notes,
      '$create_an_account' => $create_an_account,
      '$zip' => $zip,
      '$password' => $password,
      '$notes' => $notes,
      '$phone'=>$phone_number,
      '$landmark_note' => $notes,
    ];


    $_SESSION['registration'] = $item;
    //var_dump($_SESSION['registration']);


      // echo $_SESSION['registration']['$create_an_account'];
switch ($_SESSION['registration']['$create_an_account']) {
  case "on":
    if(empty($fname) || empty($lname) || empty($email) || empty($country) || empty($state) || empty($streetaddress1) || empty($streetaddress2)){
    echo "some field missing";
    exit(0);
    }
    if(isset($email)){
		$sql="SELECT count(*) as c, customer_id, customer_status   FROM customer where customer_email = '$email'";
        $result=$mysqli->query($sql);
        $row = $result->fetch_assoc();
        if($row['c'] > 0 and $row['customer_status'] == "MEMBER"){
        $result=$mysqli->query($sql);
		$row = $result->fetch_assoc();
        $last_id = $row['customer_id'];
        echo "<h3>this email is already registred <a href='checkout.php'>Click to go back</a></b></center></h3>";
		exit(4);
	} elseif(($row['c'] > 0 and $row['customer_status'] == "NONMEMBER" ) or ($row['c'] == 0)){
        header("Location: password-registration.php");
	}

 }
    break;
  case "off":
      $shipping_address = [
      'fname' => $fname,
      'lname' => $lname,
      'email' => $email,
      'customer_city' => $email,
      'customer_state' => $streetaddress1,
      'customer_country' => $country,
      'is_this_your_Shipping_address' => $is_this_your_Shipping_address,
      'create_an_account' => $create_an_account,
      'zip' => $zip,
      'customer_address_line_1' => $streetaddress1,
      'customer_address_line_2' => $streetaddress2,
      'landmark_note' => $notes,
      'phone'=>$phone_number,
      'notes' => $notes,
      'password' => $password,
      'state' => $state,
      'customer_mobile_number' => $phone_number
    ];

    $_SESSION['shipping_address'] = $shipping_address;
    $fname = $_SESSION['shipping_address']['fname'];
    $lname = $_SESSION['shipping_address']['lname'];
    $email = $_SESSION['shipping_address']['email'];
    $customer_city = $_SESSION['shipping_address']['customer_city'];
    $customer_state = $_SESSION['shipping_address']['customer_state'];
    $fname = $_SESSION['shipping_address']['customer_mobile_number'];
    $zip = $_SESSION['shipping_address']['zip'];
    $phone = $_SESSION['shipping_address']['phone'];
    $customer_address_line_1 = $_SESSION['shipping_address']['customer_address_line_1'];
    $customer_address_line_2 = $_SESSION['shipping_address']['customer_address_line_2'];
    $customer_country = $_SESSION['shipping_address']['customer_country'];
    $notes = $_SESSION['shipping_address']['notes'];

        if(isset($email)){
		$sql="SELECT count(*) as c, customer_id, customer_status   FROM customer where customer_email = '$email'";
        $result=$mysqli->query($sql);
        $row = $result->fetch_assoc();
        $customer_id = $row['customer_id'];
        if($row['c'] > 0 and $row['customer_status'] == "MEMBER"){

        echo "<h3>this email is already registred as a member <a href='checkout.php'>Click to go back</a></b></center></h3>";
		exit(4);
	} elseif(($row['c'] > 0 and $row['customer_status'] == "NONMEMBER" ) or ($row['c'] == 0)){
	 $sql = "DELETE FROM `customer` WHERE `customer_id` = $customer_id and `customer_status` = 'NONMEMBER'";
     $res = $mysqli->query($sql);
     if($res){
    $sql = "INSERT INTO `customer`(`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_address1`, `customer_address2`,
    `customer_country`, `customer_state`, `customer_landmark`, `customer_phone`, `customer_zip`)
    VALUES ($customer_id,'$fname','$lname','$email','$customer_address_line_1','$customer_address_line_2','$customer_country','$customer_state','$notes','$phone','$zip')";
      $res = $mysqli->query($sql);
      if($res) {
      $last_id = $mysqli->insert_id;
      $sql= "INSERT INTO `customerorder`(`orderNO`, `CustomerID`, `payment_type`, `delivery_date`, `sale_amount`, `order_status`) VALUES (null, $last_id,'pay on delivery',STR_TO_DATE('1-01-2012', '%d-%m-%Y'), '16000', 'INCOMPLETE')";
      $res = $mysqli->query($sql);
      $last_id_for_order = $mysqli->insert_id; // this will be used to regirter orderd products.
      header("Location: order-confirmation-page.php");
      }

     }

    }

 }
    //var_dump($_SESSION['shipping_address']);




        //$sql = INSERT INTO `customer_order_address`(`customer_address_id`, `customer_id`, `customer_city`, `customer_state`, `customer_country`, `customer_pincode`, `customer_mobile_number`, `customer_address_type`, `status`, `customer_address_line_1`, `customer_address_line_2`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])
   // echo "it is off";
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

   function makedir($structure,$vID ){
 include 'include/conn.php';
    if (!mkdir("voices/".$structure, 0777, true)) {
    die('Failed to create folders...');
} else{
      if(mkdir("voices/".$structure."/post_image", 0777, true)){

      }
    mkdir("voices/".$structure."/tracks", 0777, true);
    if(mkdir("voices/".$structure."/photo", 0777, true)){
    mkdir("voices/".$structure."/photo/profile_pic", 0777, true);
    }
     if(mkdir("voices/".$structure."/images", 0777, true)){
     mkdir("voices/".$structure."/images/temp", 0777, true);
     mkdir("voices/".$structure."/images/thumbnail", 0777, true);
     if(mkdir("voices/".$structure."/tracks/del", 0777, true)){
     }
    }
    if(mkdir("voices/".$structure."/uploads", 0777, true)){
    mkdir("voices/".$structure."/uploads/temp", 0777, true);
    }

$sql="UPDATE user SET folder_name ='$structure' WHERE user_id = $vID";
$result=$mysqli->query($sql);
if ( false===$result ) {
  printf("error: %s\n", $mysqli->error);
  exit();
}

}

   }

   function filename_safe($name) {
    $except = array('\\', '/', ':', '*', '?', '"', '<', '>', '|');
    return str_replace($except, '', $name);
}
?>
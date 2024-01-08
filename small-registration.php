<?php
session_start();
include "conn.php";
$noerror = array();
$er = array();
$email = $_POST['r_email'];
$password = $_POST['r_password'];


if(isset($email) and isset($password)){
    $sql="SELECT * from customer where customer_email = '$email'";
    $result=$mysqli->query($sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount > 0){
       echo '0';
    }elseif($rowcount == 0 ){
      $sql = "INSERT INTO `customer`(`customer_id`,  `customer_email`,  `customer_status`, `password` ) VALUES (null, '$email','INCOMPLETE ACCOUNT INFORMATION','$password')";
      $result=$mysqli->query($sql);
      if($result){
      $last_id = $mysqli->insert_id; 
      if(isset($_SESSION['INCOMPLETE-REGISTRATION'])){ 
        unset($_SESSION['INCOMPLETE-REGISTRATION']);
      }else{    
        $_SESSION['INCOMPLETE-REGISTRATION'][$last_id] = 'YES';
        $_SESSION['INCOMPLETE-REGISTRATION']['uid'] = $last_id;
        $_SESSION['INCOMPLETE-REGISTRATION']['email'] = $email;
        $_SESSION['INCOMPLETE-REGISTRATION']['password'] = $password;
        
      }
      echo "small-registration-completion-page.php?target_id=$last_id";
      //var_dump($_SESSION);
      //header("Location: small-registration-completion-page.php?target_id=$last_id"); 
      //exit();
      } 
 
    }
    
}else{
    echo "Please type a valid email or password";
}


?>
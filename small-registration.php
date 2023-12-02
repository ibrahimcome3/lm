<?php
session_start();
include "conn.php";
$noerror = array();
$er = array();
$email = $_POST['register-email'];
$password = $_POST['register-password'];


if(isset($email)){
    echo $email."   ";
echo $password;
        $sql="SELECT count(*) as c, customer_id, customer_status   FROM customer where customer_email = '$email'";
        $result=$mysqli->query($sql);
        $row = $result->fetch_assoc();
        var_dump($result);
        $customer_id = $row['customer_id'];
        if($row['c'] > 0 and $row['customer_status'] == "MEMBER"){
        $er["existing_email_error"] = 'This email is already registred';
        echo json_encode($er);
        exit(4);
        }elseif($row['c'] > 0 and $row['customer_status'] == "INCOMPLETE ACCOUNT INFORMATION"){
             header("Location: small-registration-completion-page.php?target_id=$last_id");    

    }elseif($row['c'] > 0 and $row['customer_status'] == "NONMEMBER"){
           $sql = "DELETE FROM `customer` WHERE `customer_email` = '$email' and `customer_status` = 'NONMEMBER'";
           $res = $mysqli->query($sql);
           if($res){
           $sql = "INSERT INTO `customer`(`customer_id`,  `customer_email`,  `customer_status`, `password` ) VALUES ($customer_id, '$email','INCOMPLETE ACCOUNT INFORMATION','$password')";
           $result=$mysqli->query($sql);
          if($result){
            $last_id = $mysqli->insert_id;
            $_SESSION['small-registration']['new-customer-id'] = $last_id;
            $_SESSION['small-registration']['new-customer-email'] = $email;
            $_SESSION['small-registration']['new-customer-password'] = $password;
            header("Location: small-registration-completion-page.php?target_id=$last_id");
        }
           }
    }
    else{
        $sql = "INSERT INTO `customer`(`customer_id`,  `customer_email`,  `customer_status`, `password` ) VALUES (null, '$email','INCOMPLETE ACCOUNT INFORMATION','$password')";
        $result=$mysqli->query($sql);
        if($result){
            $last_id = $mysqli->insert_id;
            $_SESSION['small-registration']['new-customer-id'] = $last_id;
            $_SESSION['small-registration']['new-customer-email'] = $email;
            $_SESSION['small-registration']['new-customer-password'] = $password;
            header("Location: small-registration-completion-page.php?target_id=$last_id");

        }
        $row = $result->fetch_assoc();
    }
}

?>
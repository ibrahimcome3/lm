<?php
session_start();
require_once  'C:\wamp64\www\lm\conn.php';
$newslater = $_POST["newsletter"];
if(isset($_POST["newsletter"])){
            if (filter_var($newslater, FILTER_VALIDATE_EMAIL)) {
              $sql = "INSERT INTO `newsletter`(`newsletter_`) VALUES ('$newslater')";
              $result = $mysqli->query($sql);
            if($result){
                echo "You have sucessfully register for our news latter<br/>";
                echo "You can unsubscribe from the news latter by sending an email to customer@lagosmarket.com.ng<br/>";
               }
            else{$emailErr = "Invalid email format or duplicate email address<br/> <a href='index.php'>Click to return to homepage</a>"; echo $emailErr;}

}  else{echo "Please enter a valid email address";}

}
?>
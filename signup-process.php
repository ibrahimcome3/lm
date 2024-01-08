<?php
$mysqli = new mysqli("localhost","root","","dispatch");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['password-confirm'];
if($password !== $confirm_password){
  echo "<div style=\"color: red;\">Your password did not match with your confirm password</div>";
  exit();  
}
 
if("" === trim($fname)){
	echo "Pls enter your first name";
	exit();
} 

if("" === trim($lname)){
	echo "Pls enter your last name";
	exit();
} 

if("" === trim($email)){
	
	echo "Pls enter your email address";
	exit();
	
} 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
	exit();
}

$password = md5($password);
$sql = "INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password_`) VALUES 
       (NULL, '$fname', '$lname', '$email', '$password');";

$result = $mysqli->query($sql);
if($result){
	echo "Eshe Gan";
}else{
	echo "We have an error simple try again later";
}
 
 

?>
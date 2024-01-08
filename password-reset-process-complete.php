<?php

require_once "includes.php";
include "class/Outuser.php";
$o = new Outuser();
$_SESSION['password_reset']['uid'] = 41;
$error = "";
$noerror;
if($_POST){
if(isset($_SESSION['password_reset']['uid'])){
	if(isset($_POST['new_pass']) and isset($_POST['confirm_new_pass'])){
		$pass_ = $_POST['new_pass'];
		$confirm_pass_ =  $_POST['confirm_new_pass'];
		
		if($pass_ === $confirm_pass_){
			if(strlen($pass_) >= 6){
				
				 if($o->update_password($pass_)){
					 
					 $noerror = "<span style='color: red;'>Your passwords has been reset <a href='login.php'>click here to login</a></span>";

					}
			}else{
				
				$error = "<span style='color: red;'>Your password is too small. Make it six or more characters</span>";
			}
	
		}else{
			$error = "<span style='color: red;'>Password did not march<span>";

		}
		if(strlen($error)>0){
			  header('Location: password-reset-page.php?er='.$error);
			  exit();
		}
		if(strlen($noerror)>0){
			  
			  header('Location: login.php');
		}
		
	}
}
}

?>
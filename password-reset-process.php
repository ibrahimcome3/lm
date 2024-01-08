<?php

require_once "includes.php";
include "class/Outuser.php";
$o = new Outuser();

if($_POST){
	
	if(isset($_POST['resetusingemail'])){
		$email_ = $_POST['resetusingemail'];
		
		if($o->check_email_account_exit($email_)){
			echo "Pls check your email address to reset your mail";
			exit();
		}
	}
}

?>
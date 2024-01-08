<?php 
require_once "includes.php"; 
if("" == trim($_POST['cpassword'])){
//if(count(stripslashes($_POST['cpassword'])) <= 0 ){
if($user_->update_user_credentials($_POST['fname'], $_POST['lname'], $_POST['dname'], $_POST['cemail'])){
   echo "Your records have been update Sccessfully <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
   exit();
   
	
}else{
	echo "error pls try again later <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
	exit();
}
}

if("" !== trim($_POST['cpassword'])){
	if($_POST['cpassword'] == $user_->get_password()){
			if(($_POST['npassword']) !== trim($_POST['cnpassword'])){
			echo "New Password and Confirm new Password did not match <br/>  <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
			exit();
			}else{
			 if($user_->update_user_credentials_password($_POST['fname'], $_POST['lname'], $_POST['dname'], $_POST['cemail'], $_POST['npassword'])){
			   echo "Your records have been update Sccessfully <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
			   exit();
			   
				
			}else{
				echo "error pls try again later <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
				exit();
			}
			 exit();
			}
	}else{
		echo "Incorrect Current Password<br/> <a href='".$_SERVER['HTTP_REFERER']."'>click here to go back</a>";
		exit();
	}
}


?>
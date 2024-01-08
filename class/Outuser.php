<?php 

   class Outuser
{

			public bool $mailsent;
			private function mailsendstatue(){
				if($this->mailsent) return true;
				else return false;
			}
			
			public function update_password($pass){
				include "conn.php";	
				if(isset($_SESSION['password_reset']['uid'])){
					$pass = md5($pass);
					$sql = "UPDATE `customer` SET `password`=  '$pass'";
					$result = $mysqli->query($sql);
					if($result){
					   return true;
					}else
					   return false;
				}
			
			}
			
			function check_email_account_exit($email){
			  include "conn.php";	
			   //echo $this->generateRandomString();
			
			  $sql = "SELECT * FROM `customer` WHERE `customer_email` =  '$email'";
			 try{
			  $result = $mysqli->query($sql);
			  if($result){
				  $rowcount=mysqli_num_rows($result);
				if($rowcount > 0){
					$row = $result->fetch_assoc();
					$token = $this->generate_token();
						$sql = "INSERT INTO `reset_token_password` (`token_id`, `user_id`, `token`, `expired`, `date_created`) VALUES (NULL, '".$row['customer_id']."', '".md5($token)."', '1', NOW());";
						$update_expired_result = "UPDATE `reset_token_password` SET  expired = 0  WHERE `user_id` = ".$row['customer_id'];
						$r = $mysqli->query($update_expired_result);
						if($r){
						$result = $mysqli->query($sql);
						if($result){
							if($this->sendmail($token)){
							   return true;	
							}
						}
				       }
					
					
					//if($this->sendmail($this->generateRandomString())){
					//	return true;
					//}
				}	  
			  }
            }catch (Exception $e) {
				die("We have an internal error, pls try again later");
			}
				
		   }
		   
		    public function generate_token(){
				return $this->generateRandomString();
			}
		   
			public static function generateRandomString($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		   }
		   
		   public static function sendmail($content){
				require_once 'PHPMailer-master/PHPMailerAutoload.php';
				global $email;

				$mail = new PHPMailer;
				$mail->isSMTP();  
				$mail->Host = 'mail.goodguyng.com';
				$mail->SMTPAuth = true; 
				 $mail->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);                               
				$mail->Username = 'customer-response@goodguyng.com';                
				$mail->Password = '123456';                           
				$mail->Port = 25;                                

				$mail->setFrom('customer-response@goodguyng.com', 'Good Guy');

				$mail->addAddress($email,'Good Guy');               
				$mail->addReplyTo('customer-response@goodguyng.com');


				   
				$mail->isHTML(true);                               

				$mail->Subject = 'Password Recovery';
				$mail->Body    = "<div style='border: 1px solid #e7e7e7; height: 150px;'>
				<div style='height: 50px; width: 100%; background-color: #f8f8f8; '>
				<div style=' display:inline-block; height: 100%; vertical-align: middle;'></div>
				
				</div>
				<div style='padding: 10px;'> http://www.goodguyng.com/verify_password_credentials.php?pass=$content</div>
				</div>";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				if(!$mail->send()) {
					return  true;
				} else {
					return  false;
				}


				  
				  
					
			}  
 
}


?>
   
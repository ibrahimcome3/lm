<?php


session_start();
include "conn.php";
$er = null;
$noError = null;
$path = array();
$cookie_name = 'ID_my_site';
$previous_url = $_SERVER['HTTP_REFERER'];

if (!empty($_POST))
{ //  checkCookie() ;
    if (!$_POST['singinemail'] | !$_POST['singinpassword'])
    {
        $er = "Enter Email Address or Password";
         header("Location:".previous_url."?".$er);
    } else
    {
        $sql = "SELECT * FROM customer WHERE customer_email = '" . $_POST['singinemail'] ."'";
        $result = $mysqli->query($sql);
        if($result)
        $check2 = mysqli_num_rows($result);
	    $previous_url = $_SERVER['HTTP_REFERER'];
        if ($check2 == 0)
        {
            $er = "Incorrect email id";
             header("Location: login-page.php?er=".$er);
			 exit();

        } else
        {
            while ($info = mysqli_fetch_array($result))
            {
                $_POST['singinpassword'] = stripslashes($_POST['singinpassword']);
                $info['password'] = stripslashes($info['password']);
       
                if (md5($_POST['singinpassword']) != $info['password'])
                {
                    $er = "Incorrect password";
                    header("Location: login-page.php?er=".$er);
			        exit();
                } else
                {
                
                    $_SESSION["uid"] = $info['customer_id'];
                    $_SESSION["name"] = $info['customer_fname'];
                    $_SESSION['timeout'] = time();
                    if(isset($_SESSION['next_url'])){
                    $noError = $_SESSION['next_url'];
                    }else{
                    $noError = "index.php";
                    }

               

                    if (!isset($er))
                    {
                       header("Location: $noError");
					   exit();
                    } else
                    {
                       header("Location: login-page.php?er=".$er);
			           exit();
                        
                    }

                 
                }
            }
        }


    }

}

?>
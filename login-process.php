<?php


session_start();
include "conn.php";
$er = array();
$path = array();
$cookie_name = 'ID_my_site';

if (!empty($_POST))
{ //  checkCookie() ;
    if (!$_POST['singinemail'] | !$_POST['singinpassword'])
    {
        $er["error_one"] = "Enter Email Address or Password.";
        echo json_encode($er);
    } else
    {
        $sql = "SELECT * FROM customer WHERE customer_email = '" . $_POST['singinemail'] ."'";
        $result = $mysqli->query($sql);
        if($result)
        $check2 = mysqli_num_rows($result);
        if ($check2 == 0)
        {
            $er["error_two"] = "incorrect email id";
            echo json_encode($er);

        } else
        {
            while ($info = mysqli_fetch_array($result))
            {
                $_POST['singinpassword'] = stripslashes($_POST['singinpassword']);
                $info['password'] = stripslashes($info['password']);
                // $_POST['pass'] = md5($_POST['pass']);
                if ($_POST['singinpassword'] != $info['password'])
                {
                    $er["error_three"] = "Incorrect password";

                    echo json_encode($er);
                } else
                {
                    $noError = array();
                    $_SESSION["uid"] = $info['customer_id'];
                    $_SESSION["name"] = $info['customer_fname'];
                    $_SESSION['timeout'] = time();
                    if(isset($_SESSION['next_url'])){
                    $noError["path"] = $_SESSION['next_url'];
                    }else{
                    $noError["path"] = "index.php";
                    }

                    //header("Location: index.php?suid=$id&page=1");

                    if (count($er) === 0)
                    {
                        echo json_encode($noError);
                    } else
                    {
                        echo json_encode($er);
                        
                    }

                 
                }
            }
        }


    }

}

?>
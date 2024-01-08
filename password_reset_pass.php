<?php session_start(); ?>
<?php
include 'conn.php';
$base_url = $_SERVER['REQUEST_URI'];
       $parsed_url = parse_url($base_url);    
       $queryPart = (array_key_exists('query', $parsed_url)) ? $parsed_url['query'] : '';
       if(!isset($queryPart)){ 
        echo "incorrect link";
        exit();
       }else{
       $url_query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
       parse_str($url_query, $output);

       $code = MD5($output["pass"]);
       }
$sql ="SELECT * FROM reset_token_password where token = '$code' and expired = 1;";
$res = $mysqli->query($sql);
if($res){
	$rowcount=mysqli_num_rows($res);
	if($rowcount == 1){
   $row = mysqli_fetch_assoc($res);
   $_SESSION['password-reset'] = 1;
   $_SESSION['password_reset']['uid'] = $row["user_id"];
    if($row["token"]=== $code){
        header('Location: password-reset-page.php');
    }
}
}

?>
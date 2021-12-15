<?php
require_once('../util.php');



$name = $_POST["name"];
$_SESSION['name'] =$name;
$email = $_POST["email"];
$_SESSION['email'] =$email;
$message = $_POST["message"];
$_SESSION['message'] =$message;

if(empty($name) or empty($email) or empty($message) ){    
header('location: form.php');
exit;
}



//画面表示
include_once('../Views/check.php')
?>
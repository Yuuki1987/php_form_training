<?php
require_once('../util.php');



$name = $_POST["name"];
$_SESSION['name'] =$name;
$email = $_POST["email"];
$_SESSION['email'] =$email;
$message = $_POST["message"];
$_SESSION['message'] =$message;

if(empty($name) or empty($email) or empty($message) ){
    if (empty($_SESSION['name'])) {
        $_SESSION['name'] == 0;
    }
    if (empty($_SESSION['email'])) {
        $_SESSION['email'] == 0;
    }
    if (empty($_SESSION['message'])) {
        $_SESSION['message'] == 0;
    }   
header('location: form.php');
exit;
}



//画面表示
include_once('../Views/check.php')
?>
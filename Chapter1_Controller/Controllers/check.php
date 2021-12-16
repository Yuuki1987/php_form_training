<?php
require('../util.php');

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// 3つのデータがなければform画面に遷移
if (empty($name) or empty($email) or empty($message)) {
    header('location: form.php');
    exit;
}

//画面表示
include_once('../Views/check.php')
?>
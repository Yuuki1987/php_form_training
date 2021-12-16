<?php
require_once('../util.php');

if ($_SESSION) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = $_SESSION["message"];
}

include_once('../Views/submit.php');
$_SESSION = array();
?>
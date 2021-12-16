<?php
require('../util.php');

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


include_once('../Views/submit.php');
?>
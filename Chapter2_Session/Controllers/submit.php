<?php

require_once('../util.php');

$name = $_SESSION['name'] ;
$email = $_SESSION['email'] ;
$message = $_SESSION['message'] ;


include_once('../Views/submit.php');
?>
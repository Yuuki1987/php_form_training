<?php
require_once('../util.php');

if ($_SESSION) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $message = str_replace(array("\r", "\n"), '', $_SESSION["message"]);
    $line = array($name, $email, $message);
    $file_name = "../answer.csv";
    $fp = fopen($file_name, "a");
    fputcsv($fp, $line);
    fclose($fp);
}
$lines = file("../answer.csv");
include_once('../Views/submit.php');
$_SESSION = array();
?>
<?php
$_TITLE = 'Home';
session_start();

if (empty($_SESSION["korpa"])) {
    $_SESSION["korpa"] = array();
}

array_push($_SESSION['korpa'], $_GET["id"]);
var_dump($_SESSION['korpa']);
header('Location: ' . 'korpa.php');

?>
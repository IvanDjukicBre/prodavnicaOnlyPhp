<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 22.16
 */
include 'admin/moduli/header2.php';
if (!isset($_SESSION["username"])) {
    echo 'Niste loginovani';
    die;
}
$kom=$_POST["komentar"];
$korisnik=$_SESSION["username"];
$sql ="SELECT * FROM users WHERE UserFistName='".$korisnik."'";
var_dump($sql);
$result = $conn->query($sql);


/*
 *
 *
 * ----------------------
select oc_product_description.name, oc_manufacturer.name, oc_product.price from oc_product
join oc_product_description on oc_product.product_id = oc_product_description.product_id
join oc_manufacturer on oc

 */
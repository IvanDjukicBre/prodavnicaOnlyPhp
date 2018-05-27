<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 20.33
 */
require_once 'moduli/connectToDb2.php';

	//pretpostavimo da je korisnik siguran u svoju akciju cim je dosao dovde
	$id = intval($_REQUEST['id']); //ako i ne postoji bice 0, tako da svakako upit ce biti korektan

	$db->query("delete from products where ProductID=$id");

	header("Location: index.php");

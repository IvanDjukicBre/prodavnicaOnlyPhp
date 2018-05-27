<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 19.49
 */
$db = new mysqli('localhost', 'root', '', 'baza');
if( $db->errno ){
    echo $db->error;
    die();
}
$db->query("set names utf8");
?>
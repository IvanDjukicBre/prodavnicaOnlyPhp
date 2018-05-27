<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 20.50
 */

include_once "moduli/connectToDb.php";

$unosMail=$_POST["email"];
$unosPass=$_POST["sifra"];

$hash=md5($unosPass);
    //echo $pass;

$sql = "SELECT UserID, UserFirstName as ime, UserPassword as pass, UserEmailVerified as verif FROM users WHERE UserEmail = '$unosMail' AND  UserID=5";

$result = $conn->query($sql);
//header('Location: '.'index.php');
//echo $sql;

$provera = $result->fetch_assoc();
if($hash==$provera["pass"] &&  $provera["verif"]==1)
{
    echo "uspeh";
    session_start();

    $_SESSION["username"] = $provera["ime"];
//    $_SESSION["admin"] = 'da';
    $_SESSION["admin"] = "cat";
    header('Location: '.'index.php');

}
else if($hash==$provera["pass"] && $provera["verif"]==0)
{
    echo "akaunt nije verifikovan";
}
else
{
    header('Location: '.'login.php?id=1');

}


?>

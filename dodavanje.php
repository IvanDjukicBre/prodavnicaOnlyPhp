<?php
include_once "scripts/connectToDb.php";
$unos1=$_POST["ime"];
$unos2=$_POST["prezime"];
$unos3=$_POST["email"];
$unos4=$_POST["grad"];
$unos5=$_POST["adresa"];
$unos6=$_POST["sifra"];
$pass=md5($unos6);
if( $unos1==NULL )
{
    header('Location: '.'register.php?id=1');
    die;
}
if( $unos2==NULL )
{
    header('Location: '.'register.php?id=2');
    die;
}
if( $unos3==NULL )
{
    header('Location: '.'register.php?id=3');
    die;
}
if( $unos4==NULL )
{
    header('Location: '.'register.php?id=4');
    die;
}
if( $unos5==NULL )
{
    header('Location: '.'register.php?id=5');
    die;
}
if( $unos6==NULL )
{
    header('Location: '.'register.php?id=6');
    die;
}
    //echo $pass;
$sql= "SELECT UserEmail as mail from users";
$result = $conn->query($sql);
foreach($result as $row)
{
    if($unos3==$row["mail"])
    {
        die ("Korisnik sa istom email adresom je vec registorvan");
    }
}

$sql = "INSERT INTO users (UserFirstName, UserLastName, UserEmail, UserCity, UserAddress, UserPassword)
VALUES ('$unos1', '$unos2', '$unos3', '$unos4','$unos5','$pass')";
$result = $conn->query($sql);
header('Location: '.'uspesnaRegistracija.php');
//echo $sql;


$subject = "Verifikacija - The Last Stand";
$message = "http://ivandjukic.xyz/verifikacija.php";
mail( $unos3, "Subject: $subject", $message, "For: $unos1" );


?>

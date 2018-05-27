<?php
include_once "scripts/connectToDb.php";
$email = $_REQUEST['email'] ;
$subject = "Kontakt - The Last Stand";
$message = $_REQUEST['poruka'] ;
mail( "idjurkic15@raf.edu.rs", "Subject: $subject", $message, "From: $email" );
header('Location: '.'index.php');
//NE RADI!!!! (ili mozda radi)

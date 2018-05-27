<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 14.6.2017.
 * Time: 15.18
 */
require 'connectToDb.php';
/*
session_start();
if($_SESSION["admin"]!="cat"){

    echo 'Zabranjen pristup';
    header("Location: login.php");
    die();
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <link rel="icon" href="https://lh3.ggpht.com/c8WzwLsZKo0BG1tKmUSNWgz5KE8JgldMoDT3WnyDWlXxNDaYOwCC2q4z7Pt8hO3QxhI_=w300" sizes="192x192"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .bggif  {
            background-image: url("http://image.blingee.com/images19/content/output/000/000/000/821/870007923_1541001.gif?4");
        }

        .bgyellow {
            background-color: #ffff00;
        }
    </style>
</head>
<body>

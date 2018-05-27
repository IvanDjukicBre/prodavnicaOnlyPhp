<?php
session_start();

        $curpage = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_BASENAME);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://s26.postimg.org/5ugwjf9op/ikonica.png" sizes="192x192"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if ($curpage == 'index.php') {
                    echo "Last Stand Home";
                } else if($curpage == 'store.php') {
                    echo "Last Stand Prodavnica";
                } else if($curpage == 'korpa.php'){
                    echo "Last Stand Korpa";
                } else if($curpage == 'login.php'){
                    echo "Last Stand Login";
                }else if($curpage == 'register.php'){
                    echo "Last Stand Register";
                }else if($curpage == 'news.php'){
                    echo "Last Stand Vesti";
                }else if($curpage == 'contact.php'){
                    echo "Last Stand Kontakt";
                }else if($curpage == 'prikaz.php'){
                    echo "Last Stand Proizvod";
                }else if($curpage == 'prikazKat.php'){
                    echo "Last Stand Prodavnica";
                }else if($curpage == 'newsLook.php'){
                    echo "Last Stand Vest";
} ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- Temporary fix for navbar responsiveness -->


    <style>
        .navbar-toggler {
            z-index: 1;
        }

        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }

        body {
            background-color: #4c4c4c;
        }

        login {
            background-color: #4c4c4c;
        }

        @media (max-width: 576px) {
            nav > .container {
                width: 100%;
            }
        }

        /* Temporary fix for img-fluid sizing within the carousel */

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        /*social media icons */

        .fa {
            padding: 20px;
            font-size: 20px;
            width: 65px;
            text-align: center;
            text-decoration: none;
            margin: -50px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }

        .fa-snapchat-ghost {
            background: #fffc00;
            color: white;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        .dropbtn {
            background-color: dimgray;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 250px !important;
        }

        .filterbtn {
            background-color: dimgray;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 250px !important; /*dugme u stilu sajta*/
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: black;
        }


        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 52px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }


    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">

        <a class="navbar-brand" href="index.php">TheLastStand.com</a>

      
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav ml-auto">

                <!--
<li class="nav-item active">
php if($curpage=='index.php'){ echo 'class="nav-item active"'; }else{ echo "class="nav-item"; }
            -->

                <li <?php if ($curpage == 'index.php') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li <?php if ($curpage == 'store.php') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                    <a class="nav-link" href="store.php?id=991">Prodavnica</a>
                </li>
                <li <?php if ($curpage == 'korpa.php') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                    <a class="nav-link" href="korpa.php">Korpa</a>
                </li>
                <?php
                if (!isset($_SESSION["username"])) {

                    if ($curpage == 'login.php') {
                        echo '<li class="nav-item active"';
                    } else {
                        echo '<li class="nav-item"';
                    }
                    echo "><a class='nav-link' href='login.php?id=0'>Login</a>
                        </li>";
                }

                ?>


                <li <?php if ($curpage == 'news.php') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                    <a class="nav-link" href="news.php">Vesti</a>
                </li>
                <li <?php if ($curpage == 'contact.php') {
                    echo 'class="nav-item active"';
                } else {
                    echo 'class="nav-item"';
                } ?>>
                    <a class="nav-link" href="contact.php">Kontakt</a>
                </li>

            </ul>


        </div>
    </div>
    <ul>
        <li>
            <?php
            if (isset($_SESSION["username"])) {
                echo "<h6 style='color:white;' >Zdravo " . $_SESSION["username"] . ".<a href='odjava.php'> &nbsp; Odjavi se</a></h6>";
            }
            ?>

        </li>

    </ul>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <br>
            <div>
                <a href="index.php">
                    <img src="slike/logo.png" alt="The Last Stand Logo">
                    <!--   width="250" height="345"-->
                </a>
            </div>
            <br>
            <div class="list-group">
                <div class="dropdown">
                    <button class="dropbtn">Muzika</button>
                    <div class="dropdown-content">
                        <a href="prikazKat.php?id=1">CD</a>
                        <a href="prikazKat.php?id=2">Earbook</a>
                        <a href="prikazKat.php?id=3">Vinyl</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Merch</button>
                    <div class="dropdown-content">
                        <a href="prikazKat.php?id=4">T-Shirt</a>

                    </div>
                </div>
            </div>
            <br>
            <h5>Pretraga</h5>
                <form class="navbar-form navbar-left" method="POST" action="pretraga.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="q" placeholder="Sabaton">
                    </div>
                    <button type="submit" class="filterbtn" >Pretraga</button>
                </form>
            <br>
            <h5>Pretraga po ceni</h5>
            <form class="navbar-form navbar-left" method="POST" action="cenaFilter.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="od" placeholder="OD">
                    <input type="text" class="form-control" name="do" placeholder="DO">
                </div>
                <button type="submit" class="filterbtn" >Pretraga</button>
            </form>
        </div>


        <!-- HEDER -->

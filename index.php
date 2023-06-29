<?php
include 'konekcija.php';
include 'model/proizvod.php';
include 'model/kategorija.php';

session_start();

$user="";

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
if (isset($_COOKIE["admin"]))
    {
        $user=$_COOKIE["admin"];
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Republic</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="stranica">

    <nav class="navbar navbar-expand-lg navbar-light" id="navCont" style="height:100px; ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-lg-0 " style="margin-left: 2%; margin-top:10px;   ">
                    <li><a id="btn-Pocetna" href="index.php" type="button" class="btn btn-success btn-block" >
                        Pocetna</a></li>
                    <li><a id="btn-Dodaj" type="button" class="btn btn-success btn-block"  data-toggle="modal" data-target="#my" >
                        Nov proizvod </a></li>
                    <li><a id="btn-Prikazi" href="prikaziProizvode.php" type="button" class="btn btn-success btn-block">
                        Svi proizvodi</a></li>
                    <li><a id="btn-Pocetna" href="odjava.php" type="button" class="btn btn-success btn-block" >
                    Odjava</a> </li>
                    <li> <h1 class="navbar-brand " style="color:white ; font-weight:bold; font-size:30px; margin-top:-60px; margin-left: 1100px; text-decoration:underline">
                    Pet Republic</h1></li>
                </div>
            </div>
    </nav>

    <div id="ww" >
        <div class="container">
            <div class="row" >
                <div class="col-lg-8 col-lg-offset-2 centered" style="display:flex; justify-content:flex-start; align-items: center; width: 90%">
                    <img src="https://c4.wallpaperflare.com/wallpaper/989/621/164/a-pup-in-spring-wallpaper-preview.jpg" alt="pocetna" class="img img-circle" style="width: 49%; margin-left:-350px; margin-right: 20px">
                    <h2 style="color:white ; background-color:#A64B2A; padding:50px; border-radius:50%; margin-top:10px; width: 49%"> Dobrodosli u Pet Republic. Pronađite najbolje proizvode za vaše ljubimce!</h2>
                    <img src="https://wallpapercrafter.com/sizes/1366x768/144539-flowers-animals-outdoors-dog-mammals-photography-depth-of-field.jpg" alt="pocetna" class="img img-circle" style="width: 49%; margin-left:20px; margin-right: -60px;">

                </div>
            </div>
        </div>
    </div>

</body>
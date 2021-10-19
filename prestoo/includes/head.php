<?php include 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mainsection.css">
    <title><?php SITENAME; ?></title>
</head>
<body>

<header class="header">
    <nav class="navbar">
        <div class="logo">
        <li><a  class="logo-1" href="#">PRESTO</a></li>
        <p>on dîne bien</p>
        </div>
            <ul class="ul-ul">
                <li><a href="">Home</a> </li>
                <li><a href="">Menue</a</li>
                <li><a href="">Order</a></li>
                <li><a href="">reservation</a></li>
            </ul>
            <div  class="img-responsive">
                <img src="../public/images/menu.png"    style="width:30px; " alt="">
            </div>
                        <div id="hidden-div " style="visibility:hidden">
                                <ul class="ul-ul2">
                                    <li><a href="">Home</a> </li>
                                    <li><a href="">Menue</a</li>
                                    <li><a href="">Order</a></li>
                                    <li><a href="">reservation</a></li>
                                </ul>
                         </div>
            <div class="logo-li">
                <li class="active">
                    <a href  class="btn-primary btn-primary-a"  href="private/login.php">Login</a></li>
            </div>
    </nav>
</header>
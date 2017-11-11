<?php namespace App\Views\parts; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rozetka</title>
    <link href="style.css" rel="stylesheet">
    <style>
        .header {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            grid-gap: 20px;
        }

        .header div {
            background-color: lavender;
            border: 1px solid #212941;
            border-radius: 5px;
            padding: 8px 15px;
            font-size: 18px;
            font-family: roboto;
        }

        .header div:nth-child(odd) {
            background-color: lavender;
        }
    </style>
</head>

<body>

<div class="header">
    <div><a href="index.php">Home</a></div>
    <div><a href="#">Registration</a></div>
    <div><a href="#">Login</a></div>
    <div><a href="#">Basket</div>
    <? //=getBasketCounter()?><!--</a>-->
    <? // if (!empty($_SESSION['basket'])) { ?>
    <div><a href="#?empty=del"> Empty </a></div>
    <div><a href="#">Exit</a></div>
    <? //if ($_SESSION['user_name'] == 'admin') {?>
    <div><a href="#">AdminCategories</a></div>
    <div><a href="#">AdminGoods</a></div>
    <? // php } ?>
</div>
<!--</body>-->
<!---->
<!--</html>-->
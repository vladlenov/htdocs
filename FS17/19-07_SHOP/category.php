<?php

include_once "allSet.php";


if (isset($_POST['action']) && $_POST['action']=="toBasket") {
    putToBasket($_POST['itemId']);
}

include_once "parts/header.php";
include_once "parts/menu.php";

$items = getGoodsByCategory($_GET['id']);
include_once "parts/categoryList.php";

include_once "parts/footer.php";


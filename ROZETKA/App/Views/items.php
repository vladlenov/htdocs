<?php
namespace App\Views;
use App\Controllers\ItemsController;
use App\models\itemsModel;
?>

<link rel="stylesheet" href="style.css">

<? foreach ($items as $row) : ?>

<div class="container">
<h3><?=$row["product_name"];?></h3>
<h4><?=$row["product_descr"];?></h4>
<h2><?=$row["product_price"];?></h2>
</div>

<? endforeach; ?>
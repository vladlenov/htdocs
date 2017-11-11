<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 22.07.17
 * Time: 22:39
 */
include_once "allSet.php";
include_once "parts/header.php";
$allGoods = getGoods();
if (isset($_GET['empty']) && $_GET['empty'] == 'del') {
    $_SESSION['basket'] = [];
    header('Location: index.php');
}
?>

<table border="1" cellpadding="5" style="margin: 10px auto">
    <? foreach ($_SESSION['basket'] as $inBusket) : ?>
    <tr>
        <td><a href="item.php?id=<? echo $inBusket['id'] ?>"><?=$allGoods[$inBusket]['name']?></a> </td>
        <td><a><?=$allGoods[$inBusket]['price']?></a> </td>
    </tr>
    <? endforeach; print_r($_SESSION['basket'])?>
    <tr>
        <p style="text-align: center">
            <form>
            <br>
            <button value="<? unset($_SESSION['basket'])?>">Очистить корзину</button>
            </form>
        </p>
    </tr>
</table>

<? include_once "parts/footer.php"; ?>
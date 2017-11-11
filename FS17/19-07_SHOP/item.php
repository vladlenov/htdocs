<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 26.07.17
 * Time: 16:15
 */

include_once "allSet.php";
include_once "parts/header.php";
//print_r(getGoods());
/**
 * @param $id
 * @return array
 */
function getItemById ($id)
{
    return array_filter(getGoods(), function ($items) use ($id){
        return $items ['id'] == $id;
    });
}

$item = getItemById($_GET['id']);
$id = $_GET['id'];
?><pre><? print_r($items);?></pre><?
?>

    <br>
    <table border="1" cellpadding="2" align="center">
        <tr>
            <td>ID</td>
            <td>Название</td>
            <td>Описание</td>
            <td>Цена</td>
            <td>Категория</td>
        </tr>
        <tr>
            <td><? echo $item[$id]['id']; ?></td>
            <td><? echo $item[$id]['name']; ?></td>
            <td><? echo $item[$id]['description']; ?></td>
            <td><? echo $item[$id]['price']; ?></td>
            <td><? echo $item[$id]['category'] ?></td>
        </tr>
    </table>

<?
include_once "parts/menu.php";
include_once "parts/footer.php";
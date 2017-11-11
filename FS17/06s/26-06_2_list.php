<?php
/**
 * 2. Взять массив с ключами
 * $car = [['id'=>1, 'model'=>'Tesla', 'price'=>1000], ['id'=>2, 'model'=>'Tesla X', 'price'=>10000]]
 * вывести в виде таблицы (Номер, модель и цена), где модель - ссылка на файл info.php?model = и подставить модель.
 * Таблица должна быть отсортирована по убыванию цен.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 29.06.17
 * Time: 11:59
 */
?>

<table lang="en">

    <thead bgcolor="skyblue">
        <tr>
            <td>ID</td>
            <td>MODEL</td>
            <td>PRICE</td>
        </tr>
    </thead>

    <?php $cars = [
            ['id' => 1, 'model' => 'Tesla',   'price' => 1000],
            ['id' => 2, 'model' => 'Tesla X', 'price' => 10000]
    ];
    array_multisort($cars['model'], SORT_DESC);?>

    <tbody>

    <?php    // print_r ($cars);
    foreach ($cars as list($i, $m, $p)) { ?>
    <tr>
        <td> <?php echo $i; ?> </td>
        <td> <?php echo $m; ?> </td>
        <td> <?php echo $p; ?> </td>
    </tr>
    <? } ?>
</table>
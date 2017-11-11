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
    array_multisort($cars['model'], SORT_DESC);
    ?>

    <tbody>

    <?php    foreach ($cars as $onecar):?>
    <tr>
        <td> <?php echo $onecar ['id'] //пробовал без echo, просто =$onecar ['id'] - не работает ?> </td>
        <td> <?php echo $onecar ['model'] ?> </td> <!-- указание на model из массива без использования ссылок на файл -->
        <td> <?php echo $onecar ['price'] ?> </td>
    </tr>;
    </tbody>

    <?php endforeach; ?>

</table>
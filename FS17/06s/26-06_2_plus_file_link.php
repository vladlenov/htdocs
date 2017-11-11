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
        ['id' => 1, 'price' => 1000],
        ['id' => 2, 'price' => 10000]
    ]; ?>

    <tbody>

    <?php  foreach ($cars as $onecar):?>
    <tr>
        <td> <?php echo $onecar ['id'] ?></td>
        <td> <?php $array_model = file('/26-06_2-info.php', FILE_IGNORE_NEW_LINES);  //попытка вернуть массив из файла, ругается что файла нет, а он то есть
        array_multisort($array_model['model'], SORT_DESC);
        foreach ($array_model as $model) {   //попытка присвоить переменной $model значения массива из файла
        echo $array_model ['model'];
        };?></td>
        <td> <?php echo $onecar ['price'] ?> </td>
    </tr>;
    </tbody>

<?php endforeach; ?>

</table>
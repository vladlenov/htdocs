<?php
/**
 * @param array $items
 *
 * 1. Сделать выход
 * 2. Сделать отображение корзины в виде таблицы
 * 3. Сделать вход (логин)
 * 4. Скрипт добавления категорий - считывание из файла списка категорий в массив,  добавть новый из формы и в файл
 * 5. Сделать форму добавления товара - параметры товара и выпадающий список с категориями из предыдущего файла, и заполнять товар
 */
ini_set("display_errors", 1);
include_once "allSet.php";

if (isset($_POST['action']) && $_POST['action'] == 'addgood') :
    $items = getGoods();
    $id = 1;
    if (!empty($items)) {
        $id = count($items) + 1;
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $new_item = ['id' => $id, 'name' => $name, 'description' => $description,
        'price' => $_POST['price'], 'category' => $category];

    $items[$id] = $new_item;
    saveGoods($items);
    header('Location:adminGoods.php');
endif;
?>

<? include_once "parts/header.php"; ?>

    <form  align="center" action="" method="post">
        <br>
        <input type="text" name="name" placeholder="Название товара"><br>
        <input type="text" name="description" placeholder="Описание товара"><br>
        <input type="number" name="price" placeholder="Цена товара"><br>
        <select name="category" id="categories">
            <?php foreach (getCategories() as $category) : ?>
            <option value="<?=$category['id'] ?>">
            <?= $category['name'] ?>
            </option>
        <?endforeach;?>
        </select><br>
        <input type="hidden" name="action" value="addgood">
        <input type="submit" value="Отправить">
        <br>
    </form>


<!--контрольный вывод -->
    <table style="margin: 10px auto" border="1" cellpadding="5">
        <?php
        foreach (getGoods() as $new_item) : ?>
                <tr>
                    <td><?php echo $new_item['id'] ?></td>
                    <td><a href="item.php?id=<? echo $new_item['id'] ?>"><?php echo $new_item['name'] ?></a></td>
                    <td><?php echo $new_item['description'] ?></td>
                    <td><?php echo $new_item['price'] ?></td>
                    <td><?php echo $new_item['category'] ?></td>
                </tr>
  <?php endforeach;?>
    </table>

<? include_once "parts/footer.php"; ?>
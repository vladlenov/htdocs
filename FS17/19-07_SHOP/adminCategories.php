<?php
/**
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 22.07.17
 * Time: 17:23
 */
ini_set("display_errors", 1);
include_once "allSet.php";

if (isset($_POST['action']) && $_POST['action'] == 'addcat') {
    $category = getCategories();
    $id = 1;
    if (!empty($category)) {
        $id = count($category) + 1;
    }
    $new_category = ['id' => $id, 'name' => $_POST['category']];
    array_unshift($category, $new_category);
    saveCategories($category);
    header('Location: adminCategories.php');
}
?>


<? include_once "parts/header.php"; ?>
    <br>
<form align="center" action="" method="post" name="addcat">
    <input type="checkbox" name="ifParent" value="on" <p>Родительская категория</p>
    <input type="text" name="category" placeholder="Категория товара"><br><br>
    <p>Подкатегория категории</p>
    <select name="parentCategory" form="addcat">
        <?foreach (getCategories() as $parentCategoryName) : ?>
            <option><? echo $parentCategoryName['name'] ?></option>>
        <?  endforeach; ?>
    </select>
    <input type="hidden" name="action" value="addcat"><br><br>
    <input type="submit" value="Отправить">
</form>

<table align="center">
    <?php
    foreach (getCategories() as $new_category) : ?>
            <tr>
                <td><?php echo $new_category['name'] ?></td>
            </tr>
<?  endforeach; ?>
</table>

<? include_once "parts/footer.php"; ?>
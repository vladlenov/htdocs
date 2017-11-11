<?php
/**
 * Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 * Реализовать проверку на наличие в тексте запрещенных слов, матов.
 * При наличии таких слов - выводить сообщение "Некорректный комментарий".
 * Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:53
 */

$swearing = ['дрянь', 'падло', 'мразь', 'мудак', 'тварь'];

function saveComments (array $comments) {
    file_put_contents('05-07_8_db.txt', serialize($comments));
}

function getComments() {
    $comments = file_get_contents('05-07_8_db.txt');
    if (empty($comments)) {
        return [];
    }
    return unserialize($comments);

function cleanText($text) {
        return strip_tags($text, '<b></b></ b>');
    }
}
if (isset ($_POST['action'])) {
    $user = cleanText($_POST['user_name']);
    $text = cleanText($_POST['text_area']);
    $new_comment = ['user' => $user, 'text' => $text];
    if (in_array($swearing, $new_comment)) {
        $attention = "<p>Некорректный комментарий</p>";
    }
    else {
    $comments = getGoods();
    array_unshift($comments, $new_comment);
    saveGoods($comments);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<form action = "" method="post">
    <input autofocus type="text" name="user_name" placeholder="Ваше имя" required><br>
    <textarea name="text_area" placeholder="Оставьте свой отзыв"></textarea><br>
    <input type="hidden" name="action">
    <input type="submit" value="Отправить">
    <table>
        <?php
        foreach (getGoods() as $comment) {
            ?>
                <tr>
                    <td><?php echo $comment['user']; ?></td>
                    <td><?php echo $comment['text']; ?>
                    <td bgcolor="red"><?php echo "$attention"; ?>
                    </td>

                </tr>
                <?php
}
        ?>
    </table>
</form>

</body>
</html>
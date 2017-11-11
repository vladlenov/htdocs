<?php
/**
 * Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
 * Created by PhpStorm.
 * User: vladlenov
 * Date: 07.07.17
 * Time: 13:52
 */

if (!is_file('guestbook.txt')) {
    echo "Добро пожаловать в пустоту! Ваш отзыв будет первым!" . PHP_EOL;
    $file = fopen('guestbook.txt', 'a+');// создаём файл если не создан
}
    elseif (isset($_POST['textarea']) && $_POST['textarea']) {
        $file = fopen('guestbook.txt', 'a+');
        $text = strip_tags($_POST['textarea']); //удаляем лишние теги из строки

        $comment_new = fwrite($file, $text . PHP_EOL); //делаем запись в файл
        $array = file('guestbook.txt');
        foreach ($array as $key => $value) {
            $key = $key++;//нумерация отзывов
            echo "Отзыв {$key}: {$value}" . PHP_EOL;
        }
    }
    else {
        echo 'Оставьте отзыв ниже:';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<form action="" method="post">
    <textarea name="textar" placeholder="Оставьте отзыв"></textarea>
    <br />
    <input type="submit" value="Отправить">
</form>
<br />
<br />
</body>
</html>
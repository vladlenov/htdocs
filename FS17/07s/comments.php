<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10.07.17
 * Time: 20:00
 */

include 'comment_include.php';

function swearingOut($comments) {
    $swearing = ['дрянь', 'падло', 'мразь', 'мудак', 'тварь'];
    $comments = str_replace($swearing, ' [censored] ', $comments);
    return $comments;
 }

if ($_POST['action'] == 1) {
    $user = $_POST['user_name'];
    $subject = $_POST['comment_subject'];
    $text = $_POST['text_area'];
    $text = swearingOut($text);
    $new_comment = ['user' => $user, 'subject' => $subject, 'text' => $text];

    $comments = getGoods();
    array_unshift($comments, $new_comment);
    saveGoods($comments);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Практическое занятие 10.07.2017</title>
</head>
<body>
<form action="" method="post">
    <input autofocus type="text" name="user_name" placeholder="Имя пользователя" required><br>
    <input type="text" name="comment_subject" placeholder="Тема комментария"><br>
    <textarea name="text_area" placeholder="Оставьте свой комментарий"></textarea><br>
    <input type="hidden" name="action" value="1">
    <input type="submit" value="Отправить">

</form>
<table>
<?php
foreach (getGoods() as $new_comment) {
    if($new_comment['flag'] == 1)     {
?>
    <tr>
        <td><?php echo $new_comment['user'] ?></td>
        <td><?php echo $new_comment['subject'] ?></td>
        <td><?php echo $new_comment['text'] ?></td>
    </tr>
<?php
}
}
?>
</table>
</body>
</html>

<?php
